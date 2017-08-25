<?php
        
$db_host="localhost"; // direccion base de datos
	$db_user="root"; //nombre de usuario de la bdd
	$db_nombre = "redover";
	$db_pass="";

    $base = new PDO("mysql:host = localhost; dbname=redover", 'root', '');

    $base ->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $base -> exec("SET CHARACTER SET utf8");

  





?>