<?php

    define('HOST','localhost');
    define('DB_NAME','juju');
    define('USER','root');
    define('PASS','');

    try{
        $db = new PDO("mysql:host=" . HOST . ";dbname=" . DB_NAME, USER, PASS);
        $db->setAttribute(PDO::ERRMODE_EXCEPTION, PDO::ATTR_ERRMODE);
    }catch(PDOException $e){
        echo $e;
    }
