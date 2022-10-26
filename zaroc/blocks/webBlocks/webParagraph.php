<?php


function webParagraph(array $pTitleArray, array $pSubtitleArray)
{

  $raw = "";
   
    for($i = 0; $i < count($pTitleArray); $i++):

        $raw .= '{
          "type": "accordion",
          "title": "' . $pTitleArray[0] . '",
          "subtitle": "' . $pSubtitleArray[0] . '",
          "text": "",
          "image": {
            "src": {
              "rawUrl": ""
            }
          }
        },';

    endfor;
     
    $result = rtrim($raw, ",");
    echo($result);


}


 ?>
