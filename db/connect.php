<?php

//Veritababına bağlanmak için gereken fonksiyon
//Database ismini dbname= olan kısıma
//Database username'ini ilk virgülden sonraki "kısıma"
//Database password'ini de usernameden sonraki "kısıma"
//Ekleyebilirsiniz.

function connect(){
    try{
        $db = new PDO('mysql:host=localhost;dbname=survey;charset=utf8', "root", "010203");
        //echo "Baglanti Hazir!";
    }
    catch (PDOException $e){
        echo $e;
    }
  return $db;
}
