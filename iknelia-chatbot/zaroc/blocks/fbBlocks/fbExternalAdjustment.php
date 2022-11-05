<?php

function fbExternalAdjustment(array $fbAdjustmentName, array $fbAdjustmentAmount){


  $raw ='"adjustments":[';
    for($i = 0; $i < count($fbAdjustmentName); $i++):
    $raw .= '{
      "name":"'.$fbAdjustmentName[$i].'",
      "amount":'.$fbAdjustmentAmount[$i].'
    },';

  endfor;
    $raw = rtrim($raw, ",");
    $raw .=']';
    return $raw;



}







 ?>
