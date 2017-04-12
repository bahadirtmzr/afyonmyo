<?php include "../db/connect.php"; $db=connect(); include "../include/header.php" ?>
      <ul class="menu">
        <li><a href="../index.php">Dashboard</a></li>
      </ul>
      <ul class="menu">
        <li>Anket</li>
        <li><a href="">Anket Ekle</a></li>
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
  <?php if(isset($_POST["anket_id"])) {?>
  <div class="survey-form">
    <form class="form-horizontal" method="POST" action="../db/answer-insert.php">
      <?php foreach ($db ->query("SELECT * FROM question where servey_id='$_POST[anket_id]'") as $row) { ?>

        <?php if($row["type"]==1) {?>
          <input type="text" name="question_id[]" value="<?=$row["id"]; ?>" hidden>
          <div class="form-group">
            <label class="col-md-4 control-label" for="radios"><?=$row["question"]; ?> ?</label>
            <div class="col-md-4">
              <select id="select" name='answers[]'required>
                <?php foreach ($db ->query("SELECT * FROM option where question_id='$row[id]'") as $row2){
                  echo "<option value='$row2[option]'>$row2[option]</option>";
                }
              ?>
              </select>
            </div>
          </div>
        <?php } ?>
        <?php if($row["type"]==2) {?>
          <div class="form-group">
            <label class="col-md-4 control-label" for="checkboxes"><?=$row["question"]; ?> ?</label>
            <div class="col-md-4">
              <?php foreach ($db ->query("SELECT * FROM option where question_id='$row[id]'") as $row2) { ?>
                <div class="checkbox">
                  <label for="checkboxes-0">
                    <input type="checkbox" name="answers[]" value="<?=$row2["option"]?>">
                    <?=$row2["option"]?>
                    <input type="text" name="question_id[]" value="<?=$row["id"]; ?>" hidden>
                  </label>
                </div>
            <?php } ?>
            </div>
          </div>
        <?php } ?>
        <?php if($row["type"]==3) { ?>
          <input type="text" name="question_id[]" value="<?=$row["id"]; ?>" hidden>
          <div class="form-group">
            <label id="name-label" class="col-md-4 control-label" for="name"><?=$row["question"]; ?></label>
            <div class="col-md-4">
              <input id="name" name="answers[]" type="text" placeholder="Enter your name" class="form-control input-md" required="">
            </div>
          </div>
        <?php } }?>
          <div class="form-group">
            <div class="col-md-4 col-md-offset-4 text-center">
          <button id="submit- button" name="submit- button" class="btn btn-primary">SUBMIT</button>
          </div>
          </div>
          </div>
    </form>
  </div>
  <?php } ?>
