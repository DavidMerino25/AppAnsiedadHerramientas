<?php


function webParagraph(array $pTitleArray, array $pSubtitleArray)
{
   echo
      ('{
      "type": "accordion",
      "title": "' . $pTitleArray[0] . '",
      "subtitle": "' . $pSubtitleArray[0] . '",
      "text": "",
      "image": {
        "src": {
          "rawUrl": ""
        }
      }
    }');
}


 ?>
