<?php
$file = 'imagen.jpg';
$image = imagecreatefromjpeg($file);

header('Content-Type: ' . image_type_to_mime_type(IMAGETYPE_WBMP));
image2wbmp($image); // output the stream directly
imagedestroy($image);
?>