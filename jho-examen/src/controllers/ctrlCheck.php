<?php

function ctrlCheck($request, $response, $container){

    $nom = $request->get("SESSION","nom");
    $cognom = $request->get("SESSION","cognom");
    $datanaix = $request->get("SESSION","datanaix");
    $carrer = $request->get("SESSION","carrer");
    $ciutat = $request->get("SESSION","ciutat");
    $codip = $request->get("SESSION","codip");
    $lastInsertId = $request->get("SESSION","lastInsertId");


    $response->set("nom",$nom);
    $response->set("cognom",$cognom);
    $response->set("datanaix",$datanaix);
    $response->set("carrer",$carrer);
    $response->set("ciutat",$ciutat);
    $response->set("codip",$codip);
    $response->set("lastInsertId",$lastInsertId);


    $response->setTemplate("comprobacion.php");

    return $response;
}