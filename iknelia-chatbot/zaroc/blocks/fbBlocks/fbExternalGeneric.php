<?php


function fbExternalGeneric( array $fbTitleArray, array $fbImageArray, array $fbSubtitleArray, array $fbLinkArray, array $fbStyleArray   ,array $bTitleArray,array $bCustomArray){
  $raw = '{"facebook":{
      "attachment":{
        "type":"template",
        "payload":{
          "template_type":"generic",
          "elements":[';

          for($i = 0; $i < count($fbTitleArray); $i++ ):
        $raw .= '{
              "title":"'.$fbTitleArray[$i].'",
              "image_url":"'.$fbImageArray[$i].'",
              "subtitle":"'.$fbSubtitleArray[$i].'",
              "default_action": {
                "type": "web_url",
                "url": "'.$fbLinkArray[$i].'",
                "webview_height_ratio": "'.$fbStyleArray[$i].'"
              },';
              $raw .= fbExternalButton($bTitleArray[$i],$bCustomArray[$i]);
            $raw .='},';
            endfor;
            $raw = rtrim($raw, ",");
            $raw .=']}}}}';
            echo($raw);
}




?>
