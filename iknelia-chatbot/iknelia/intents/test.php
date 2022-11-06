<?php
if(intent('test')){
 $context = false;
 $contextbody = false;
 $prompt = array("Todo está funcionando correctamente");
 triggerPropmt($context,$contextbody,$prompt);
} 