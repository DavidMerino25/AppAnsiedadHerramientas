<?php


function fbText(array $tTextArray)
{
  $raw = '';
  for($i = 0; $i < count($tTextArray); $i++):
    $raw .= '{
              "text": {
                "text": ["' . $tTextArray[$i] . '"]
              },
              "platform": "FACEBOOK"
            },';
  endfor;
  $result = rtrim($raw, ",");
echo $result;

        }

 ?>
