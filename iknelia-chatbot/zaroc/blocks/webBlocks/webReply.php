<?php



function webReply( array $cTitleArray, array $cImageArray, array $cCustomArray){

    $raw1 = ' {
        "type": "chips",
        "options": [';

        $raw2 = '';

        for($i = 0; $i < count($cTitleArray); $i++):

        if(filter_var($cCustomArray[$i], FILTER_VALIDATE_URL) == false ){
            $raw2 .='{
                "text": "'.$cTitleArray[$i].'",
                "image": {
                  "src": {
                    "rawUrl": "'.$cImageArray[$i].'"
                  }
                },
                "link": ""
              },';
        } else {
            $raw2 .='{
                "text": "'.$cTitleArray[$i].'",
                "image": {
                  "src": {
                    "rawUrl": "'.$cImageArray[$i].'"
                  }
                },
                "link": "'.$cCustomArray[$i].'"
              },';
        }
            endfor;

            $raw2 = rtrim($raw2, ",");



        $raw3 = ']}';
        $result = $raw1.' '.$raw2.' '.$raw3;
        echo $result;

}




?>
