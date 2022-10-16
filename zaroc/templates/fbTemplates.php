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
      if($structure[$i] == 'text'){
        // fbText($fbTextArray);
        fbText($components[$i][0]);
      }
      if($structure[$i] == 'reply'){
        // fbReplies($rTitleArray, $rTextArray);
        fbReplies($components[$i][0], $components[$i][1]);
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





function fbImageTemplate($context,$contextBody,array $fbTitle, array $fbImageArray){
  dfOpen();
    structureOpen($fbTitle);
      fbImage($fbImageArray);
    structureClose();
    if($context == true){
      comma();
      contextOpen();
        echo($contextBody);
      contextClose();
    }
  dfClose();
}


function fbTextTemplate($context,$contextBody,array $fbTitle,array $fbTextArray){
  dfOpen();
    structureOpen($fbTitle);
      fbText($fbTextArray);
    structureClose();
    if($context == true){
      comma();
      contextOpen();
        echo($contextBody);
      contextClose();
    }
  dfClose();
}


function fbRepliesTemplate($context,$contextBody,array $fbTitle, array $rTitleArray,array $rTextArray){
  dfOpen();
    structureOpen($fbTitle);
      fbReplies($rTitleArray, $rTextArray);
    structureClose();
    if($context == true){
      comma();
      contextOpen();
        echo($contextBody);
      contextClose();
    }
  dfClose();
}

function fbCardTemplate($context,$contextBody,array $fbTitle, array $cImageArray, array $cTitleArray, array $cSubtitleArray, array $cButtonTextArray, array $cButtonCustomArray){
  dfOpen();
    structureOpen($fbTitle);
      fbCard($cImageArray, $cTitleArray, $cSubtitleArray, $cButtonTextArray, $cButtonCustomArray);
    structureClose();
    if($context == true){
      comma();
      contextOpen();
        echo($contextBody);
      contextClose();
    }
  dfClose();
}

function fbGenericTemplate($context,$contextBody,array $fbTitle, array $fbTitleArray, array $fbImageArray, array $fbSubtitleArray, array $fbLinkArray, array $fbStyleArray   ,array $bTitleArray,array $bCustomArray){
  dfOpen();
    structureOpen($fbTitle);
      openPayload();
        fbExternalGeneric(  $fbTitleArray,  $fbImageArray,  $fbSubtitleArray,  $fbLinkArray,  $fbStyleArray   , $bTitleArray, $bCustomArray);
      closePayload();
    structureClose();
    if($context == true){
      comma();
      contextOpen();
        echo($contextBody);
      contextClose();
    }
  dfClose();
}

function fbMediaTemplate($context,$contextBody,array $fbTitle, array $fbTitleArray, array $mediaType,array $mediaUrl,array $bTitleArray,array $bCustomArray  ){
    dfOpen();
  structureOpen($fbTitle);
    openPayload();
    fbExternalMedia( $mediaType, $mediaUrl, $bTitleArray, $bCustomArray );
    closePayload();
      structureClose();
    if($context == true){
      comma();
      contextOpen();
        echo($contextBody);
      contextClose();
    }
  dfClose();
}

function fbReceiptTemplate($context,$contextBody,$fbTitle,array $receiptInfo,array $receiptAddress ,array $receiptSummary ,array $fbAdjustmentName,array $fbAdjustmentAmount,array $fbTitleArray ,array  $fbSubtitleArray,array  $fbQuantityArray,array  $fbPriceArray,array  $fbCurrencyArray ,array $fbImageurlArray ){
    dfOpen();
  structureOpen($fbTitle);
    openPayload();
  fbExternalReceipt($receiptInfo, $receiptAddress ,$receiptSummary , $fbAdjustmentName, $fbAdjustmentAmount, $fbTitleArray ,  $fbSubtitleArray,  $fbQuantityArray,  $fbPriceArray,  $fbCurrencyArray , $fbImageurlArray);
    closePayload();
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
