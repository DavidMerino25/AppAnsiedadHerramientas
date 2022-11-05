<?php

// 80 charecters title/Subtitle
// 24 characteres button

function fbCard(array $cImageArray, array $cTitleArray, array $cSubtitleArray, array $cButtonTextArray, array $cButtonCustomArray)
{

  $raw1 = '';
  $raw2 = '';


  for($i1 = 0; $i1 < count($cTitleArray); $i1++):

    $raw1 .= '{
      "card": {
        "title": "' . $cTitleArray[$i1] . '",
        "subtitle": "' . $cSubtitleArray[$i1] . '",
        "imageUri": "' . $cImageArray[$i1] . '",
        "buttons": [';
      for($i2 = 0; $i2 < count($cButtonTextArray[$i1]); $i2++):
        $raw2 .= '{
          "text": "' . $cButtonTextArray[$i1][$i2] . '",
          "postback": "' . $cButtonCustomArray[$i1][$i2] . '"
        },';
      endfor;

      $raw1 .=rtrim($raw2, ",");
      $raw2 = '';
      $raw1 .=  ']},"platform": "FACEBOOK"},';
  endfor;

  $result = rtrim($raw1, ",");
  echo $result;







    }

 ?>
