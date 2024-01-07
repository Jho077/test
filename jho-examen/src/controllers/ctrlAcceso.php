<?php

function ctrlAcceso($request, $response, $container){
  
    $response->setTemplate("acceso.php");

    return $response;
}