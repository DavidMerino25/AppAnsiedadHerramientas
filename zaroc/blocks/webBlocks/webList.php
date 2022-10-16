<?php



function webList( array $lTitleArray, array $lSubtitleArray, array $lImageArray, array $lCustomArray){

    $raw = '';

    for($i = 0; $i <count($lTitleArray); $i ++):

        if (filter_var($lCustomArray[$i], FILTER_VALIDATE_URL) === false ){

          $raw .= '{
              "type": "list",
              "title": "' . $lTitleArray[$i] . '",
              "subtitle": "' . $lSubtitleArray[$i] . '",
              "image": {
                  "src": {
                    "rawUrl": "' . $lImageArray[$i] . '"
                  }
                },
              "event": {
                "name": "' . $lCustomArray[$i] . '",
                "languageCode": "es",
                "parameters": {}
              }
            },';
        } else {
          $raw .='{
                  "type": "info",
                  "title": "'.$lTitleArray[$i].'",
                  "subtitle": "'.$lSubtitleArray[$i].'",
                  "actionLink": "'.$lCustomArray[$i].'",
                  "image": {
                    "src": {
                      "rawUrl": "'.$lImageArray[$i].'"
                    }
                  }
                },';
              }

  endfor;
  $result = rtrim($raw, ",");
  echo $result;
}






















?>
