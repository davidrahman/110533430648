<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 4.0 Transitional//EN" 
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"> 
<head>
<title>Menciptakan Database</title>
</head>
<body>
	<?php
		require_once './koneksi.php';

		$db = 'myweb';

		$res = mysql query('CREATE DATABASE'. $db);
		if ($res){
		echo 'Database' . $db . 'Created';
		mysql close($res);
		} else {
		echo mysql error();
		}
	?>
</body>
</html>