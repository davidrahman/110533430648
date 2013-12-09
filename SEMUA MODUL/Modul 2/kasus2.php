<!DOCTYPE html 
PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" 
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"> 
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"> 
<head> 
  <title>Kasus CheckBox</title> 
</head> 
 
<body>  
  <form action="<?php $_SERVER['PHP_SELF'];?>" method="post"> 
    Tipe HP smartphone yang diinginkan : 
    <input type="checkbox" name="ph[]" value="phone1"checked=" <?PHP
	  if ($_post['smrt']=="phone1"){
		  echo 'selected="selected"';}
      ?>"
    />Sony Xperia 
 
    <input type="checkbox" name="ph[]" value="phone2" 
    />Samsung Galaxy
 
    <input type="checkbox" name="ph[]" value="phone3" 
    />Iphone <br /> 
 
    <input type="submit" value="ok" /> 
  </form> 
 
<?php 
// Ekstraksi nilai 
if (isset($_POST['ph'])) { 
  foreach ($_POST['ph'] as $key => $val) { 
    echo $val . '<br />'; 
  } 
} 
?> 
 
</body> 
</html> 