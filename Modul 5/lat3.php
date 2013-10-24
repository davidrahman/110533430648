<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 4.0 Transitional//EN" 
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"> 
<head>
<title>Akses dan Manipulasi data</title>
</head>
<body>
<?php
	require_once './koneksi.php';

	$sql = 'SELECT * FROM mahasiswa ';
	$res = mysql_query($sql);

	if ($res){
		if (mysql num rows($res)){ ?>

	<table border=1 cellspacing=1 cellpadding=5>
	<tr>
		<th>#</th>
		<th width=100>NIM</th>
		<th width=150>Nama</th>
		<th>Alamat</th>
	</tr>
<?php
	$i = 1;
	while ($row = mysql_fetch_row($res)) { ?>
<tr>
	<td>
		<?php echo $i;?>
		</td>
	<td>
		<?php echo $row[0];?>
	</td>
	<td>
		<?php echo $row[1];?>
	</td>
	<td>
		<?php echo $row[2];?>
	</td>
</tr>
<?php
$i++;
}
?>
</table>
<?php
	} else {
	echo 'Data Tidak Ditemukan';
	}
	mysql_close($res);
	}
?>
</body>
</html>