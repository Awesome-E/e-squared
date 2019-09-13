<?php
include('core/inc/init.inc.php');

if (isset($_POST['expiry'], $_FILES['file'])) {
	$file_name	= mysql_reasl_espace_string($_FILES['file']['name']);
	$expiry 	= time() + ((int)$_POST['expiry'] * 60);
	
	mysql_query("INSERT INTO `files (`file_name`, `file_expiry`) VALUES ('{$file_name}', {$expity})");
}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>Upload a File</title>
	</head>
	<body>
		<form action="" method="post" enctype="multipart/form-data">
			<input type="text" name="expiry"/><br/>
			<input type="file" name="file"/><br/>
			<input type="submit" value="upload"/><br/>
		</form>
	</body>
</html>
