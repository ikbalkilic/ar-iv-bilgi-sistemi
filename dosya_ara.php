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

<form action="giris.php" method="post">

<br /><br /><br /><br /><br /><br/><label>DOSYA NUMARASI:</label><br />
<input type="text" name="dosya_id" /><br />

<label>MÜŞTERİ NUMARASI:</label><br />
<input type="text" name="musteri_id" /><br />



<input type="submit" value="ARA" /><br />
 
</form>


</div>
</body>
</html>