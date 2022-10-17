<?php
if (intent('seleccion-sintomas')) {
$context = false;
$contextBody = array();
$webTitle = array("seleccion-sintomas");
// $imageArray = array("https://appansidep.42web.io/iknelia-chatbot/core/images/seleccion-sintomas.png");

$pTitleArray = array("¿Qué síntomas deseas conocer?");
$pSubtitleArray = array("");


$bTitleArray = array("Sintomas de la ansiedad", "Sintomas de la depresión");
$bCustomArray = array("sintomasAnsiedad","sintomasDepresion");
$bIconArray = array("home","arrow_forward");
$bColorArray = array("$red","$blue");


$structure = array('paragraph', 'comma','button');
$components = array(
    array($pTitleArray, $pSubtitleArray),
    array(),
    array($bTitleArray, $bCustomArray, $bIconArray, $bColorArray)
);

webStructureTemplate($context, $contextBody, $webTitle, $structure, $components);

}


?>