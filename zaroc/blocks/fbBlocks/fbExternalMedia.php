<?php

function fbExternalMedia(array $mediaType,array $mediaUrl,array $bTitleArray,array $bCustomArray ){

$raw = '{
  "facebook": {
    "attachment": {
      "type": "template",
      "payload": {
        "template_type": "media",
        "elements": [';

        for($i = 0; $i < count($mediaType); $i++):

        $raw .=  '{"media_type": "'.$mediaType[$i].'",
            "url": "'.$mediaUrl[$i].'",';
              $raw .= fbExternalButton($bTitleArray[$i],$bCustomArray[$i]);
              $raw .= '},';
              endfor;
              $raw = rtrim($raw, ",");

      $raw .= ']}}}}';

      echo($raw);

}



 ?>
