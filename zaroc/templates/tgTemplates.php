<?php


function tgStructureTemplate($context,$contextBody, array $tgTitle,array $structure,array $components){
  dfOpen();
    structureOpen($tgTitle);
    for($i = 0; $i < count($structure); $i++):
      if($structure[$i] == 'comma'){
        comma();
      }
      if($structure[$i] == 'image'){
        // tgImage($tgImageArray);
        tgImage($components[$i][0]);
      }
      if($structure[$i] == 'text'){
        // tgText($tgTextArray);
        tgText($components[$i][0]);
      }
      if($structure[$i] == 'reply'){
        // tgReplies($rTitleArray, $rTextArray);
        tgReplies($components[$i][0], $components[$i][1]);
      }
      if($structure[$i] == 'card'){
        // tgCard($cImageArray, $cTitleArray, $cSubtitleArray, $cButtonTextArray, $cButtonCustomArray);
        tgCard($components[$i][0],$components[$i][1],$components[$i][2],$components[$i][3],$components[$i][4]);
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





function tgImageTemplate($context,$contextBody,array $tgTitle, array $tgImageArray){
  dfOpen();
    structureOpen($tgTitle);
      tgImage($tgImageArray);
    structureClose();
    if($context == true){
      comma();
      contextOpen();
        echo($contextBody);
      contextClose();
    }
  dfClose();
}


function tgTextTemplate($context,$contextBody,array $tgTitle,array $tgTextArray){
  dfOpen();
    structureOpen($tgTitle);
      tgText($tgTextArray);
    structureClose();
    if($context == true){
      comma();
      contextOpen();
        echo($contextBody);
      contextClose();
    }
  dfClose();
}


function tgRepliesTemplate($context,$contextBody,array $tgTitle, array $rTitleArray,array $rTextArray){
  dfOpen();
    structureOpen($tgTitle);
      tgReplies($rTitleArray, $rTextArray);
    structureClose();
    if($context == true){
      comma();
      contextOpen();
        echo($contextBody);
      contextClose();
    }
  dfClose();
}

function tgCardTemplate($context,$contextBody,array $tgTitle, array $cImageArray, array $cTitleArray, array $cSubtitleArray, array $cButtonTextArray, array $cButtonCustomArray){
  dfOpen();
    structureOpen($tgTitle);
      tgCard($cImageArray, $cTitleArray, $cSubtitleArray, $cButtonTextArray, $cButtonCustomArray);
    structureClose();
    if($context == true){
      comma();
      contextOpen();
        echo($contextBody);
      contextClose();
    }
  dfClose();
}





// function tgExternalRequiringNumberTemplate($context,$contextBody,$tgTitle){
//   dfOpen();
//     structureOpen($tgTitle);
//       openPayload();
//         externalRequiringNumber();
//       closePayload();
//     structureClose();
//   if($context == true){
//     comma();
//     contextOpen();
//       echo($contextBody);
//     contextClose();
//   }
//   dfClose();
// }
//
//
// function tgExternalVerticalButtonsTemplate($context,$contextBody,$tgTitle,array $tgTitleArray, array $tgButtonArray){
//   dfOpen();
//     structureOpen($tgTitle);
//       openPayload();
//         tgVerticalButtons( $tgTitleArray,  $tgButtonArray);
//       closePayload();
//     structureClose();
//   if($context == true){
//     comma();
//     contextOpen();
//       echo($contextBody);
//     contextClose();
//   }
//   dfClose();
// }

?>
