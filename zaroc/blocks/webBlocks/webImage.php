<?php

function webImage( array $iImageArray, array $iTextArray)
{
    $raw = '';
    for ($i = 0;$i < count($iImageArray);$i++):

        $raw .=
        '{
            "type": "image",
            "accessibilityText": "' . $iTextArray[$i] . '",
            "rawUrl": "' . $iImageArray[$i] . '"
        },';
    endfor;
    $result = rtrim($raw, ",");
    echo $result;
}



?>
