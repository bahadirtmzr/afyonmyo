<?php
include "connect.php";
$db=connect();
try{
    if($_POST["question_id"]){
      $id=$_POST["question_id"];
      $answer=$_POST['answers'];
      for ($i = 0; $i < count($id); $i++) {
        $query = $db->prepare("INSERT INTO answer SET question_id = ?,value=?");
        $insert = $query->execute(array($id[$i],$answer[$i]));
        header("refresh:1; url=../index.php");
      }
    }
}
catch (PDOException $e){
    echo $e;
}
