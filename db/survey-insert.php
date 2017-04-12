<?php
//Database connect ayarını include eder.
include "connect.php";
$db=connect();
//Anket eklemek için sorgu
try{
    $name=$_POST["name"];
    if($name!=''){
      $query = $db->prepare("INSERT INTO servey SET name = ?");
      $insert = $query->execute(array($name));
      header("refresh:1; url=../index.php");
    }
}
catch (PDOException $e){
    echo $e;
}
