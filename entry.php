<?php
include("koneksi.php");
$npm = $_POST["npm"];
$nama = $_POST["nama"];
$email = $_POST["email"];
$alamat = $_POST["alamat"];
$jurusan = $_POST["jurusan"];
$fakultas = $_POST["fakultas"];
$agama = $_POST["agama"];
$no_tlp = $_POST["no_tlp"];
$query = mysqli_query($conn,"INSERT INTO mhs VALUES 
('$npm','$nama','$email','$alamat','$jurusan', '$fakultas','$agama','$no_tlp')");
echo " <script>
 alert('data berhasil ditambah!');
 document.location.href = 'index.php';
 </script>
 ";
?>
