<?php

/** 
 * Fitxer de configuració de l'aplicació.
 * */ 

 $config = [
    "db" => [
        "user" => "root",
        "pass" => "",
        "db" => "nadal",
        "host" => "localhost"
    ],
];  
include "../src/models/Db.php";
include "../src/models/Users.php";