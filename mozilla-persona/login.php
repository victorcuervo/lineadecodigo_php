<?php

//Primero iniciamos la sesion
session_start(); 
 
//Requerimos de la clase ya antes expuesta
require_once('class.mozilla.php');
 
//Creamos el objecto con el valor que se recibe desde el POST y nuestro Dominio
$objMozilla = new Mozilla_Persona($_POST['assertion'], 'lineadecodigo.com');

//Comprobamos que la conexión se haya efectuado correctamente
if($objMozilla->set_http_request()){
    //Comprobamos si la identificación fue correta    
    if($objMozilla->get_is_login()) {
        //Asignamos el correo a la variable de session        
        $_SESSION['email'] = $objMozilla->get_email();
        //Se imprime que todo fue correcto en formato Json
        echo json_encode(array("status" => "okay", "action" => 'new'));
    }
}
 
 