<?php

require_once 'Modelo/datospersona.php';

$dp=new DatosPersona();
$dp->Nombre='Alejandro';
$dp->Apellido='Villalba';
$dp->Email='avillalba793@gmail.com';
$dp->Edad='24';
$dp->MostrarPropiedades();