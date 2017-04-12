<?php include "../db/connect.php"; $db=connect(); include "../include/header.php" ?>
      <ul class="menu">
        <li><a href="../index.php">Dashboard</a></li>
      </ul>
      <ul class="menu">
        <li>Anket</li>
        <li><a href="../survey/survey-add.php">Anket Ekle</a></li>
      </ul>
      <ul class="menu">
        <li>Soru</li>
        <li><a href="../question/question-add.php">Soru Ekle</a></li>
      </ul>
      <ul class="menu">
        <li>Cevap</li>
        <li><a href="../answer/fill-out-servey.php">Anket Doldur <span class="colorIcon red"></span></a></li>
        <li><a href="../answer/answer-view.php">Sonuçlar<span class="colorIcon orange"></span></a></li>
      </ul>
    </div>
  </div>
<div id="content">
  <div id="titleBar">
    <h2 style="font-weight:bold">Anket Doldur</h2>
    <div id="profilePic">
      <img src="" alt="">
    </div>
    <div class="options">
      <div class="username"></div>
      <hr>
      <a href="#" class="option"><i class="fa fa-wrench"></i>Ayarlar</a>
      <a href="" class="option"><i class="fa fa-suitcase"></i>Admin Panel</a>
      <a href="" class="option"><i class="fa fa-plus"></i>More Info</a>
      <a href="#" class="logout">Log out <i class="fa fa-sign-out"></i></a>
    </div>
  </div>
    <div class="anket">
      <div class="select-anket">
        <form method='post' action='fill-out-servey2.php'>
          <div class="first">
            <select id="anket_tipi" name="anket_id" required>
              <?php foreach ($db ->query('SELECT * FROM servey ') as $row){
                echo "<option value='$row[id]'>$row[name]</option>";
              }
            ?>
            </select>
            <input type="submit" class="button" class="btn btn-primary" value="Devam">
          </div>
  </div>
