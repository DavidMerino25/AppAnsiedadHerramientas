<?php
##----------------------------------s---------------------------------##
//  Principal
//    Structure
//      Payloads
//        Web/Tg/WS/FB
//    Contexts



// PRINCIPAL
function dfOpen(){
  echo('{');
}
function dfClose(){
  echo('}' . PHP_EOL);
}
// Structure Construtor
function structureOpen(array $title){
  echo ('"fulfillmentText":"'.$title[0].'","fulfillmentMessages": [');
}
function structureClose(){
  echo(']');
}
// Context
function contextOpen(){
  echo('"outputContexts":[');
}
function contextClose(){
  echo(']');
}
// Payloads
function openPayload(){
  echo ('{"payload":');
}
function closePayload(){
  echo ('}');
}
// Webs
function openWeb(){
  echo('{"richContent": [[');
}
function closeWeb(){
  echo(']]}');
}
// Facebook

// telegram

// WhatsApp

##----------------------------SEPARATORS-----------------------------##

function comma(){
  echo (',');
}
//Basic Divider
function basicDivider(){
  echo ('{"type": "divider"}');
}
#DIVIDER
function commaDivider(){
  echo (',{"type": "divider"},');
}
#SUPER DIVIDER
function superDivider(){
  echo ('],[');
}





?>
