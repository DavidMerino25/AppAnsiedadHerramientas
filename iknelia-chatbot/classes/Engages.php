<?php
// You should require_once the conexion on each file that contains a class and their methods
require_once("conexion.php");

// Class that contains the Methods

Class Engages {

// The methods below are just examples of INSERT, SELECT and UPDATE
// These methods are samples with PDO structure, If you follow it you dont have to worry about SQL inyection.
  static public function createEngage($sesionId){

    $sql =  "INSERT INTO `Engagements` (engagement_sessionId) VALUES (:engagement_sessionId)";
    $stmt = Connection::connect()->prepare($sql);
    $stmt->bindParam(":engagement_sessionId",$sesionId, PDO::PARAM_STR);
    return $stmt->execute();
    $stmt->close();
    $stmt =  null;
  }

  static public function getInterestedArea($user_id){
    $sql =  "SELECT * FROM `Engagements` WHERE `engagement_userId` LIKE :engagement_userId AND engagement_pathId > 0 ORDER BY 'engagement_createdAt' DESC";
    $stmt = Connection::connect()->prepare($sql);
    $stmt->bindParam(":engagement_userId",$user_id, PDO::PARAM_STR);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
    $stmt->close();
    $stmt =  null;
  }


  static public function updateEngage($session_id,$user_id,$path_id,$status){

    $sql =  "UPDATE `Engagements` SET engagement_userId = :engagement_userId, engagement_pathId = :engagement_pathId, engagement_statusId = :engagement_statusId WHERE engagement_sessionId = :engagement_sessionId";
    $stmt = Connection::connect()->prepare($sql);
    $stmt->bindParam(":engagement_sessionId",$session_id, PDO::PARAM_STR);
    $stmt->bindParam(":engagement_userId",$user_id, PDO::PARAM_STR);
    $stmt->bindParam(":engagement_pathId",$path_id, PDO::PARAM_STR);
    $stmt->bindParam(":engagement_statusId",$status, PDO::PARAM_STR);

    return $stmt->execute();
    $stmt->close();
    $stmt =  null;
  }


}

?>
