<?php
$name = $_POST['nombre'];
$telefono = $_POST['telefono']; 
$email = $_POST['email'];
$texto = $_POST['texto'];
//Fin de recepción de datos

//Accion e envios
$texto = '
Datos del formulario:

Nombre: '.$name.'
Telefono: '.$telefono.'
Texto: '.$texto.'
';
// info@instamobel.com
mail('livelife7102@yahoo.com', 'Formulario de contacto instamobel', utf8_decode($texto), 'From: ' . utf8_decode($name) . ' <' . $email . '>');
header('Location: correct_page.htm');
?>