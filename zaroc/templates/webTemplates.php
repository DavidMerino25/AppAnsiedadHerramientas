<?php
function webStructureTemplate($context,$contextBody, array $webTitle,array $structure, array $components){
      dfOpen();
        structureOpen($webTitle);
          openPayload();
            openWeb();
      for($i = 0; $i < count($structure); $i++):
        if($structure[$i] == 'card'){
          // webAccordeon($imageArray,$titleArray,$aSubtitleArray,$aTextArray);
          webCard($components[$i][0],$components[$i][1],$components[$i][2]);
        }
        if($structure[$i] == 'button'){
          // webButton($bTitleArray,$bCustomArray,$bIconArray,$bColorArray);
          webButton($components[$i][0],$components[$i][1],$components[$i][2],$components[$i][3]);
        }
        if($structure[$i] == 'reply'){
          // webChips($cTitleArray,$cImageArray,$cCustomArray);
          webReply($components[$i][0],$components[$i][1],$components[$i][2]);
        }
        if($structure[$i] == 'description'){
          // webDescription($dTitleArray,$dTextArray);
          webDescription($components[$i][0],$components[$i][1]);
        }
        if($structure[$i] == 'image'){
          // webImage($imageArray,$webTitle);
          webImage($components[$i][0],$components[$i][1]);
        }
        if($structure[$i] == 'list'){
          // webList($lTitleArray,$lSubtitleArray,$lImageArray,$lCustomArray);
          webList($components[$i][0],$components[$i][1],$components[$i][2],$components[$i][3]);
        }
        if($structure[$i] == 'paragraph'){
          // webParagraph($pTitleArray, $pSubtitleArray);
          webParagraph($components[$i][0],$components[$i][1]);
        }
        if($structure[$i] == 'comma'){
          comma();
        }
        if($structure[$i] == 'basicDivider'){
          basicDivider();
        }
        if($structure[$i] == 'commaDivider'){
          commaDivider();
        }
        if($structure[$i] == 'superDivider'){
          superDivider();
        }
      endfor;
        closeWeb();
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
