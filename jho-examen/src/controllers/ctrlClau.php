<?php

function ctrlClau($request, $response, $container){
    $pass = $request->get(INPUT_GET,"pass");
    $code = "xavi";
    
    if($pass==$code){
        $response->setSession("identified",true);
    }else{
        http_response_code(500);}
    die();
}