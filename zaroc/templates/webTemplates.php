<?php
// Carga las templates de dialogflow
function webStructureTemplate($context,$contextBody, array $webTitle,array $structure, array $components){
      dfOpen();
        structureOpen($webTitle);
          openPayload();
            openWeb();
      for($i = 0; $i < count($structure); $i++):
        if($structure[$i] == 'accordeon'){
          // webAccordeon($imageArray,$titleArray,$aSubtitleArray,$aTextArray);
          webAccordeon($components[$i][0],$components[$i][1],$components[$i][2],$components[$i][3]);
        }
        if($structure[$i] == 'button'){
          // webButton($bTitleArray,$bCustomArray,$bIconArray,$bColorArray);
          webButton($components[$i][0],$components[$i][1],$components[$i][2],$components[$i][3]);
        }
        if($structure[$i] == 'chips'){
          // webChips($cTitleArray,$cImageArray,$cCustomArray);
          webChips($components[$i][0],$components[$i][1],$components[$i][2]);
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

function webDescriptionTemplate($context,$contextBody,array $webTitle, array $dTitleArray, array $dTextArray){
  if($context == true){
    dfOpen();
      structureOpen($webTitle);
        openPayload();
          openWeb();
            webDescription($dTitleArray,$dTextArray);
          closeWeb();
        closePayload();
      structureClose();
      comma();
      contextOpen();
        echo($contextBody);
      contextClose();
    dfClose();
  } else {
    dfOpen();
      structureOpen($webTitle);
        openPayload();
          openWeb();
            webDescription($dTitleArray,$dTextArray);
          closeWeb();
        closePayload();
      structureClose();
    dfClose();
  }
}

function webParagraphTemplate($context,$contextBody,array $webTitle, array $pTitleArray, array $pSubtitleArray){
  if($context == true){
    dfOpen();
      structureOpen($webTitle);
        openPayload();
          openWeb();
            webParagraph($pTitleArray, $pSubtitleArray);
          closeWeb();
        closePayload();
      structureClose();
      comma();
      contextOpen();
        echo($contextBody);
      contextClose();
    dfClose();
  } else {
    dfOpen();
      structureOpen($webTitle);
        openPayload();
          openWeb();
            webParagraph($pTitleArray, $pSubtitleArray);
          closeWeb();
        closePayload();
      structureClose();
    dfClose();
  }
}

function webChipsTemplate($context,$contextBody,array $webTitle, array $cTitleArray, array $cImageArray,array $cCustomArray){
  if($context == true){
    dfOpen();
      structureOpen($webTitle);
        openPayload();
          openWeb();
            webChips($cTitleArray,$cImageArray,$cCustomArray);
          closeWeb();
        closePayload();
      structureClose();
      comma();
      contextOpen();
        echo($contextBody);
      contextClose();
    dfClose();
  } else {
    dfOpen();
      structureOpen($webTitle);
        openPayload();
          openWeb();
            webChips($cTitleArray,$cImageArray,$cCustomArray);
          closeWeb();
        closePayload();
      structureClose();
    dfClose();
  }
}

function webAccordeonTemplate($context,$contextBody,array $webTitle,array $imageArray,array $titleArray,array $aSubtitleArray,array $aTextArray){
  if($context == true){
    dfOpen();
      structureOpen($webTitle);
        openPayload();
          openWeb();
            webAccordeon($imageArray,$titleArray,$aSubtitleArray,$aTextArray);
          closeWeb();
        closePayload();
      structureClose();
      comma();
      contextOpen();
        echo($contextBody);
      contextClose();
    dfClose();
  } else {
    dfOpen();
      structureOpen($webTitle);
        openPayload();
          openWeb();
            webAccordeon($imageArray,$titleArray,$aSubtitleArray,$aTextArray);
          closeWeb();
        closePayload();
      structureClose();
    dfClose();
  }
}

function webButtonTemplate($context,$contextBody,array $webTitle,array $bTitleArray,array $bCustomArray,array $bIconArray,array $bColorArray){
  if($context == true){
    dfOpen();
      structureOpen($webTitle);
        openPayload();
          openWeb();
            webButton($bTitleArray,$bCustomArray,$bIconArray,$bColorArray);
          closeWeb();
        closePayload();
      structureClose();
      comma();
      contextOpen();
        echo($contextBody);
      contextClose();
    dfClose();
  } else {
    dfOpen();
      structureOpen($webTitle);
        openPayload();
          openWeb();
            webButton($bTitleArray,$bCustomArray,$bIconArray,$bColorArray);
          closeWeb();
        closePayload();
      structureClose();
    dfClose();
  }
}

function webImageTemplate($context,$contextBody,array $webTitle,array $imageArray){
  if($context == true){
    dfOpen();
      structureOpen($webTitle);
        openPayload();
          openWeb();
            webImage($imageArray,$webTitle);
          closeWeb();
        closePayload();
      structureClose();
      comma();
      contextOpen();
        echo($contextBody);
      contextClose();
    dfClose();
  } else {
    dfOpen();
      structureOpen($webTitle);
        openPayload();
          openWeb();
            webImage($imageArray,$webTitle);
          closeWeb();
        closePayload();
      structureClose();
    dfClose();
  }
}

function webListTemplate($context,$contextBody,array $webTitle,array $lTitleArray,array $lSubtitleArray,array $lImageArray,array $lCustomArray){
  if($context == true){
    dfOpen();
      structureOpen($webTitle);
        openPayload();
          openWeb();
            webList($lTitleArray,$lSubtitleArray,$lImageArray,$lCustomArray);
          closeWeb();
        closePayload();
      structureClose();
      comma();
      contextOpen();
        echo($contextBody);
      contextClose();
    dfClose();
  } else {
    dfOpen();
      structureOpen($webTitle);
        openPayload();
          openWeb();
            webList($lTitleArray,$lSubtitleArray,$lImageArray,$lCustomArray);
          closeWeb();
        closePayload();
      structureClose();
    dfClose();
  }
}



//  Complex Templates
function webListChipsTemplate($context,$contextBody,array $webTitle,array $lTitleArray,array $lSubtitleArray,array $lImageArray,array $lCustomArray,array $cTitleArray,array $cImageArray,array $cCustomArray ){
  if($context == true){
    dfOpen();
      structureOpen($webTitle);
        openPayload();
          openWeb();
          webList($lTitleArray,$lSubtitleArray,$lImageArray,$lCustomArray);
          comma();
          webChips($cTitleArray,$cImageArray,$cCustomArray);
          closeWeb();
        closePayload();
      structureClose();
      comma();
      contextOpen();
        echo($contextBody);
      contextClose();
    dfClose();
  } else {
    dfOpen();
      structureOpen($webTitle);
        openPayload();
          openWeb();
          webList($lTitleArray,$lSubtitleArray,$lImageArray,$lCustomArray);
          comma();
          webChips($cTitleArray,$cImageArray,$cCustomArray);
          closeWeb();
        closePayload();
      structureClose();
    dfClose();
  }
}


function webDescriptionChipsTemplate($context,$contextBody,array $webTitle,array $dTitleArray,array $dTextArray,array $cTitleArray,array $cImageArray,array $cCustomArray){
  if($context == true){
    dfOpen();
      structureOpen($webTitle);
        openPayload();
          openWeb();
          webDescription($dTitleArray,$dTextArray);
          comma();
          webChips($cTitleArray,$cImageArray,$cCustomArray);
          closeWeb();
        closePayload();
      structureClose();
      comma();
      contextOpen();
        echo($contextBody);
      contextClose();
    dfClose();
  } else {
    dfOpen();
      structureOpen($webTitle);
        openPayload();
          openWeb();
          webDescription($dTitleArray,$dTextArray);
          comma();
          webChips($cTitleArray,$cImageArray,$cCustomArray);
          closeWeb();
        closePayload();
      structureClose();
    dfClose();
  }
}

function webDescriptionListTemplate($context,$contextBody,array $webTitle,array $dTitleArray,array $dTextArray,array $lTitleArray,array $lSubtitleArray,array $lImageArray,array $lCustomArray){
  if($context == true){
    dfOpen();
      structureOpen($webTitle);
        openPayload();
          openWeb();
          webDescription($dTitleArray,$dTextArray);
          commaDivider();
          webList($lTitleArray,$lSubtitleArray,$lImageArray,$lCustomArray);
          closeWeb();
        closePayload();
      structureClose();
      comma();
      contextOpen();
        echo($contextBody);
      contextClose();
    dfClose();
  } else {
    dfOpen();
      structureOpen($webTitle);
        openPayload();
          openWeb();
          webDescription($dTitleArray,$dTextArray);
          commaDivider();
          webList($lTitleArray,$lSubtitleArray,$lImageArray,$lCustomArray);
          closeWeb();
        closePayload();
      structureClose();
    dfClose();
  }
}

function webImageAccordeonButtonTemplate($context,array $contextBody,array $webTitle,array $imageArray,array $titleArray,array $aSubtitleArray,array $aTextArray,array $bTitleArray,array $bCustomArray,array $bIconArray,array $bColorArray){

  if($context == true){
    dfOpen();
      structureOpen($webTitle);
        openPayload();
          openWeb();
          webImage($imageArray,$titleArray);
          comma();
          webAccordeon($imageArray,$titleArray,$aSubtitleArray,$aTextArray);
          superDivider();
          webButton($bTitleArray,$bCustomArray,$bIconArray,$bColorArray);
          closeWeb();
        closePayload();
      structureClose();
      comma();
      contextOpen();
        echo($contextBody);
      contextClose();
    dfClose();
  } else {
    dfOpen();
      structureOpen($webTitle);
        openPayload();
          openWeb();
          webImage($imageArray,$titleArray);
          comma();
          webAccordeon($imageArray,$titleArray,$aSubtitleArray,$aTextArray);
          superDivider();
          webButton($bTitleArray,$bCustomArray,$bIconArray,$bColorArray);
          closeWeb();
        closePayload();
      structureClose();
    dfClose();
  }
}


function webImageAccordeonButtonChipsTemplate($context,$contextBody,array $webTitle,array $titleArray,array $imageArray,array $aSubtitleArray,array $aTextArray,array $bTitleArray,array $bCustomArray,array $bIconArray,array $bColorArray,array $cTitleArray,array $cImageArray,array $cCustomArray){
  if($context == true){
    dfOpen();
      structureOpen($webTitle);
        openPayload();
          openWeb();
          webImage($imageArray,$titleArray);
          comma();
          webAccordeon($imageArray,$titleArray,$aSubtitleArray,$aTextArray);
          superDivider();
          webButton($bTitleArray,$bCustomArray,$bIconArray,$bColorArray);
          commaDivider();
          webChips($cTitleArray,$cImageArray,$cCustomArray);
          closeWeb();
        closePayload();
      structureClose();
      comma();
      contextOpen();
        echo($contextBody);
      contextClose();
    dfClose();
  } else {
    dfOpen();
      structureOpen($webTitle);
        openPayload();
          openWeb();
          webImage($imageArray,$titleArray);
          comma();
          webAccordeon($imageArray,$titleArray,$aSubtitleArray,$aTextArray);
          superDivider();
          webButton($bTitleArray,$bCustomArray,$bIconArray,$bColorArray);
          commaDivider();
          webChips($cTitleArray,$cImageArray,$cCustomArray);
          closeWeb();
        closePayload();
      structureClose();
    dfClose();
  }
}



function webImageAccordeonChipsButtonTemplate($context,$contextBody,array $webTitle,array $titleArray,array $imageArray,array $aSubtitleArray, array $aTextArray,array $cTitleArray, array $cImageArray,array $cCustomArray,array $bTitleArray,array $bCustomArray,array $bIconArray,array $bColorArray){
  if($context == true){
    dfOpen();
      structureOpen($webTitle);
        openPayload();
          openWeb();
          webImage($imageArray,$titleArray);
          comma();
          webAccordeon($imageArray,$titleArray,$aSubtitleArray,$aTextArray);
          commaDivider();
          webChips($cTitleArray,$cImageArray,$cCustomArray);
          superDivider();
          webButton($bTitleArray,$bCustomArray,$bIconArray,$bColorArray);
          closeWeb();
        closePayload();
      structureClose();
      comma();
      contextOpen();
        echo($contextBody);
      contextClose();
    dfClose();
  } else {
    dfOpen();
      structureOpen($webTitle);
        openPayload();
          openWeb();
          webImage($imageArray,$titleArray);
          comma();
          webAccordeon($imageArray,$titleArray,$aSubtitleArray,$aTextArray);
          commaDivider();
          webChips($cTitleArray,$cImageArray,$cCustomArray);
          superDivider();
          webButton($bTitleArray,$bCustomArray,$bIconArray,$bColorArray);
          closeWeb();
        closePayload();
      structureClose();
    dfClose();
  }
}

function webDescriptionButtonTemplate($context,$contextBody,array $webTitle,array $dTitleArray,array $dTextArray,array $bTitleArray,array $bCustomArray,array $bIconArray,array $bColorArray){
  if($context == true){
    dfOpen();
      structureOpen($webTitle);
        openPayload();
          openWeb();
          webDescription($dTitleArray,$dTextArray);
          comma();
          webButton($bTitleArray,$bCustomArray,$bIconArray,$bColorArray);
          closeWeb();
        closePayload();
      structureClose();
      comma();
      contextOpen();
        echo($contextBody);
      contextClose();
    dfClose();
  } else {
    dfOpen();
      structureOpen($webTitle);
        openPayload();
          openWeb();
          webDescription($dTitleArray,$dTextArray);
          comma();
          webButton($bTitleArray,$bCustomArray,$bIconArray,$bColorArray);
          closeWeb();
        closePayload();
      structureClose();
    dfClose();
  }
}

function webDescriptionChipsButtonTemplate($context,$contextBody,array $webTitle,array $dTitleArray,array $dTextArray,array $cTitleArray,array $cImageArray,array $cCustomArray,array $bTitleArray,array $bCustomArray,array $bIconArray,array $bColorArray){
  if($context == true){
    dfOpen();
      structureOpen($webTitle);
        openPayload();
          openWeb();
          webDescription($dTitleArray,$dTextArray);
          comma();
          webChips($cTitleArray,$cImageArray,$cCustomArray);
          superDivider();
          webButton($bTitleArray,$bCustomArray,$bIconArray,$bColorArray);
          closeWeb();
        closePayload();
      structureClose();
      comma();
      contextOpen();
        echo($contextBody);
      contextClose();
    dfClose();
  } else {
    dfOpen();
      structureOpen($webTitle);
        openPayload();
          openWeb();
          webDescription($dTitleArray,$dTextArray);
          comma();
          webChips($cTitleArray,$cImageArray,$cCustomArray);
          superDivider();
          webButton($bTitleArray,$bCustomArray,$bIconArray,$bColorArray);
          closeWeb();
        closePayload();
      structureClose();
    dfClose();
  }
}


function webImageAccordeonChipsTemplate($context,$contextBody,array $webTitle,array $titleArray,array $imageArray,array $aSubtitleArray,array $aTextArray,array $cTitleArray,array $cImageArray,array $cCustomArray){
  if($context == true){
    dfOpen();
      structureOpen($webTitle);
        openPayload();
          openWeb();
          webImage($imageArray,$titleArray);
          comma();
          webAccordeon($imageArray,$titleArray,$aSubtitleArray,$aTextArray);
          commaDivider();
          webChips($cTitleArray,$cImageArray,$cCustomArray);
          closeWeb();
        closePayload();
      structureClose();
      comma();
      contextOpen();
        echo($contextBody);
      contextClose();
    dfClose();
  } else {
    dfOpen();
      structureOpen($webTitle);
        openPayload();
          openWeb();
          webImage($imageArray,$titleArray);
          comma();
          webAccordeon($imageArray,$titleArray,$aSubtitleArray,$aTextArray);
          commaDivider();
          webChips($cTitleArray,$cImageArray,$cCustomArray);
          closeWeb();
        closePayload();
      structureClose();
    dfClose();
  }
}

function webDescriptionListButtonTemplate($context,$contextBody,array $webTitle,array $dTitleArray,array $dTextArray,array $lTitleArray,array $lSubtitleArray,array $lImageArray,array $lCustomArray,array $bTitleArray,array $bCustomArray,array $bIconArray,array $bColorArray){
  if($context == true){
    dfOpen();
      structureOpen($webTitle);
        openPayload();
          openWeb();
          webDescription($dTitleArray,$dTextArray);
          commaDivider();
          webList($lTitleArray,$lSubtitleArray,$lImageArray,$lCustomArray);
          superDivider();
          webButton($bTitleArray,$bCustomArray,$bIconArray,$bColorArray);
          closeWeb();
        closePayload();
      structureClose();
      comma();
      contextOpen();
        echo($contextBody);
      contextClose();
    dfClose();
  } else {
    dfOpen();
      structureOpen($webTitle);
        openPayload();
          openWeb();
          webDescription($dTitleArray,$dTextArray);
          commaDivider();
          webList($lTitleArray,$lSubtitleArray,$lImageArray,$lCustomArray);
          superDivider();
          webButton($bTitleArray,$bCustomArray,$bIconArray,$bColorArray);
          closeWeb();
        closePayload();
      structureClose();
    dfClose();
  }
}

function webListButtonTemplate($context,$contextBody,array $webTitle,array $lTitleArray,array $lSubtitleArray,array $lImageArray,array $lCustomArray,array $bTitleArray,array $bCustomArray,array $bIconArray,array $bColorArray){
  if($context == true){
    dfOpen();
      structureOpen($webTitle);
        openPayload();
          openWeb();
          webList($lTitleArray,$lSubtitleArray,$lImageArray,$lCustomArray);
          superDivider();
          webButton($bTitleArray,$bCustomArray,$bIconArray,$bColorArray);
          closeWeb();
        closePayload();
      structureClose();
      comma();
      contextOpen();
        echo($contextBody);
      contextClose();
    dfClose();
  } else {
    dfOpen();
      structureOpen($webTitle);
        openPayload();
          openWeb();
          webList($lTitleArray,$lSubtitleArray,$lImageArray,$lCustomArray);
          superDivider();
          webButton($bTitleArray,$bCustomArray,$bIconArray,$bColorArray);
          closeWeb();
        closePayload();
      structureClose();
    dfClose();
  }
}

?>
