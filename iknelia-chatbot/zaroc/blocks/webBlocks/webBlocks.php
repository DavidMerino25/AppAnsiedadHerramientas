<?php
##---------------------------Visual--------------------------------##
# webCard($aImageArray, $aTitleArray, $aSubtitleArray, $aTextArray);        //Receives text
# webImage($iImageArray, $iTextArray);                                           //Receives an ImageLink
# webDescription($dTitleArray,$dTextArray);                                      //Receives Multiples Arrays of text
# webParagraph($dTitleArray,$dTextArray);                                      //Receives Multiples Arrays of text

##--------------------------VisualHandler-----------------------------##

# webList($lTitleArray,$lSubtitleArray,$lImageArray,$lCustomArray);              //Event / Link Handler
# webReply($cTitleArray,$cImageArray,$cCustomArray);                             //Text / Link Handler
# webButton($bTitleArray, $bCustomArray, $bIconArray, $bColorArray);             //Link / Event Handler

require_once("webCard.php"); # HTML
require_once("webImage.php");   # NO
require_once("webButton.php"); # HTML
require_once("webDescription.php"); # NO
require_once("webList.php");     # NO
require_once("webReply.php");    # NO
require_once("webParagraph.php"); # HTML

?>
