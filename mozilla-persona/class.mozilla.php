<?php 
    /**
     * Intentificacion centralizada por medio del sistema Mozilla Persona.
     * Para más información: http://www.mozilla.org/en-US/persona/developer-faq/
     *
     * @author   David Martín Cervero, @DaveMTC
     * @license  Licencia GNU GPL
     * @version  Release: 1.0
     */
    
    class Mozilla_Persona {
        const REMOTE_URL = 'https://login.persona.org/verify';
        
        
        /**
          * Datos encriptados de la sesión.
          * @var string 
          */
        private $_assertion;
        
        /**
          * Dominio.
          * @var string 
          */
        private $_localURL;
        
        /**
          * Solicitud que se envia a Mozilla.
          * @var array 
          */
        private $_QueryHTTP;
        
        /**
          * Respuesta de Mozilla.
          * @var string 
          */
        private $_RequestJSON;
        
        /**
         * Contructor principal, define los atributos _assertion y _localURL
         * Una vez definidos carga la solicitud HTTP desde el metodo build_query().
         * 
         * @param string $assertion Datos recibidos por el $_POST.
         * @param string $localURL Dominio en el que estas enviando la solicitud.
         */
        public function __construct($assertion, $localURL){
            //Asignamos las propiedades desde el contructor.
            $this->_assertion = $assertion;
            $this->_localURL = $localURL;
            
            //Creamos la consulta que se enviara a Mozilla
            $this->build_query();
        } 
        
        /**
         * Comprueba si fue satisfactoria la indetificación y nos devuelve un booleano.
         * 
         * @return bool retorna true si es correcto.
         */
        public function get_is_login(){
            //Si la respuesta dada por Mozilla es valida, retornamos correcto.
            if($this->_RequestJSON->status == 'okay') return true;
        }
        
        /**
         * Recogemos la dirección de correo de la indentificación
         * 
         * @return string dirección de correo.
         */
        public function get_email(){
            //Si la sesión esta verificada correctamente, retornamos la dirección de correo.
            if($this->get_is_login()) return $this->_RequestJSON->email;
        }
        
        /**
         * Fecha en la que expira la sessión.
         * 
         * @return int retorna la fecha en formato unix.
         */
        public function get_expire(){
            //Si la sesión esta verificada correctamente, retornamos la fecha de expiración en formato unix.
            if($this->get_is_login()) return $this->_RequestJSON->expires;
        }
        
        
        /**
         * Cambia el dominio.
         * 
         * @param string $localURL Dominio en el que estas enviando la solicitud.
         */
        public function set_local_url($url){
            $this->_localURL = $url;
        }
        
        /**
         * Envia la petición anteriormente creada por el metodo build_query.
         *
         * @param bool retorna true si todo salio correcto.
         */
        public function set_http_request(){
        	        
            //Creamos el flujo de texto que sera enviado a Mozilla desde la propiedad _QueryHTTP.
            $ctx = stream_context_create($this->_QueryHTTP);
            
            //Creamos la conexión con mozilla y enviamos el contexto de la petición.
            $fp = fopen(self::REMOTE_URL, 'rb', false, $ctx);
            
            //Si la conexión fue correcta.
            if ($fp) {            
                //Leemos el contenido de la respuesta.
                $result = stream_get_contents($fp);
                
                //Asignamos a la propiedad _RequestJSON la respuesta descodificada en Json.
                $this->_RequestJSON = json_decode($result);
                
                return true;
            }
        }

        /**
         * Contruimos la petición HTTP que sera enviada a Mozilla.
         * 
         */
        private function build_query(){
            //Creamos un array con la solicitud recibida por el cliente y la direccion url de nuestro dominio.
            $httpArray = array( 'assertion' => $this->_assertion, 
                                'audience'  => urlencode($this->_localURL));
                                
            //Codificamos los datos en formato URL
            $data = http_build_query($httpArray);
            
            // Creamos la peticion y las cabezeras HTTP.
            $this->_QueryHTTP = array('http' => array( 'method'  => 'POST',
                                                       'content' => $data,
                                                       'header'  => "Content-type: application/x-www-form-urlencoded\r\n"
                                                                  . "Content-Length: " . strlen($data) . "\r\n")
                                      );                                                                          
        }
    }