<?php

#SOCIAL MEDIA VARIABLES
$fb = "FACEBOOK";
$sk = "SLACK";
$tg = "TELEGRAM";
$br = '</br>';
$n = '\n';

#Facebook Images Styles

$style_Tall = 'tall';
$style_Compact = 'compact';
$style_Full = 'full';

#Facebook Media Types

$media_Image = 'image';
$media_Video = 'video';

#Currencies

$cur_Usd = 'USD';


##Presentation
$hour = date("H");

if ($hour >= 7 && $hour < 12)
{
    $es_welcome = "Buenos días";
    $en_welcome = "Good Morning";
}
else if ($hour >= 12 && $hour < 20)
{
  $es_welcome = "Buenas Tardes";
  $en_welcome = "Good Afternoon";
}
else if ($hour >= 20 && $hour < 24)
{
    $es_welcome = "Buenas Noches";
    $en_welcome = "Good Evening";
}
else if ($hour >= 0 && $hour < 7)
{
  $es_welcome = "Buenas Madrugadas";
  $en_welcome = "Good Dawn";
}




















?>
