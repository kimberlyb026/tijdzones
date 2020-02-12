<?php


$time = date('H:i', strtotime('+1 hour'));




if($time < 6 ){
	$img = "night.png";
	$text =" Goede Nacht!";
}
else if($time < 12 && 6 <= $time){
	$img = "morning.png";
	$text ="Goede Morgen!";
}

else if ($time < 18 && 12 <= $time){
	$img = "afternoon.png";
	$text ="Goede Middag! ";
}

else if ($time < 24 && 18 <= $time){
	$img = "evening.png";
	$text ="Goede Avond! ";
}
?>

<!DOCTYPE html>
<html lang="nl">
    <head>
    	<title></title>
    	<link rel="stylesheet" type="text/css" href="./style.css">
<link href="https://fonts.googleapis.com/css?family=Nixie+One&display=swap" rel="stylesheet">
	</head>
	<body>   
		<img src="<?php echo $img;  ?>"> 
<div class="test">
    <h1><?php echo $text;  ?></h1>
    <h1>Het is nu <?php echo $time; ?></h1>

    </div>

    </body>
</html>