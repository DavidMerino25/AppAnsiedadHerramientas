<?php

function wsParagraph( array $wsTextArray)
{
  $raw = '';
  for($i = 0; $i < count($wsTextArray); $i ++):
  $raw .=
  '{
    "text": {
      "text": [
        "' . $wsTextArray[$i] . '"
      ]
    }
  },';
  endfor;
   $result = rtrim($raw, ",");
  echo $result;
}


?>
