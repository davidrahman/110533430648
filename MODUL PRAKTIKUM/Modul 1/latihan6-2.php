<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
 <html xmlns="http://www.w3.org/1999/xhtml1" xml:lang="en"lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Argument Fungsi dan Prosedur</title>
</head>

<body>
<?php
/* 
  mencetak string
  $teks nilai string
  $bold adalah argumen opsional
*/
function print_text($teks, $blod=true){
	echo $blod ? '<b>' .$teks. '</b>' : $teks; }
print_text ('Indonesiaku');
//mencetak dengan huruf tebal
print_text ('Indonesiaku', false);
//mencetak dengan huruf reguler
?>  
</body>
</html>