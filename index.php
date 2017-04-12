<?php include "db/connect.php"; $db=connect(); include "include/header.php" ?>
    <ul class="menu">
      <li><a href="index.php">Dashboard</a></li>
    </ul>
    <ul class="menu">
      <li>Anket</li>
      <li><a href="survey/survey-add.php">Anket Ekle</a></li>
    </ul>
    <ul class="menu">
      <li>Soru</li>
      <li><a href="question/question-add.php">Soru Ekle</a></li>
    </ul>
    <ul class="menu">
      <li>Cevap</li>
      <li><a href="answer/fill-out-servey.php">Anket Doldur <span class="colorIcon red"></span></a></li>
      <li><a href="answer/answer-view.php">Sonuçlar<span class="colorIcon orange"></span></a></li>
    </ul>
  </div>
</div>
<div id="content">
  <div id="titleBar">
    <h2 style="font-weight:bold">Dashboard</h2>
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
  </div><div class="mainChart">
      <canvas id="salesData"></canvas>
      <h2>Total</h2>
      <div class="clearFix"></div>
      <div id="totalSales">
        <div class="col">
          <div id="creditSales" class="progressBar"></div>
          <h3>%0,000<?php $sth = $db->query("SELECT * FROM servey"); $count = $sth->rowCount(); echo $count ?></h3>
          <span class="progressTitle">Anket Oranı</span>
        </div>
        <div class="col">
          <div id="channelSales" class="progressBar"></div>
          <h3>%0,000<?php $sth = $db->query("SELECT * FROM question"); $count = $sth->rowCount(); echo $count ?></h3>
          <span class="progressTitle">Soru Oranı</span>
        </div>
        <div class="col">
          <div id="directSales" class="progressBar"></div>
          <h3>%0,000<?php $sth = $db->query("SELECT * FROM answer"); $count = $sth->rowCount(); echo $count ?></h3>
          <span class="progressTitle">Cevaplanma Oranı</span>
        </div>
      </div>
    <table>
      <tr>
        <th>İstatistikler</th>
        <th>Miktar</th>
      </tr>
      <tr>
        <td>Anket Sayısı</td>
        <td><?php $sth = $db->query("SELECT * FROM servey"); $count = $sth->rowCount(); echo $count ?></td>
      </tr>
      <tr>
        <td>Soru Sayısı</td>
        <td><?php $sth = $db->query("SELECT * FROM question"); $count = $sth->rowCount(); echo $count ?></td>
      </tr>
      <tr>
        <td>Cevap Sayısı</td>
        <td><?php $sth = $db->query("SELECT * FROM answer"); $count = $sth->rowCount(); echo $count ?></td>
      </tr>
    </table>
  </div>

<?php include "include/footer.php"; ?>
