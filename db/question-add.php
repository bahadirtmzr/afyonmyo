<?php
//Database connect ayarını include eder.
include "connect.php";
$db=connect();
//Anket eklemek için sorgu
try{
    //Post Edilen verileri değişkenlere atamak
    $anket_id=$_POST["anket_id"];
    $soru=$_POST["soru"];
    $tip=$_POST["tip"];
    $count=$_POST["secenek_sayisi"];
    //Soruuyu sorular tablosuna eklemek
    $query = $db->prepare("INSERT INTO question SET servey_id = ?,question=?,type=?");
    $insert = $query->execute(array($anket_id,$soru,$tip));
    //Sorunun idsini getiren sorgu
    $qu = $db->prepare("SELECT * FROM question WHERE question = :question");
    $qu->execute(array(':question'=> $soru));
    $soru_number =  $qu->fetch();
    $soru_id=$soru_number['id'];
    if(isset($_POST["values"])){
      //Soru id'si ile verilen cevap valuelerini kaydetme
      foreach ($_POST["values"] as $value) {
        $que = $db->prepare("INSERT INTO option SET question_id = ?,option = ?");
        $inser = $que->execute(array($soru_id, $value));
      }
    }

    header("refresh:1; url=../../index.php");

}
catch (PDOException $e){
    echo $e;
}
