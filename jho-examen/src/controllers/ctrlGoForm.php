<?php

function ctrlgoForm($request, $response, $container){
    
    $response->setTemplate("formulari.php");

    return $response;
}