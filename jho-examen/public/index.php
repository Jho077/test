<?php

/**
 * Aquest fitxer és un exemple de Front Controller, pel qual passen totes les requests.
 */

 include "../src/config.php";
 include "../src/controllers/ctrlIndex.php";
 include "../src/controllers/ctrlJson.php";
 include "../src/controllers/ctrlDoRegistre.php";
 include "../src/controllers/ctrlGoForm.php";
 include "../src/controllers/ctrlCheck.php";
 include "../src/controllers/ctrlConsulta.php";
 include "../src/controllers/ctrlAcceso.php";
 include "../src/controllers/ctrlClau.php";

/**
  * Carreguem les classes del Framework Emeset
*/
  
 include "../src/Emeset/Container.php";
 include "../src/Emeset/Request.php";
 include "../src/Emeset/Response.php";

 $request = new \Emeset\Request();
 $response = new \Emeset\Response();
 $container = new \Emeset\Container($config);

 /*   
  * Aquesta és la part que fa que funcioni el Front Controller.
  * Si no hi ha cap paràmetre, carreguem la pàgina d'inici.
  * Si hi ha paràmetre, carreguem la pàgina que correspongui.
  * Si no existeix la pàgina, carreguem la pàgina d'error.
  */
 $r = '';
 if(isset($_REQUEST["r"])){
    $r = $_REQUEST["r"];
 }
 
 /* Front Controller, aquí es decideix quina acció s'executa */
 if($r == "") {
     $response = ctrlIndex($request, $response, $container);
 } elseif($r == "json") {
  $response = ctrlJson($request, $response, $container);
} elseif($r == "registre") {
  $response = ctrlDoRegistre($request, $response, $container);
} elseif($r == "goForm") {
  $response = ctrlGoForm($request, $response, $container);
} elseif($r == "check") {
  $response = ctrlCheck($request, $response, $container);
} elseif($r == "consulta") {
  $response = ctrlConsulta($request, $response, $container);
} elseif($r == "acceso") {
  $response = ctrlAcceso($request, $response, $container);
} elseif($r == "clau") {
  $response = ctrlClau($request, $response, $container);
} else {
     echo "No existeix la ruta";
 }

 /* Enviem la resposta al client. */
 $response->response();