<!DOCTYPE html>
<html>
<head>
	<title>Form Registrasi</title>
</head>
<body>
<form action="koneksi.php" method="POST">
<table>
<tr>
<td>
NIM
</td>
<td>
:
</td>
<td>
<input type="text" name="nim" required="">
</td>
</tr>

<tr>
<td>
Nama
</td>
<td>
:
</td>
<td>
<input type="text" name="nama" required="">
</td>
</tr>

<tr>
<td>
Email
</td>
<td>
:
</td>
<td>
<input type="email" name="email" placeholder="@gmail.com" required="">
</td>
</tr>
<tr>
<td>
<input type="submit" name="submit" value="input">
</td>
</tr>
</body>
</html>

<?php
 if(isset($_POST['submit'])){
  $nim=$_POST['nim'];
  $nama=$_POST['nama'];
  $email=$_POST['email'];
  
  $error=array();
  if(strlen($_POST['nim']) >= 10){
   $error['nim']=="Harus 10";
  } if(strlen($_POST['nama']) <= 25){
   $error['nama']=="Harus 25";
  } if(empty($email)){
   $error['email']=="Email harus diisi";
  }
 }
?>
