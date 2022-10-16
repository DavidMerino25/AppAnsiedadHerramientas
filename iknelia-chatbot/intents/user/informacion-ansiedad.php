<?php
if (intent('informacion-ansiedad')) {
    $context = false;
$contextBody = array();
$wsTitle = array("informacion-ansiedad");
$wsTextArray = array("La ansiedad es un conjunto de procesos psicológicos y fisiológicos que aparecen cuando se perciben peligros reales o percibidos, y que nos predispone a reaccionar rápidamente a la menor señal de que hay que hacerlo. Hace que el sistema nervioso permanezca en un estado de alta activación, de manera que se vuelve más sensible a los estímulos imprevistos.");

wsParagraphTemplate($context,$contextBody, $wsTitle, $wsTextArray);
}

if (intent('sintomas-ansiedad')) {
    $context = false;
$contextBody = array();
$wsTitle = array("sintomas-ansiedad");
$wsTextArray = array("Una repentina sensación de pánico y miedo
Inquietud
Malestar, náuseas o calambres
Problemas relacionados con el sueño: sueño excesivo o insomnio
Manos o pies fríos o sudorosos
Entumecimiento en las manos o los pies
Dificultad para respirar
Aumento de la frecuencia cardíaca
Dolor torácico
Boca seca
Sofocos o escalofríos
Temblor repentino
Mareo");

wsParagraphTemplate($context,$contextBody, $wsTitle, $wsTextArray);
}


// $context = false;
//  $contextbody = false;
//  $prompt = array("La ansiedad es un conjunto de procesos psicológicos y fisiológicos que aparecen cuando se perciben peligros reales o percibidos, y que nos predispone a reaccionar rápidamente a la menor señal de que hay que hacerlo. Hace que el sistema nervioso permanezca en un estado de alta activación, de manera que se vuelve más sensible a los estímulos imprevistos.");
//  triggerPropmt($context,$contextbody,$prompt);
// }
//Cada uno se enfrenta a la ansiedad en algún momento de la vida, por ejemplo, durante un examen o una entrevista. Esto tiene una duración limitada. Se clasifica como un trastorno de ansiedad cuando los síntomas son recurrentes y duran más tiempo. Síntomas tales como Una repentina sensación de pánico y miedo
?>