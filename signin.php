<?php
require('baglan.php');

if($_POST){
if(isset ($_POST['email'])){
$eposta=strip_tags(trim($_POST['email']));
$sifre=strip_tags(trim($_POST['sifre']));
$sorgula=mysqli_query($baglan,"SELECT * FROM kisiler WHERE Kullanici_adi='".$eposta."' AND Sifre='".$sifre."'");
if(mysqli_num_rows($sorgula)>0){
	while($row=mysqli_fetch_assoc($sorgula)) {
		echo "HOSGELDİNİZ: ".$row['Kullanici_adi'];
		header("Location: http://localhost:82/index.html");
	}
	
}else{
	echo "Giriş Başarısız!";
}

}
}
?>