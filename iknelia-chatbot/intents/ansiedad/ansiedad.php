<?php

if (intent('informacion-ansiedad')) {
   
$context = false;
$contextBody = array();
$webTitle = array("informacion-ansiedad");

$imageArray = array("https://appansidep.42web.io/iknelia-chatbot/core/images/informacion-ansiedad.png");

$pTitleArray = array("¿Qué es la ansiedad?");
$pSubtitleArray = array("La ansiedad es una reacción normal que se experimenta en situaciones en las que el sujeto se siente amenazado por un peligro externo o interno.");

$bTitleArray = array("Sintomas de la ansiedad", "Más información");
$bCustomArray = array("sintomasAnsiedad","https://medlineplus.gov/spanish/anxiety.html");
$bIconArray = array("home","arrow_forward");
$bColorArray = array("$red","$blue");


// $cTitleArray = array("Sintomas de la ansiedad","Más información");
// $cImageArray = array("handshake","handshake");
// $cCustomArray = array("","https://medlineplus.gov/spanish/anxiety.html");

$structure = array('image','comma','paragraph','superDivider','button');
$components = array(
    array($imageArray,$webTitle),
    array(),
    array($pTitleArray, $pSubtitleArray),
    array(),
    array($bTitleArray, $bCustomArray, $bIconArray, $bColorArray)
);

webStructureTemplate($context, $contextBody, $webTitle, $structure, $components);
}
