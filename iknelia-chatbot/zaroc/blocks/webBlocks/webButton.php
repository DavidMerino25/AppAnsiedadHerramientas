<?php


function webButton( array $bTitleArray, array $bCustomArray, array $bIconArray, array $bColorArray)
{
    $raw = '';
    for ($i = 0;$i < count($bTitleArray);$i++):
        if (filter_var($bCustomArray[$i], FILTER_VALIDATE_URL) === false )
        {
            $raw .= '{
                    "type": "button",
                    "text": "' . $bTitleArray[$i] . '",
                    "link": "",
                    "style" : {
                        "background-color": "' . $bColorArray[$i] . '"
                    },
                    "icon": {
                    "type": "' . $bIconArray[$i] . '",
                    "color": "' . $bColorArray[$i] . '"
                    },
                    "event": {
                    "name": "' . $bCustomArray[$i] . '",
                    "languageCode": "es",
                    "parameters": {}
                    }
                },';
        }
        else
        {
            $raw .= '{
                    "type": "button",
                    "text": "' . $bTitleArray[$i] . '",
                    "link": "' . $bCustomArray[$i] . '",
                    "icon": {
                        "type": "' . $bIconArray[$i] . '",
                        "color": "' . $bColorArray[$i] . '"
                    },
                    "event": {
                        "name": "",
                        "languageCode": "es",
                        "parameters": {}
                    }
                },';
        }
    endfor;
    $result = rtrim($raw, ",");
    echo $result;
    }















?>
