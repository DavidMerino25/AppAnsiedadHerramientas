<?php

function webCard(array $aTitleArray, array $aSubtitleArray, array $aTextArray)
{

  $raw = '';

  for($i = 0; $i <count($aTitleArray); $i ++):

    $raw = '{
      "type": "accordion",
      "title": "' . $aTitleArray[$i]. '",
      "subtitle": "' . $aSubtitleArray[$i]. '",
      "text": "' . $aTextArray[$i] . '",
      "image": {
        "src": {
          "rawUrl": "' . $aTitleArray[$i] . '"
        }
      }
    },';

  endfor;
     $result = rtrim($raw, ",");
     echo($result);
}


?>
