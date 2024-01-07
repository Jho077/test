<?php

function ctrlConsulta($request, $response, $container){

    $userModel = $container->Users();
    $users = $userModel->getAll(); 

  
    $response->set("users", $users);

  
    $response->setTemplate("consulta.php");

    return $response;
}