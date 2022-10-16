<?php
//------------------------------------TEXTS---------------------------------//


function id(){
$c = uniqid();
// $id = md5($c);
return $c;
}

function id2(){
  $c = uniqid();
  $id = md5($c);
  return $id;
}

function createSpan($text,$values){

  $span = "<span $values >$text</span>";
  return $span;
}




#Check last caracter of a word
function endsWith($haystack, $needle)
{
    $length = strlen($needle);
    if (!$length)
    {
        return true;
    }
    return substr($haystack, -strlen($needle)) === $needle;
}


function startsWith ($string, $startString)
{
    $len = strlen($startString);
    return (substr($string, 0, $len) === $startString);
}


#Remove blank
function reduce($text)
{
    $text = str_replace(' ', '', $text);
    return $text;
}
#Remove Gaps
function lower($text)
{
    $text = strtolower($text);
    return $text;
}

#Remove blank and Gaps
function reduceLower($text)
{
    $text = lower($text);
    $text = reduce(' ', '', $text);
    return $text;
}

#To Capital and remove gaps
function titleAdjust($text)
{
    $text = str_replace('-', ' ', $text);
    $text = ucwords($text);
    return $text;
}

function adaptJson($text)
{
  $text = str_replace('"','\'',$text);
  return $text;
}

#Prepares a WhatsApp Link
function whatsAppLink($texto,$telefono){
  $telefono = reduce($telefono);
  $tlf = "52$telefono";
  $texto = rawurlencode($texto);
  $final = "https://api.whatsapp.com/send/?phone=$tlf=&text=$texto";
  return $final;

}

function textToUrlEncode($text){
  $raw = '';
  if(is_array($text)){
    for($i1 = 0; $i < count($text); $i++):
      $raw .= $text." ";
    endfor;
  $raw = rawurlencode($raw);
  return $raw;
  } else {
  $text = rawurlencode($text);
  return $text;
}
}

function createBankNumber($type){

$num = crypt(uniqid(rand()**2));
$num = hexdec($num);


  if($type== 'card'){

  $num .= '-';
  $num .= rand(1000,9999);
  $num .= '-';
  $num .= rand(1000,9999);
  $num .= '-';
  $num .= rand(1000,9999);

  return $num;

  }

  if($type=='account'){

  $num = rand(000000000000000000,999999999999999999);

  return $num;
  }


}

function filterOrders( array $orden, array $ordenf){

  $iterador1 = count($orden);
  $limitante = array();

  for($n=0; $n <count($orden) ;$n++){
    array_push($limitante ,0);
  }
  $existente = array();
  for($n=0; $n <count($orden) ;$n++){
    array_push($existente ,0);
  }
  $iterador2 = count($ordenf);

  for($i=0; $i < $iterador1;$i++ ){
    for($i2=0; $i2 < $iterador2; $i2++ ){
      if($orden[$i]['producto'] ==  $ordenf[$i2]['producto']){
        $cantidadExistente = $ordenf[$i2]['cantidad'];
        @$nuevaCantidad = $orden[$i]['cantidad'];
        $cantidadTotal = $cantidadExistente + $nuevaCantidad;
        $ordenf[$i2]['cantidad'] = $cantidadTotal;
      }else{
        if($limitante[$i] == 0){
          for($n=0; $n < count($ordenf);$n++){
            if($orden[$i]['producto'] == $ordenf[$n]['producto']){
              $existente[$i] = 1;
            }
          }
          if($existente[$i] == 0){
            array_push($ordenf , $orden[$i]);
            $limitante[$i] = 1;
          }
        }
      }
    }
  }
  return $ordenf;
}


?>
