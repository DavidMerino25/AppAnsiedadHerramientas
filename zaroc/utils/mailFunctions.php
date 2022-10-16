<?php

function prepareEmail(array $variables, string $emailUrl){
   $template = file_get_contents("$emailUrl");
   foreach($variables as $key => $value){
       $template = str_replace('{{'.$key.'}}', $value, $template);
   }
       return $template;
}





?>
