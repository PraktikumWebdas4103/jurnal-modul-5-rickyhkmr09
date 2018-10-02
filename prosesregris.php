<?php

 $hostname   = "localhost";
 $username = "root";
 $pass     = "";
 $db       = "jurnal";
 $con     = new mysqli($hostname, $username, $pass, $db);
 if($con==false){
  die("koneksi gagal". $con->connect_error);
 }
  if (isset($_POST['submit'])) {
   $nim=$_POST['nim'];
   $nama=$_POST['nama'];
   $email=$_POST['email'];
 
 $sql="INSERT INTO mahasiswa(nim,nama,email) VALUES ('$nim','$nama','$email')";
   if(mysqli_query($con,$sql)){
    echo "Database sudah masuk";
   }else{
    echo "error";
   }
}
 ?>
