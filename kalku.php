<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Tugas</title>
</head>

<body>
<form name="calculator" method="post" action="kalku.php">
<table>
	<tr>
		<td colspan="2"><div align="center">Kalkulator</div></td>
	</tr>
    <tr>
        <td>Bilangan pertama</td>
        <td><input type="text" name="bilper" /></td>
    </tr>
    <tr>
        <td>Operator</td>
        <td><select name="operator">
        <option value="*">Perkalian</option>
        <option value="/">Pembagian</option>
        <option value="%">Modulus</option>
        <option value="+">Penjumlahan</option>
        <option value="-">Pengurangan</option>
        </select>
        </td>
    </tr>
    <tr>
        <td>Bilangan Kedua</td>
        <td><input type="text" name="bilked" /></td>
    </tr>
    <tr>
        <td><input type="submit" name="proses" value="Hitung" /></td>
    </tr>
</table>
</form>
<?php
                $bilper = $_POST['bilper'];
                $operator = $_POST['operator'];
                $bilked = $_POST['bilked'];
                if($operator=='*'){
                                $hasil=$bilper*$bilked;
                                print("Hasilnya =  $hasil");
                }elseif($operator=='/'){
                                $hasil=$bilper/$bilked;
                                print("Hasilnya =  $hasil");
                }elseif($operator=='%'){
                                $hasil=$bilper%$bilked;
                                print("Hasilnya =  $hasil");
                }elseif($operator=='+'){
                                $hasil=$bilper+$bilked;
                                print("Hasilnya =  $hasil");
                }elseif($operator=='-'){
                                $hasil=$bilper-$bilked;
                                print("Hasilnya =  $hasil");
                }
?>
</body>
</html>