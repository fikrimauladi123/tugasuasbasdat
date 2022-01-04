<?php
$conn = mysqli_connect('localhost','root','','mahasiswa');
if(isset($conn)){
 echo "Database Berhasil Terkoneksi";
} else {
 echo "Koneksi Gagal";
} 
?>
