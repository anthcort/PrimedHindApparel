<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="../style/style.css" />
	<title>Buy Now</title>
</head>
<body>
<div class = "heading">
	<center>
		<img src= "../pics/logo-top.png" style="width:450px; height: 100px;">
	</center>
</div>
<br><br><br><br>

<div class="OOL" id="butt">
<?php
	$pic1 = "../pics/PrimedHindWhiteShirt.png";
	$pic1back = "../pics/PrimedHindWhiteShirtBack.png";

	$pic2 = "../pics/PrimedHindBasic.png";
	$pic2back = "../pics/PrimedHindBasicBack.png";

	$pic3 = "../pics/PrimedHindSweatshirt.png";
	$pic3back = "../pics/PrimedHindSweatshirtBack.png";

	$picnum = $_GET['pic'];
?>
	<img src=<?php if($picnum == 1){echo $pic1;}elseif($picnum == 2){echo $pic2;}else{echo $pic3;} ?> style="width:350px; height: 350px;">
</div>

<div class="OOL" id="hole">
	<img src=<?php if($picnum == 1){echo $pic1back;}elseif($picnum == 2){echo $pic2back;}else{echo $pic3back;} ?> style="width:350px; height: 350px;">

		
</div>
<br><br><br>
<div>
	<a href="../paymentPage/"><button id='buybtn'>Hey Fedor, Buy Now </a></button>
</div>

</body>
</html>