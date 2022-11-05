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
      if($structure[$i] == 'paragraph'){
        // tgText($tgTextArray);
        tgParagraph($components[$i][0]);
      }
      if($structure[$i] == 'reply'){
        // tgReplies($rTitleArray, $rTextArray);
        tgReply($components[$i][0], $components[$i][1]);
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




?>
