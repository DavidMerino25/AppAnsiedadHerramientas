<?php
//-----------------------------------DATES---------------------------------------------//
#Get Maxdays in a Month
$maxDays = date('t');
#Get current day
$currentDayOfMonth = date('j');
#Put Date time in quotes and in DD-MM-YYYY
function getAge($timeStamp)
{
    $timeStamp = date('Ymd', strtotime($timeStamp));
    $diff = date('Ymd') - $timeStamp;
    return substr($diff, 0, -4);
}

function getDay($date){
  $date = strtotime("$date");
return $day = date('d',$date);
}

function getFormatDate($date,$format){
  $date = strtotime("$date");
return $day = date($format,$date);
}

function addDaysWithDate($date,$days){
  $date = strtotime("+". $days." days", strtotime($date));
  return date('Y-m-d',$date);
}

function getSpanishDays($date){

  // $date = strtotime("$date");
  // $day = date('L',$date);

  $days_dias = array(
      'Monday' => 'Lunes',
      'Tuesday' => 'Martes',
      'Wednesday' => 'Miércoles',
      'Thursday' => 'Jueves',
      'Friday' => 'Viernes',
      'Saturday' => 'Sábado',
      'Sunday' => 'Domingo'
  );
  $dia = $days_dias[date('l', strtotime($date)) ];
  return $dia;
}



#Get Next Day
function getNextDays($number)
{
    return $nextDay = date('d', strtotime('now + ' . $number . 'day'));
}

#Get Next Month
function getNextMonths($number)
{
    return $nextMonth = date('m', strtotime('now + ' . $number . 'month'));
}

#Get next General Times
function getNextTimes($number)
{
    return $nextTimes = date('d-m-Y', strtotime('now + ' . $number . 'day'));
}

#Get 24 DEC
function getCompositeTime($day)
{
    $date = strtotime($day);
    return $date = date('j M ', $date);
}

#String Example $3-$2-$1 to DD-MM-YYYY
function changeDateOrder($originalDate,$order){
  return $newDate = preg_replace("/(\d+)\D+(\d+)\D+(\d+)/","$order",$originalDate);
}

function getIntegerNextDays($number){
return $day = date('j', strtotime('now + ' . $number . 'day'));
}

function getSpanishNextDays($number){
  $days_dias = array(
      'Monday' => 'Lunes',
      'Tuesday' => 'Martes',
      'Wednesday' => 'Miércoles',
      'Thursday' => 'Jueves',
      'Friday' => 'Viernes',
      'Saturday' => 'Sábado',
      'Sunday' => 'Domingo'
  );

  $month_meses = array(
      'Jan' => 'Enero',
      'Feb' => 'Febrero',
      'Mar' => 'Marzo',
      'Apr' => 'Abril',
      'May' => 'Mayo',
      'Jun' => 'Junio',
      'Jul' => 'Julio',
      'Aug' => 'Agosto',
      'Sep' => 'Septiembre',
      'Oct' => 'Octubre',
      'Nov' => 'Noviembre',
      'Dec' => 'Diciembre'
  );

  $mes = $month_meses[date('M', strtotime('now')) ];

  $dia = $days_dias[date('l', strtotime('now + ' . $number . 'day')) ];

  $date = strtotime('now + ' . $number . 'day');
  $date = date('j', $date);
  return $resultado = "$dia, $date de $mes";
}

#Get composite Time in Spanish
function getSpanishCompositeTime($day)
{

    $days_dias = array(
        'Monday' => 'Lunes',
        'Tuesday' => 'Martes',
        'Wednesday' => 'Miércoles',
        'Thursday' => 'Jueves',
        'Friday' => 'Viernes',
        'Saturday' => 'Sábado',
        'Sunday' => 'Domingo'
    );

    $month_meses = array(
        'Jan' => 'Enero',
        'Feb' => 'Febrero',
        'Mar' => 'Marzo',
        'Apr' => 'Abril',
        'May' => 'Mayo',
        'Jun' => 'Junio',
        'Jul' => 'Julio',
        'Aug' => 'Agosto',
        'Sep' => 'Septiembre',
        'Oct' => 'Octubre',
        'Nov' => 'Noviembre',
        'Dec' => 'Diciembre'
    );

    $mes = $month_meses[date('M', strtotime($day)) ];

    $dia = $days_dias[date('l', strtotime($day)) ];

    $date = strtotime($day);
    $date = date('j', $date);
    return $resultado = "$dia, $date de $mes";
}


//Esta funcion tiene un control de errores '@' en la modificacion de la variable
//Intente mucho arreglarla pero apesar que funciona nos llena el console.log
function tsToDateTime($ts){
  $dt = new DateTime;
  @$dt->modify("@ $ts");

$date =  $dt->format('Y-m-d');
$time =  $dt->format('H:i A');

$date = getSpanishCompositeTime($date);
return $date = "$date $time";
}






?>
