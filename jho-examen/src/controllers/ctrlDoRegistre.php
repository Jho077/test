<?php

function ctrlDoRegistre($request, $response, $container){

    $nom = $request->get(INPUT_POST, "nom");
    $cognom = $request->get(INPUT_POST, "cognom");
    $datanaix = $request->get(INPUT_POST, "naix");
    $carrer = $request->get(INPUT_POST,"carrer");
    $telefon = $request->get(INPUT_POST,"telefon");
    $ciutat = $request->get(INPUT_POST,"ciutat");
    $codip = $request->get(INPUT_POST,"codip");
    $grup = $request->get(INPUT_POST,"grup");
    var_dump($nom, $cognom);
    
    $userModel = $container->users();
    $userModel = $userModel->register($nom, $cognom, $datanaix, $carrer, $telefon, $ciutat, $codip, $grup);

    $postal = "../public/postal/" . $nom . "_" . $cognom . "/";

    if (!file_exists($postal)) {
        mkdir($postal, 0777, true);
    }
    $fileName = basename($_FILES['pujar']['name']);
    $uploadFile = $postal . $fileName;
    move_uploaded_file($_FILES['pujar']['tmp_name'], $uploadFile);

    $response->setSession("lastInsertId", $userModel);
    $response->setSession("nom", $nom);
    $response->setSession("cognom", $cognom);
    $response->setSession("datanaix", $datanaix);
    $response->setSession("carrer", $carrer);
    $response->setSession("ciutat", $ciutat);
    $response->setSession("codip", $codip);




    $response->redirect("location: index.php?r=check");
    
    return $response;
}