<?php


function tgText(array $tTextArray)
{
  $raw = '';
  for($i = 0; $i < count($tTextArray); $i++):
    $raw .= '{
              "text": {
                "text": ["' . $tTextArray[$i] . '"]
              },
              "platform": "TELEGRAM"
            },';
  endfor;
  $result = rtrim($raw, ",");
echo $result;

        }

 ?>
