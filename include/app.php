<?php 

// require 'funciones.php';
require 'config/database.php';
require __DIR__.'/../vendor/autoload.php';

//DEFINICION 
define('CARPETA_IMAGENES',$_SERVER['DOCUMENT_ROOT'].'/imagenes/');

//conexion a la base de datos
$db = conexionDB();

use Model\ActiveRecord;

ActiveRecord::setDB($db);
