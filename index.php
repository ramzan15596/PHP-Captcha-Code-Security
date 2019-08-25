<?php
session_start();
if(isset($_POST['submit'])){
	$code = $_SESSION['code'];
	if($_POST['code'] == $code){
		echo "Matched";
	}else{
		echo "Mismatch";
	}
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Captcha</title>
</head>
<body>
	<form method="post">
		<p><input type="text" name="code" autocomplete="off"></p>
		<p><img src="image.php"></p>
		<p><input type="submit" name="submit" value="Send"></p>
	</form>
	
</body>
</html>