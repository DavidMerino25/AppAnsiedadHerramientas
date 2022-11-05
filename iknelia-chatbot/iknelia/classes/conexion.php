<?php


Class Connection{

    static public function connect(){

        $host = "localhost";
        $db = "testDB";
        $user = "chatbotExample";
        $pass = "1234";

        $link = new PDO("mysql:host=$host;dbname=$db","$user","$pass");

        $link->exec("set names utf8");

        return $link;

      }
}

#---------------TestYourConnection---------------#
// In order to test, remove the comment code below and open this file in your browser
// Check the variables in order to get the Conection Successfull

// $conn = Connection::connect();
// if($conn){
//   echo("Conection Successfull");
// } else {
//  echo("Conection Failed");
// }

?>
