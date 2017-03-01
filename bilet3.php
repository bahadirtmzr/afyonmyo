<HTML>
	<BODY>

<form method="post" action="" name='form1'>
<?php 
	
	if($Gonder)
		{
			for ($i=0;$i<60;$i++)
				{
					if(!empty($koltuk[$i]))
						{
							echo "Koltuk $i";
						}
				}
		}
			else
			{
?>

	<table border='1' width='%100' align='center'>
		
		<tr>
			<td>Check-in islemi</td>
		</tr>
		<tr>
			<td>
				<?php 
					for($i = 0 ; $i <60 ; $i++)
				{
						if($i%3==0)
						{
							echo "&emsp;";
						}
						if($i%6==0)
						{
							echo "<br>";
						}

						if($i <= 9)
							{
								echo "&nbsp;";
							}
					
				?>
				
					<input type='checkbox' name="<?php echo "koltuk[$i]"; ?>" id="<?php echo "$i";?>">
				<?php
					echo $i;
					}
				?>
			
			</td>
		</tr>
		<tr>
			<td align='center'><input type='submit' name='Gonder' value='Gonder'></td>
		</tr>
		
	</table>
	<?php 
			}
	?>
</form>

	</BODY>
<HTML>