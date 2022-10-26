<?php


function fbImage(array $iImageArray)
{
    $raw = '';
    for($i = 0;  $i < count($iImageArray); $i ++):
        $raw .= '{
                "image": {
                  "imageUri": "' . $iImageArray[$i] . '"
                },
                "platform": "FACEBOOK"
              },';

    endfor;
    $result = rtrim($raw, ",");
    echo $result;
  }



?>
