<?php
if(intent('test')){
 $context = false;
 $contextbody = false;
 $prompt = array("Test Intent is working");
 triggerPropmt($context,$contextbody,$prompt);
} 