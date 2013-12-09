<html>
<head><title>Nyoba Website</title>
<style type="text/css">
#sa {
	background-color: #0FC;
	text-align: center;
	height: 200px;
	width: 200px;
	border: 3px solid #CCC;
	position: relative;
}
#apDiv1 {
	position: absolute;
	left: 760px;
	top: 53px;
	width: 233px;
	height: 135px;
	z-index: 1;
}
#apDiv2 {
	position: absolute;
	left: 916px;
	top: 130px;
	width: 212px;
	height: 90px;
	z-index: 1;
}
</style>
</head>
<body bgcolor="#00FF99">
<?php
session_start();
$david=$_POST['david'];
$pass=$_POST['pass'];
?>
<div id="apDiv2"><label style="font-size:24px"> Nama Pengguna :</label>
<div style=" color:#06F; font-size:24px"><?php echo ($david);?></div></div>
</body>
</html>
