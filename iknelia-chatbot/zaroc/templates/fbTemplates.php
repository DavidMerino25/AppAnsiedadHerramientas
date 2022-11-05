<?php

function fbStructureTemplate($context,$contextBody, array $fbTitle,array $structure,array $components){
  dfOpen();
    structureOpen($fbTitle);
    for($i = 0; $i < count($structure); $i++):
      if($structure[$i] == 'comma'){
        comma();
      }
      if($structure[$i] == 'image'){
        // fbImage($fbImageArray);
        fbImage($components[$i][0]);
      }
      if($structure[$i] == 'paragraph'){
        // fbText($fbTextArray);
        fbParagraph($components[$i][0]);
      }
      if($structure[$i] == 'reply'){
        // fbReplies($rTitleArray, $rTextArray);
        fbReply($components[$i][0], $components[$i][1]);
      }
      if($structure[$i] == 'card'){
        // fbCard($cImageArray, $cTitleArray, $cSubtitleArray, $cButtonTextArray, $cButtonCustomArray);
        fbCard($components[$i][0],$components[$i][1],$components[$i][2],$components[$i][3],$components[$i][4]);
      }
      if($structure[$i] == 'openPayload' ){

          openPayload();
      }
          if($structure[$i] == 'generic'){
            // fbExternalGeneric(  $fbTitleArray,  $fbImageArray,  $fbSubtitleArray,  $fbLinkArray,  $fbStyleArray   , $bTitleArray, $bCustomArray);
            fbExternalGeneric( $components[$i][0],$components[$i][1],$components[$i][2],$components[$i][3],$components[$i][4],$components[$i][5],$components[$i][6]);
          }
          if($structure[$i] == 'media'){
            // fbExternalMedia( $mediaType, $mediaUrl, $bTitleArray, $bCustomArray );
            fbExternalMedia( $components[$i][0],$components[$i][1],$components[$i][2],$components[$i][3] );
          }
          if($structure[$i] == 'receipt'){
            // fbExternalReceipt($receiptInfo, $receiptAddress ,$receiptSummary , $fbAdjustmentName, $fbAdjustmentAmount, $fbTitleArray ,  $fbSubtitleArray,  $fbQuantityArray,  $fbPriceArray,  $fbCurrencyArray , $fbImageurlArray);
            fbExternalReceipt($components[$i][0],$components[$i][1],$components[$i][2],$components[$i][3],$components[$i][4],$components[$i][5],$components[$i][6],$components[$i][7],$components[$i][8],$components[$i][9],$components[$i][10]);
          }
          if($structure[$i] == 'closePayload' ){
              closePayload();
          }
    endfor;
    structureClose();
    if($context == true){
      comma();
      contextOpen();
        echo($contextBody);
      contextClose();
    }
  dfClose();
}




?>
