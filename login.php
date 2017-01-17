<?php 

require('baglan.php');
if($_POST)
{
	if(isset($_POST['email']))
		{
		$eposta=strip_tags(trim($_POST['email']));
		$sifre=strip_tags(trim($_POST['sifre']));
		$veriekleme=mysqli_query($baglan,"INSERT INTO kisiler(Kullanici_adi,Sifre) VALUES ('".$eposta."','".$sifre."')");
		header("Location: http://localhost:82/index.html");
		}
	
	}
    
?>
