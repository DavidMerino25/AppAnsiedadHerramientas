<?php

// '{
//     "fulfillmentMessages": [
//       {
//         "payload":';

function externalRequiringNumber(){

$raw = '{
    "telegram": {
      "text": "Pick a color",
      "reply_markup": {
        "one_time_keyboard": true,
        "resize_keyboard": true,
        "keyboard": [
          [
            {
              "request_contact": true,
              "text": "Share my phone number",
              "callback_data": "phone"
            }
          ]
        ]
      }
    }
  }';

echo $raw;
}







// '}]}' . PHP_EOL;



 ?>
