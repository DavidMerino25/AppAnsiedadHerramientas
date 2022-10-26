<?php


function fbParagraph(array $pTextArray)
{
  $raw = '';
  for($i = 0; $i < count($pTextArray); $i++):
    $raw .= '{
              "text": {
                "text": ["' . $pTextArray[$i] . '"]
              },
              "platform": "FACEBOOK"
            },';
  endfor;
  $result = rtrim($raw, ",");
echo $result;

        }

 ?>
