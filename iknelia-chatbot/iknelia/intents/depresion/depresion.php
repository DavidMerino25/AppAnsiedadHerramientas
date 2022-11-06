<?php
$context = false;
$contextBody = array();

if (intent('informacion-depresion')) {
   
$webTitle = array("informacion-depresion");

$imageArray = array("https://ikneliabot.42web.io/iknelia-chatbot/iknelia/core/images/informacion-depresion.png");

$pTitleArray = array("¿Qué es la depresión?");
$pSubtitleArray = array("La depresión es un trastorno caracterizado fundamentalmente por un bajo estado de ánimo y puede provocar el estado de sentirse triste, melancólico, infeliz, abatido o culpable.");

$bTitleArray = array("Sintomas de la Depresión", "Más información");
$bCustomArray = array("sintomasDepresion","https://medlineplus.gov/spanish/ency/article/003213.htm");
$bIconArray = array("help","arrow_forward");
$bColorArray = array("$green","$blue");


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
if (intent('sentimiento-depresion')) {


$webTitle = array("sentimiento-depresion");

$imageArray = array("https://ikneliabot.42web.io/iknelia-chatbot/iknelia/core/images/sentimiento-depresion.png");

$pTitleArray = array("");
$pSubtitleArray = array("Manten la calma, puedes afrontar la depresión realizando ejercicios de meditación o de respiración, son ejercicios muy eficaces, pero es necesario trabajar en la parte mental con un psicólogo profesional. Si lo deseas aquí te dejo estas opciones para ayudarte.");

$bTitleArray = array("Ejercicios de Respiración", "Ejercicios de Meditación", "Consultar Expertos");
$bCustomArray = array("https://ikneliabot.42web.io/i-respiracion.html","https://ikneliabot.42web.io/i-meditacion.html","https://www.google.com/maps/search/psicologos/");
$bIconArray = array("air","spa","psychology");
$bColorArray = array("$green","$blue","$green");

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
