<?php
if (intent('user_login')) {
    $name = getIntentParameter()['name'];
    $context = false;
$contextBody = array();
$wsTitle = array("user_login");
$wsTextArray = array("Es un placer conocerte $name 👋 😄, ¿en qué te puedo ayudar? 😊");

wsParagraphTemplate($context,$contextBody, $wsTitle, $wsTextArray);

}

?>