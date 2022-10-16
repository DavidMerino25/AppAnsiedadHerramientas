<?php


function tgImage(array $iImageArray)
{
    $raw = '';
    for($i = 0;  $i < count($iImageArray); $i ++):
        $raw .= '{
                "image": {
                  "imageUri": "' . $iImageArray[$i] . '"
                },
                "platform": "TELEGRAM"
              },';

    endfor;
    $result = rtrim($raw, ",");
    echo $result;
  }



?>
