<?php
$context = false;
$contextBody = array();
if (intent('Default Welcome Intent')) {
    ##Presentation
    $hour = date("H");

    if ($hour >= 7 && $hour < 12)
    {
        $es_welcome = "¡Hola! Buenos días, ¿Cómo puedo ayudarte?";
    }
    else if ($hour >= 12 && $hour < 20)
    {
        $es_welcome = "¡Hola!. Buenas tardes, espero que tu día vaya muy bien  ¿Cómo puedo ayudarte?";
    }
    else if ($hour >= 20 && $hour < 24)
    {
        $es_welcome = "¡Hola!. Buenas noches,  ¿Cómo puedo ayudarte?";
    }
    else if ($hour >= 0 && $hour < 7)
    {
        $es_welcome = "¡Hola! ¿Que haces a estas horas?, ¿Cómo puedo ayudarte?";
    }

 $webTitle = array("Default Welcome Intent");
//  $imageArray = array("https://appansidep.42web.io/iknelia-chatbot/core/images/intent-saludar.gif");
    $imageArray = array("https://emojipedia-us.s3.amazonaws.com/source/noto-emoji-animations/344/waving-hand_light-skin-tone_1f44b-1f3fb_1f3fb.gif");
 
 $pTitleArray = array("$es_welcome");
 $pSubtitleArray = array("");
 
 $structure = array('image', 'comma','paragraph');
 $components = array(
     array($imageArray,$webTitle),
     array(),
     array($pTitleArray, $pSubtitleArray)
 );
 webStructureTemplate($context, $contextBody, $webTitle, $structure, $components);

}

if (intent('despedida')) {
 $webTitle = array("despedida");
 $imageArray = array("https://cdn-icons-png.flaticon.com/512/3798/3798302.png");
 
 $pTitleArray = array("¡Nos vemos pronto!");
 $pSubtitleArray = array("Recuerda que puedes volver a contactarme cuando quieras.");
 
 $structure = array('image', 'comma','paragraph');
 $components = array(
     array($imageArray,$webTitle),
     array(),
     array($pTitleArray, $pSubtitleArray)
 );
 webStructureTemplate($context, $contextBody, $webTitle, $structure, $components);
}


if (intent('seleccion-sintomas')) {

$webTitle = array("seleccion-sintomas");


$pTitleArray = array("¿Qué síntomas deseas conocer?");
$pSubtitleArray = array("");

$bTitleArray = array("Sintomas de la ansiedad", "Sintomas de la depresión");
$bCustomArray = array("sintomasAnsiedad","sintomasDepresion");
$bIconArray = array("info","info");
$bColorArray = array("$red","$blue");

$structure = array('paragraph', 'comma','button');
$components = array(
    array($pTitleArray, $pSubtitleArray),
    array(),
    array($bTitleArray, $bCustomArray, $bIconArray, $bColorArray)
);

webStructureTemplate($context, $contextBody, $webTitle, $structure, $components);

}

