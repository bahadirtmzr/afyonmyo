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
        <li><a href="question-add.php">Soru Ekle</a></li>
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
    <h2 style="font-weight:bold">Soru Ekle</h2>
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
    <div class="">
      <form method='post' action='../db/question-add.php/question-add.php'>
        <div class="first">
          <select id="anket_tipi" name="anket_id" required>
            <?php foreach ($db ->query('SELECT * FROM servey ') as $row){
              echo "<option value='$row[id]'>$row[name]</option>";
            }
          ?>
          </select>
          <button type="button" class="button" class="btn btn-primary">Devam</button>
        </div>
          <div class="soru" style="display:none;">
        	   <tr>
        				<td>
        				<p>Soru Tipini Seçiniz:</p>
        				<select id='options' name="tip" required>
        				      <option value=''>Soru Tipini Seçiniz</option>
        							<option value='1'>Select</option>
        							<option value='2'>Checkbox</option>
        							<option value='3'>Textbox</option>
        				</select>
        				</td>
        				<td>
        				      <p>Kaç adet?</p>
        							<input name='secenek_sayisi' type='text' id='count' placeholder='Seçenek Sayısı (Textbox için 0 giriniz)' required/>
        							<button type="button" id="secenek" name="button" class="btn btn-primary">Devam</button>
        				</td>
        			</tr>
            </div>
            <div class="soru-text" style="display:none;">
    	         <p>Sorunuzu Giriniz:</p>
    	          <input type="text" class="question" name="soru" required="required">
                <div class="cevap-view">
                </div>
                <input type="submit" value="OK">
            </div>
          </form>
	       </div>
<?php include "../include/footer.php"; ?>
