<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<style>
input[type=text], select {
    width: 20%;
    padding: 8px 14px;
    margin: 6px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}
input[type=date], select {
    width: 20%;
    padding: 8px 14px;
    margin: 6px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}



input[type=submit] {
    width: 10%;
    background-color: #422DBD;
    color: white;
    padding: 12px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}
</style>

<body bgcolor="#f1f1f1">
<?php
$baglan=@mysql_connect("localhost","root","") or die("veritabanı bağlantısı sağlanılamadı");
$sec=@mysql_select_db("dokuman_sistemi");
?>
<div align="center">

<form action="ekle.php" method="post">

<br/><label>DOSYA NUMARASI:</label><br />
<input type="text" name="dosya_id" /><br />

<label>DOSYA TÜRÜ:</label><br />
<select name="dosya_tur">
	
	<option>Bireysel</option>

	<option>Ticari</option>

</select> <br />

<label>DOSYA YERİ:</label><br />
<input type="text" name="dosya_yeri" /><br />

<label>DOSYA AÇILIŞ TARİHİ:</label><br />
<input type="date" name="dosya_acilis_tarihi" /><br />

<label>MÜŞTERİ NUMARASI:</label><br />
<input type="text" name="musteri_id" /><br />

<label>MÜŞTERİ ADI:</label><br />
<input type="text" name="musteri_ad" /><br />

<label>MÜŞTERİ SOYADI:</label><br />
<input type="text" name="musteri_soyad" /><br />

<label>MÜŞTERİ KİMLİK NO:</label><br />
<input type="text" name="musteri_tc" /><br />

<label>MÜŞTERİ TÜRÜ:</label><br />
<select name="musteri_tur">

	<option>Bireysel</option>

	<option>Ticari</option>

</select> <br />





<input type="submit" value="EKLE" action="ekle.php" /><br />
 
</form>


</div>
</body>
</html>