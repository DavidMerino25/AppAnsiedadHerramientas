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


?>