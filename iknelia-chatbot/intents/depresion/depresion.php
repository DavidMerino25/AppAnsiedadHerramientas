<?php

if (intent('informacion-depresion')) {
   
$context = false;
$contextBody = array();
$webTitle = array("informacion-depresion");

$imageArray = array("https://cdn-icons-png.flaticon.com/512/3288/3288941.png");

$pTitleArray = array("¿Qué es la depresión?");
$pSubtitleArray = array("La depresión es un trastorno caracterizado fundamentalmente por un bajo estado de ánimo y puede provocar el estado de sentirse triste, melancólico, infeliz, abatido o culpable.");

$bTitleArray = array("Sintomas de la Depresión", "Más información");
$bCustomArray = array("sintomasDepresion","https://medlineplus.gov/spanish/ency/article/003213.htm");
$bIconArray = array("help","arrow_forward");
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

?>
