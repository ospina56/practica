<?php

$documento = $_GET['documento'];
$nombre = $_GET['nombre'];
$fec_nac = $_GET['fecha'];
$contraseña = $_GET['contraseña'];
$foto = $_GET['foto'];
 
include("usuario.php");
Usuarios::registrar($documento,$nombre,$fec_nac,$contraseña,$foto);
