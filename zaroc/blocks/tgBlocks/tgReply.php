<?php

function tgReply(array $rTitleArray, array $rTextArray)
{
    echo '
  {
    "quickReplies": {
      "title": "' . $rTitleArray[0] . '",
      "quickReplies": [';

      $raw = '';
      for($i = 0; $i < count($rTextArray); $i ++):

        $raw .= '"' . $rTextArray[$i] . '",';

      endfor;

      $result = rtrim($raw,  ",");
      echo $result;

    echo '
      ]
    },
    "platform": "TELEGRAM"
  }';

}

 ?>
