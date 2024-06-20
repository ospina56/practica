<?php

$des = $_GET['documento'];
$valor = $_GET['nombre'];

include("usuario.php");
echo MOSTRAR::retornarDato($des,$valor);