<?php

function webDescription(array $dTitleArray, array $dTextArray){

    $raw1 = '';
    $raw2 = '';

    for($i1 = 0; $i1<count($dTitleArray); $i1 ++):

        $raw1 .= '{
          "type": "description",
          "title": "'.$dTitleArray[$i1].'",
          "text": [';
        for($i2 = 0; $i2 < count($dTextArray[$i1]); $i2++):
            $raw2 .=  ' "' . $dTextArray[$i1][$i2] . '",';
        endfor;
        $raw1 .= rtrim($raw2, ",");
        $raw2 = '';
        $raw1 .= ']
                },';
        endfor;

        $result = rtrim($raw1, ",");
        echo $result;
    }









?>
