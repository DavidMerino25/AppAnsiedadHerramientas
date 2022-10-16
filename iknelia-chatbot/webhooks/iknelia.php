<?php
//Incluimos la libreria
include_once "../libreria_dialogflow.php";
credenciales('iknelia','25082000');

if (intent_recibido('test')) {
    $valor1 = obtener_variables()['numero1'];
    $valor2 = obtener_variables()['numero2'];

    $resulado = $valor1 + $valor2;

    enviar_texto("El resultado es: $resulado");
    
}
if (intent_recibido('informacion-ansiedad')) {
    $tarjetas [0]['titulo'] = "Título de prueba 1";
    $tarjetas [0] ['subtítulo'] = "Esto es un subtítulo 1";
    $tarjetas [0] ['url']= "https://medias3.8.prestastore.com/83";
    $tarjetas [0] ['botones'][0] = "Botón 1";
    $tarjetas [0] ['botones'][1] = "Botón 2";

    enviar_tarjetas($tarjetas);
    
}

?>