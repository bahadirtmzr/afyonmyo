<?php 
	
	$nereye=($_POST['nereye']);
	$yetiskin=($_POST['yetiskin']);
	$cocuk=($_POST['cocuk']);
	$bebek=($_POST['bebek']);
	$business=isset($_POST['business']);
	$saat=($_POST['saat']);
	$bagaj_kg=($_POST['bagaj_kg']);
	$ucret=0;

	if($nereye=='istnbl')
		{$ucret=110;}

	elseif($nereye=='dusseldorf')
		{$ucret=350;}

	else
		{$ucret=145;}

		$ucret=$ucret * $yetiskin;
		

		if($cocuk > 0)
		{
			$ucret = $ucret + ($cocuk * 30);
		}

		if($bebek > 2)
		{
			$ucret = $ucret + ($bebek * 20);
		}

		if($business=='checked')
		{
			$ucret = $ucret +($yetiskin * 50);
		}
		
		if($saat=='21.00')
		{
			$ucret= $ucret - ($ucret * 0.2 );
		}
		if($bagaj_kg > ($yetiskin * 20 + $cocuk * 10 + $bebek * 10))
		{
			$ucret = $ucret + ($bagaj_kg - ($yetiskin * 20 + $cocuk * 10 + $bebek * 10)) * 5;
		}

			echo "toplam ucret : $ucret TL";
		echo "<a href='bilet3.php'>Check-IN islemi icin tiklayiniz.</a>";
?>