<html>	
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
	
	<body>
	<?php
		echo "<form method='post' action='bilet2.php'>
			<table bgcolor='yellow' border='1' align='center'>
				
				<tr bgcolor='black'>
					<td colspan='2'><h2><font color='white'>Online - Rezervasyon</h2></font></td>
					
				</tr>
				<tr>
					<td>Ad</td>
					<td><input type='text' name='adi'></td>
				</tr>
				<tr>
					<td>Soyad</td>
					<td><input type='text' name='soyadi'></td>
				</tr>
				<tr>
					<td>Telefon</td>
					<td><input type='text' name='tel_no'></td>
				</tr>
				<tr>
					<td>Nereden</td>
					<td>
						
						<select>
							
							<option>Afyon</option>
							
						</select>
					
					</td>
				</tr>
				<tr>
					<td>Nereye</td>
					<td>
						
						<select name='nereye'>
							
							<option value='dusseldorf'>dusseldorf</option>
							<option value='istnbl'>istanbul</option>
							<option value='trbzn'>Trabzon</option>
							
						</select>
						
					</td>
				</tr>
				<tr>
					<td>Gidi� Tarihi</td>
					<td>
						
						<select>
							
							<option>1</option>
							<option>2</option>
							<option>3</option>
							<option>4</option>
							<option>5</option>
							<option>6</option>
							<option>7</option>
							<option>8</option>
							<option>9</option>
							<option>10</option>
						</select>
						<select>
							
							<option>Ocak</option>
							<option>�ubat</option>
							<option>Mart</option>
							<option>Nisan</option>
							<option>May�s</option>
							<option>Haziran</option>
						</select>
						<select>
							
							<option>2016</option>
							<option>2017</option>
							<option>2018</option>
							<option>2019</option>
						</select>
					
					</td>
				</tr>
				<tr>
					<td>Saat</td>
					<td>
						<select name='saat'>
							
							<option>11.30</option>
							<option>17.00</option>
							<option>21.00</option>
							
						</select>
					</td>
				</tr>
				<tr>
					<td>Yolcular</td>
					<td rowspan='3'>Bagaj<input type='text' name='bagaj_kg'>Kilogram</td>
				</tr>
				<tr>
					<td>Yeti�kin �ocuk / Bebek			
					
					</td>
					
				</tr>
				<tr>
					<td>
					
						<select name='yetiskin'>
							
							<option >1</option>
							<option >2</option>
							<option >3</option>
							<option >4</option>
							<option >5</option>
							
						</select>
						<select name='cocuk'>
							
							<option>0</option>
							<option>1</option>
							<option>2</option>
							<option>3</option>
							<option>4</option>
							<option>5</option>
						</select>
						<select name='bebek'>
							
							<option>0</option>
							<option>1</option>
							<option>2</option>
							<option>3</option>
							<option>4</option>
							<option>5</option>
						</select>
					</td>
				</tr>
				<tr>
					<td>Sinif</td>
					<td><input type='radio' name='normal'>Normal <p>
					<input type='radio' name='business'>Business</td>
				</tr>
				<tr>
					<td colspan='2' align='center'><input type='submit' value='Gonder'></td>
				</tr>
				
			</table>
		
		</form>";
		?>
	</body>

</html>