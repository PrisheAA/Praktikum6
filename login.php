<?php
 session_start();
 include 'connect.php';

 $nis = $_POST['nis'];
 $password = $_POST['password'];

 if ($nis == "" || $password == "")
 {
   header("location: formlogin.php");
 }
 else
 {

 }
   $query = "SELECT * FROM tb_siswa WHERE nis = '$nis' AND password = '$password'";
   $result = mysqli_query($connect, $query);

   $num = mysqli_num_rows($result);

   if ($num == 1)
   {
     echo "<script>
     alert('Login anda berhasil')</script>";
     echo "<h1><a href='add_data.php'>Tambah data</a></h>";
     echo "<h1><a href='logout.php'>Log Out</a></h>";
     $_SESSION['nis'] = $nis;
   }
   else
   {
      echo "<script>
      alert('Login gagal')</script>";
      include 'formlogin.php';
   }

 ?>