if (intent('musica')) {
   
    $webTitle = array("musica");
    $imageArray = array("https://cdn-icons-png.flaticon.com/512/2829/2829076.png");
    
    $pTitleArray = array("");
    $pSubtitleArray = array("Los sonidos y música de relajación pueden ayudarte a mejorar tu  concentración y relajarte, te muestro las  recomendaciones que tenemos para ti.");
    
    $bTitleArray = array("Música y sonidos de relajación");
    $bCustomArray = array("https://appansidep.42web.io/i-sonidos.html");
    $bIconArray = array("music_note");
    $bColorArray = array("$red");
   
    
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

if (intent('ejercicios-respiracion')) {
   
    $webTitle = array("ejercicios-respiracion");
    $imageArray = array("https://cdn-icons-png.flaticon.com/512/2877/2877538.png");
    
    $pTitleArray = array("");
    $pSubtitleArray = array("Una correcta respiración es muy importante para combatir la ansiedad y la depresión, realiza estos ejercicios y podrás sentir un cambio.");
    
    $bTitleArray = array("Ejercicios de respiración");
    $bCustomArray = array("https://appansidep.42web.io/i-respiracion.html");
    $bIconArray = array("air");
    $bColorArray = array("$blue");
   
    
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

if (intent('contactar-profesionales')) {
   
    $webTitle = array("contactar-profesionales");
    $imageArray = array("https://cdn-icons-png.flaticon.com/512/3587/3587301.png");
    
    $pTitleArray = array("");
    $pSubtitleArray = array("Existen expertos en la salud que puedes consultar de acuerdo a tus posibilidades, te recomiendo hacer clic en el siguiente enlace: ");
    
    $bTitleArray = array("Contactar a Expertos");
    $bCustomArray = array("https://www.google.com/maps/search/psicologos/");
    $bIconArray = array("psychology");
    $bColorArray = array("$green");
   
    
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

if (intent('ejercicios-meditacion')) {
   
    $webTitle = array("ejercicios-meditacion");
    $imageArray = array("https://cdn-icons-png.flaticon.com/512/2773/2773082.png");
    
    $pTitleArray = array("");
    $pSubtitleArray = array("Excelente, te proporcionaré ejercicios de meditación que sin duda alguna te ayudaran. ");
    
    $bTitleArray = array("Ejercicios de meditación");	
    $bCustomArray = array("https://appansidep.42web.io/i-meditacion.html");
    $bIconArray = array("spa");
    $bColorArray = array("$red");
   
    
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
if (intent('lecturas-apoyo')) {
   
    $webTitle = array("lecturas-apoyo");
    $imageArray = array("https://cdn-icons-png.flaticon.com/512/3984/3984030.png");
    
    $pTitleArray = array("");
    $pSubtitleArray = array("Una forma de relajarte es con la lectura, permíteme mostrarte algunas lecturas de ayuda que pueden interesarte.");
    
    $bTitleArray = array("Lecturas de apoyo");	
    $bCustomArray = array("https://appansidep.42web.io/i-lecturas.html");
    $bIconArray = array("book");
    $bColorArray = array("$blue");
   
    
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

if (intent('peligro')) {
   
    $webTitle = array("peligro");
    
    $imageArray = array("https://cdn-icons-png.flaticon.com/512/6186/6186621.png");
    
    $pTitleArray = array("Primero recuerda mantener la calma");
    $pSubtitleArray = array("Cuando sientas que no vale la pena seguir, puede que sea difícil de creer, pero tienes razones para seguir en tu camino. Comunícate a la línea de la vida para recibir ayuda.");
    
    $structure = array('image','comma','paragraph','superDivider');
    $components = array(
        array($imageArray,$webTitle),
        array(),
        array($pTitleArray, $pSubtitleArray)
    );
    
    webStructureTemplate($context, $contextBody, $webTitle, $structure, $components);
    }

    if(intent('grupos-comunidades')){
        
        $webTitle = array("grupos-comunidades");
        $pTitleArray = array("Comunidades de apoyo");
        $pSubtitleArray = array("Pertenecer a una comunidad es un gran paso. Con el siguiente botón podrás encontrar grupos de ayuda y comunidades que podrían ser interesantes para ti.");
           
        $cTitleArray = array("Comunidades de apoyo");
        $cImageArray = array("https://cdn-icons-png.flaticon.com/512/745/745154.png");
        $cCustomArray = array("https://medlineplus.gov/spanish/anxiety.html");
            
        $structure = array('paragraph','superDivider','chips');
        $components = array(
                array($pTitleArray, $pSubtitleArray),
                array(),
                array($cTitleArray,  $cImageArray, $cCustomArray)
            );
        webStructureTemplate($context, $contextBody, $webTitle, $structure, $components);          
    } 

    
    if(intent('detectar-tips')){
        
        $webTitle = array("grupos-comunidades");
        $imageArray = array("https://cdn-icons-png.flaticon.com/512/6186/6186621.png");
       

        $dTitleArray = ["Tips que te recomiendo:"];
        $dTextArray = [["Controla tus emociones.","Mantén tu mente ocupada.","Realiza ejercicio y prácticas de meditación.","Socializa.","Puedes conocer más tips sobre ansiedad o depresión si lo deseas."]];

        $bTitleArray = array("Tips para la ansiedad","Tips para la depresión");
        $bCustomArray = array("tips-ansiedad","tips-depresion");
        $bIconArray = array("air","spa");
        $bColorArray = array("$blue",$red);

        $structure = array('image','comma','description','superDivider','button');
        $components = array(
                array($imageArray,$webTitle),
                array(),
                array($dTitleArray, $dTextArray),
                array(),
                array($bTitleArray, $bCustomArray, $bIconArray, $bColorArray)
            );
        webStructureTemplate($context, $contextBody, $webTitle, $structure, $components);          
    } 

    if(intent('agradecer')){
        $webTitle = array("agradecer");
        $imageArray = array("https://cdn-icons-png.flaticon.com/512/4587/4587595.png");
        
        $pTitleArray = array("Para mí siempre es un placer ayudarte");
        $pSubtitleArray = array("");
        $structure = array('image','comma','paragraph','superDivider');
        $components = array(
            array($imageArray,$webTitle),
            array(),
            array($pTitleArray, $pSubtitleArray)
        );
        webStructureTemplate($context, $contextBody, $webTitle, $structure, $components); 
}
