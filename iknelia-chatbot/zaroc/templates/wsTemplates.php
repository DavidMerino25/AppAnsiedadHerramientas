<?php

function wsParagraphTemplate($context,$contextBody, array $wsTitle, array $wsTextArray){

    if($context == true){
      dfOpen();
        structureOpen($wsTitle);
          wsParagraph($wsTextArray);
        structureClose();
        comma();
        contextOpen();
          echo($contextBody);
        contextClose();
      dfClose();
    } else {
      dfOpen();
        structureOpen($wsTitle);
          wsParagraph($wsTextArray);
        structureClose();
      dfClose();
    }
}



?>
