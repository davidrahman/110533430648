<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Form Login</title>
<style type="text/css">
#apDiv1 {
	position: absolute;
	left: 280px;
	top: 115px;
	width: 530px;
	height: 324px;
	z-index: 1;
	font-size: 40px;
	font-family: Arial, Helvetica, sans-serif;
	color: #333;
	background-color: #0CF;
	text-align: center;
	border-top-width: medium;
	border-right-width: medium;
	border-bottom-width: medium;
	border-left-width: medium;
	border-top-style: solid;
	border-right-style: solid;
	border-bottom-style: solid;
	border-left-style: solid;
}
#apDiv2 {
	position: absolute;
	left: 381px;
	top: 188px;
	width: 350px;
	height: 194px;
	z-index: 2;
}
</style>
<script>
function cek(a) {
al = /^[A-Za-z]{1,}$/; //Cek validitas harus huruf
return al.test(a);
}
function validasi(){
var x=document.forms["form1"]["david"].value;
var y=document.forms["form1"]["pass"].value;
if (x==null || x=="" && y==null || y=="") //cek tidak boleh kosong
  {
  alert("Username atau Password Belum diisi");
  form1.david.focus();
  return false;
  }
if (!cek(x) || !cek(y)){ //pemanggilan fungsi cek
	alert ('Username Dan Password harus huruf!!');
	return false;
}}
</script>
</head>
<body bgcolor="#00FF99">
<div id="apDiv1"><label>LOGIN</label>
  <hr width="350">
</div>
<div id="apDiv2"><form id="form1" name="form1" method="post" action="validasi.php" onsubmit="return validasi ()">
  <label>Username</label>
<br><input type="text" name="david" id="david" />
<br>
<label>Password</label><br><input name="pass" type="password" />
<label for="david"></label>
<br><br><input name="submit" type="submit" id="Masuk" title="Masuk" value="Masuk" />
</form>
</div>
</body>
</html>