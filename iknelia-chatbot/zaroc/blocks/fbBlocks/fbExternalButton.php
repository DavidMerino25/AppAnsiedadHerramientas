<?php

function fbExternalButton(array $bTitleArray, array $bCustomArray){

$raw ='"buttons":[';

  for($i = 0; $i < count($bTitleArray); $i++):
  if (filter_var($bCustomArray[$i], FILTER_VALIDATE_URL) === false ){
    $raw .='{
      "type":"postback",
      "title":"'.$bTitleArray[$i].'",
      "payload":"'.$bCustomArray[$i].'"
    },';
  } else {
    $raw .='{
      "type":"web_url",
      "url":"'.$bCustomArray[$i].'",
      "title":"'.$bTitleArray[$i].'"
    },';
  }
endfor;
  $raw = rtrim($raw, ",");
  $raw .=']';
  return $raw;
}

?>
