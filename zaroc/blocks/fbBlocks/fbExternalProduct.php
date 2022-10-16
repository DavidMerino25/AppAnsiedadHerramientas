<?php



  function fbExternalProduct(array $fbTitleArray , array $fbSubtitleArray, array $fbQuantityArray, array $fbPriceArray, array $fbCurrencyArray , array $fbImageurlArray){

$raw ='"elements":[';

  for($i = 0; $i < count($fbTitleArray); $i++):
  $raw .= '{
    "title":"'.$fbTitleArray[$i].'",
    "subtitle":"'.$fbSubtitleArray[$i].'",
    "quantity":'.$fbQuantityArray[$i].',
    "price":'.$fbPriceArray[$i].',
    "currency":"'.$fbCurrencyArray[$i].'",
    "image_url":"'.$fbImageurlArray[$i].'"
  },';

endfor;
  $raw = rtrim($raw, ",");
  $raw .=']';
  return $raw;






  }





 ?>
