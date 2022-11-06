<?php
$context = false;
$contextBody = array();
if (intent('informacion-ansiedad')) {

$webTitle = array("informacion-ansiedad");

$imageArray = array("https://cdn-icons-png.flaticon.com/512/3997/3997910.png");

$pTitleArray = array("¿Qué es la ansiedad?");
$pSubtitleArray = array("La ansiedad es una reacción normal que se experimenta en situaciones en las que el sujeto se siente amenazado por un peligro externo o interno.");

$bTitleArray = array("Sintomas de la ansiedad", "Más información");
$bCustomArray = array("sintomasAnsiedad","https://medlineplus.gov/spanish/anxiety.html");
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

if (intent('sentimiento-ansiedad')) {

$webTitle = array("sentimiento-ansiedad");
$imageArray = array("https://cdn-icons-png.flaticon.com/512/3220/3220618.png");

$pTitleArray = array("");
$pSubtitleArray = array("Recuerda primero que todo mantener la calma, puedes afrontar la ansiedad realizando ejercicios de meditación o de respiración, son ejercicios muy eficaces, pero es necesario trabajar en la parte mental con un psicólogo profesional. Si lo deseas aquí te dejo estas opciones para ayudarte.");

$bTitleArray = array("Ejercicios de Respiración", "Ejercicios de Meditación", "Consultar Expertos");
$bCustomArray = array("https://ikneliabot.42web.io/i-respiracion.html","https://ikneliabot.42web.io/i-meditacion.html","https://www.google.com/maps/search/psicologos/");
$bIconArray = array("air","spa","psychology");
$bColorArray = array("$red","$blue","$green");

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

if (intent('tips-ansiedad')) {
    $webTitle = array("tips-ansiedad");
    $imageArray = array("https://cdn-icons-png.flaticon.com/512/7493/7493127.png");
    $dTitleArray = ["Tips para la ansiedad que te recomiendo:"];
    $dTextArray = [[" 💡 Mantén el control de tus emociones", " 💡 Practica técnicas de relajación o meditación.", "💡 Cuida el sueño.", "💡 Socializa, la compañía siempre es lo mejor."]];
    $structure = array('image', 'comma', 'description');
    $components = array(
        array($imageArray, $webTitle),
        array(),
        array($dTitleArray, $dTextArray),
    );
    webStructureTemplate($context, $contextBody, $webTitle, $structure, $components);
}