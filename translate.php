

<!DOCTYPE html>
<html>
<head>
	<title>Translate</title>
</head>
<body>

	<form action="" method="post">
	    <input type="text" name="inputvalue" >
	    <input type="submit" name="Submit" >
    </form>

    <a href=""></a>


<?php
if (isset($_POST["inputvalue"])){
	$wordis = $_POST["inputvalue"];
	$singlestr=preg_replace('/\s+/', '', $wordis);

	$url = 'http://wordnetweb.princeton.edu/perl/webwn?c=9&sub=Change&o2=&o0=1&o8=1&o1=1&o7=&o5=&o9=&o6=&o3=&o4=&i=-1&h=000000000000000000000000000&s='.$singlestr;
	$content = file_get_contents($url);
	$first_step = explode( '<h3>' , $content );

	$valid = strlen($first_step[1]);
	
	if($valid == '60'){
		echo '"'.$wordis.'" is not a valid word';
	}else{
		echo '<a href="'.$url.'">'.$wordis.'</a>';
	}
}
	

?>



</body>
</html>