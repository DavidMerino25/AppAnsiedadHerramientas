<?php

// echo '
// {
//     "fulfillmentMessages": [
//       {
//         "payload":';


function tgVerticalButtons(array $tgTitleArray, array $tgButtonArray){
  $raw = '{
        "telegram": {
          "text": "'.$tgTitleArray[0].'",
          "reply_markup": {
            "resize_keyboard": true,
            "one_time_keyboard": true,
            "inline_keyboard": [';
  for($a = 0; $a < count($tgButtonArray);$a++){
    $raw .= '[';
    for($b= 0; $b < count($tgButtonArray[$a]); $b++ ){
      $raw .= '{
              "text": "'.$tgButtonArray[$a][$b].'",
              "callback_data": "phone"
            },';
    }
    $raw = rtrim($raw, ",");
    $raw .= '],';
  }
  $raw = rtrim($raw, ",");
  $raw .= ']}}}';

  echo $raw;

}



      // '}]}' . PHP_EOL;





?>
