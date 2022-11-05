<?php


function tgParagraph(array $pTextArray)
{
  $raw = '';
  for($i = 0; $i < count($pTextArray); $i++):
    $raw .= '{
              "text": {
                "text": ["' . $pTextArray[$i] . '"]
              },
              "platform": "TELEGRAM"
            },';
  endfor;
  $result = rtrim($raw, ",");
echo $result;

        }

 ?>
