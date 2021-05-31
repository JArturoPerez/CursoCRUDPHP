<?php
    try {
        $base=new PDO('mysql:host=localhost; dbname=pruebas', 'root', '', array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
        //$base = new PDO("mysql:host = localhost; dbname = pruebas", "root", ""); 
        $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (Exception $e) { 
        die('Error: ' . $e->getMessage() . " Line: " .$e -> getLine()); 
    }finally{ 
        $base = null;
    }
?>