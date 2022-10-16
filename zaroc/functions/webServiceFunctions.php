<?php
$retrievedUser = $_SERVER['PHP_AUTH_USER'];
$retrievedPassword = $_SERVER['PHP_AUTH_PW'];
$time = microtime(true) - $_SERVER["REQUEST_TIME_FLOAT"];


$inputJSON = file_get_contents('php://input');
$input = json_decode($inputJSON, true);
header('Content-Type: application/json;charset=utf-8');

#Auth
function auth($user, $password)
{
    global $retrievedUser;
    global $retrievedPassword;
    if (($user != $retrievedUser) or ($password != $retrievedPassword))
    {
        echo "Put your Credentials Correctly";
        die();
    }
}

// INTENTS and FILTERS

function intent($intentName)
{
    global $input;
    if ($input["queryResult"]["intent"]["displayName"] == $intentName)
    {
        return true;
    }
    else
    {
        return false;
    }
}

function action($actionName)
{
    global $input;
    if ($input["queryResult"]["action"] == $actionName)
    {
        return true;
    }
    else
    {
        return false;
    }
}

// PARAMETERS

function getIntentParameter()
{
    global $input;
    if (isset($input["queryResult"]["parameters"]))
    {
        return $input["queryResult"]["parameters"];
    }
    else
    {
        return false;
    }
}

function getContextParameter($contextIndex)
{
  global $input;
    if ($contextIndex == '')
    {
        $contextIndex = 0;
    }

    if (isset($input["queryResult"]["outputContexts"][$contextIndex]["parameters"])){
      return $input["queryResult"]["outputContexts"][$contextIndex]["parameters"];
    } else {
      return false;
    }
}


// TRIGGERS

function triggerEvent(array $eventName,array $params){

  $raw ='{
    "followupEventInput": {
      "name": "'.$eventName[0].'",
      "languageCode": "en-US",
      "parameters": {';

        foreach($params as $param => $value):
          $raw .= ' "'.$param.'":"'.$value.'",';
        endforeach;
          $raw = rtrim($raw, ",");
  $raw .= '}}}'.PHP_EOL;
  echo $raw;
}

function triggerError($context,$contextBody, array $intentName,array $errorMessage, array $params){

  if($context == true){

    // $raw = '{"fulfillmentMessages": [{"text": {"text": ["'.$intentName[0]."💥: ".$errorMessage[0].'"], "parameters":{';

    // foreach($params as $param => $value):
    //       $raw .= ' "'.$param.'":"'.$value.'",';
    //     endforeach;
    //       $raw = rtrim($raw, ",");

    // $raw .= '},['.$contextBody.']}}]}'.PHP_EOL;
    // echo $raw;

    echo('{"fulfillmentMessages": [{"text": {"text": ["'.$intentName[0]."💥: ".$errorMessage[0].'"],['.$contextBody.']}}]}'.PHP_EOL);
  } else {
    echo('{"fulfillmentMessages": [{"text": {"text": ["'.$intentName[0]."💥: ".$errorMessage[0].'"]}}]}'.PHP_EOL);
  }
}


function triggerPropmt($context,$contextBody,array $prompt){
  if($context == true){
    $raw = '{"fulfillmentMessages": [{"text": {"text": ["'.$prompt[0].'"]}}] ,[';
    $raw .= $contextBody;
    $raw .= ']}'.PHP_EOL;
    echo($raw);
  } else {
    echo('{"fulfillmentMessages": [{"text": {"text": ["'.$prompt[0].'"]}}]}'.PHP_EOL);
  }
}


// CONTEXT

function setContextParameter($contextIndex, $variableName, $variableValue){
  global $input;
  $context = $input["queryResult"]["outputContexts"][$contextIndex];
  $context["parameters"]["$variableName"] = $variableValue;
  $context =  json_encode($context);
  return $context;
}

function updateContextParameter($contextIndex,$variableName,$variableValue){
  global $input;
  if(isset($input["queryResult"]["outputContexts"][$contextIndex]["parameters"]["$variableName"])){
    $context = $input["queryResult"]["outputContexts"][$contextIndex];
    $context["parameters"]["$variableName"] = $variableValue;
    $context =  json_encode($context);
    return $context;
  } else {
    return false;
  }
}

function setContextParameters($contextIndex = 0,array $parameters){

  global $input;

  if(is_array($contextIndex)){
    $context = $input["queryResult"]["outputContexts"]["$contextIndex[0]"];
  } else {
    $context = $input["queryResult"]["outputContexts"][$contextIndex];
  }


  foreach($parameters as $variable => $value):
    $context["parameters"]["$variable"] = $value;
  // array_push($context["parameters"]["$variable"] = $value);
  endforeach;

  $context =  json_encode($context);
  return $context;
}


function updateContextParameters($contextIndex, array $parameters){

  global $input;

  $context = $input["queryResult"]["outputContexts"][$contextIndex];

  foreach($parameters as $variable => $value):

    if(isset($input["queryResult"]["outputContexts"][$contextIndex]["parameters"]["$variable"])){
      $context["parameters"]["$variable"] = $value;
    }
  // array_push($context["parameters"]["$variable"] = $value);

  $context["parameters"]["$variable"] = $value;
  endforeach;
  $context =  json_encode($context);
  return $context;
}


// TROUBLESHOOT

function getInput(){
  global $input;
  return $input;
}


function createInput($fileName){
  global $input;
  $raw = json_encode($input);
  $file = fopen("$fileName.txt", "w");
  fwrite($file, $raw . PHP_EOL);
  fclose($file);

}

function getTimeOut(){
  global $time;
  $time *= 1000;
  $time = round($time,2);
  return $time;
}



// MISCELANEOUS

function getSessionId(){
  global $input;
  if(isset($input["session"])){
    $inputs = explode("/",$input["session"]);
    $session = 4;
    return $inputs[$session];
  } else {
    return false;
  }
}


function getUserInput(){
  global $input;
  $userInput = $input["queryResult"]['queryText'];
  return $userInput;
}

function getProjectName(){
  global $input;
  if(isset($input["session"])){
    $inputs = explode("/",$input["session"]);
    $projectName = 1;
    return $inputs[$projectName];
  } else {
    return false;
  }
}


function getWhatsAppPhoneNumber()
{
    global $input;
    $userPhone = substr(intval(preg_replace('/[^0-9]+/', '', $input["session"]), 10),-10);
    return $userPhone;
}


function getTelegramChatId()
{
    global $input;
    $chatId = $input["originalDetectIntentRequest"]["payload"]["data"]["chat"]["id"];
    return $chatId;
}


function getContactId(){
  global $input;
  $contactId = $input['originalDetectIntentRequest']['payload']['contact']['cId'];
  return $contactId;
}

?>
