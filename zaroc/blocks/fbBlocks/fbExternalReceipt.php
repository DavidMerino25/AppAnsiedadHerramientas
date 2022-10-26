<?php


function fbExternalReceipt(array $receiptInfo,array $receiptAddress ,array $receiptSummary ,array $fbAdjustmentName,array $fbAdjustmentAmount,array $fbTitleArray ,array  $fbSubtitleArray,array  $fbQuantityArray,array  $fbPriceArray,array  $fbCurrencyArray ,array  $fbImageurlArray ){

  $raw ='{
  "facebook":{
    "attachment":{
      "type":"template",
      "payload":{
        "template_type":"receipt",
        "recipient_name":"'.$receiptInfo['order_name'].'",
        "order_number":"'.$receiptInfo['order_number'].'",
        "currency":"'.$receiptInfo['order_currency'].'",
        "payment_method":"'.$receiptInfo['order_payment'].'",
        "order_url":"'.$receiptInfo['order_url'].'",
        "timestamp":"'.$receiptInfo['order_timestamp'].'",
        "address":{
          "street_1":"'.$receiptAddress['address_street1'].'",
          "street_2":"'.$receiptAddress['address_street2'].'",
          "city":"'.$receiptAddress['address_city'].'",
          "postal_code":"'.$receiptAddress['address_postalcode'].'",
          "state":"'.$receiptAddress['address_state'].'",
          "country":"'.$receiptAddress['address_country'].'"
        },
        "summary":{
          "subtotal":"'.$receiptSummary['summary_subtotal'].'",
          "shipping_cost":"'.$receiptSummary['summary_shippingcost'].'",
          "total_tax":"'.$receiptSummary['summary_tax'].'",
          "total_cost":"'.$receiptSummary['summary_cost'].'"
        },';

        $raw .= fbExternalAdjustment($fbAdjustmentName,$fbAdjustmentAmount);
        $raw .= "," ;
        $raw.=  fbExternalProduct($fbTitleArray ,  $fbSubtitleArray,  $fbQuantityArray,  $fbPriceArray,  $fbCurrencyArray ,  $fbImageurlArray);
        $raw .= '}}}}';
       echo($raw);
}



 ?>
