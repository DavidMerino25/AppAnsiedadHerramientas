<?php
#OpenWeather Api
function openWeatherAPI($apiKey,$country,$location){
  $location = textToUrlEncode($location);
    $coreUrl = "api.openweathermap.org/data/2.5/weather?q=$location,$country&lang=es&units=metric&mode=json&appid=$apiKey";
    return $coreUrl;
}



#Top Headlnes News API

function internationalNewsApi($apiKey,$category,$country,$page){
  if($category === NULL || $category === '' || empty($category)){
    $category = "general";
  } else {
    $category = $category;
    if($country === NULL || $country === '' || empty($country)){
      $country = 'co';
    } else {
      $country = $country;
    }
  }
 $coreUrl = "https://newsapi.org/v2/top-headlines?country=$country&category=$category&page=$page&pageSize=3&apiKey=$apiKey";

 return $coreUrl;
}



function getJsonVariable($json, $variable)
{
    $array = json_decode($json, true);
    $result = $array["$variable"];
    return $result;
}


function getLoyversePrice($json)
{
    $array = json_decode($json, true);
    $result = $array["variants"][0]["default_price"];
    $result = "$$result Pesos";
    return $result;
}

?>
