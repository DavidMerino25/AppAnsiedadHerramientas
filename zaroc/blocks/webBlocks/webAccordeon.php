<?php

function webAccordeon( array $aImageArray, array $aTitleArray, array $aSubtitleArray, array $aTextArray)
{
   echo
      ('{
      "type": "accordion",
      "title": "' . $aTitleArray[0] . '",
      "subtitle": "' . $aSubtitleArray[0] . '",
      "text": "' . $aTextArray[0] . '",
      "image": {
        "src": {
          "rawUrl": "' . $aImageArray[0] . '"
        }
      }
    }');
}


?>
