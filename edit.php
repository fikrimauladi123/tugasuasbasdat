<?php
include("koneksi.php");
// ambil data di URL
$npm = $_GET["npm"];
// query data mahasiswa berdasarkan npm
$mhs = mysqli_query($conn,"SELECT * FROM mhs WHERE npm = '$npm'");
$result = mysqli_fetch_assoc($mhs);
?>
<!DOCTYPE html>
<html>
<head>
 <title>Tambah data mahasiswa</title>
</head>
<body>
 <h1>Edit data mahasiswa</h1>
 <form name="form1" action="update.php" method="post">
 <table>
 <tr>
 <td>NPM</td>
 <td><input type="text" name="npm" method="post" size="12" required="" 
value="<?php echo $result["npm"]; ?>"></td>
 </tr>
 <tr>
 <td>Nama</td>
 <td><input type="text" name="nama" method="post" size="30" required="" 
value="<?php echo $result["nama"]; ?>"></td>
 </tr>
 <tr>
 <td>Email</td>
 <td><input type="email" name="email" method="post" size="20" required="" 
value="<?php echo $result["email"]; ?>"></td>
 </tr>
 <tr>
 <td>Alamat</td>
 <td><input type="text" name="alamat" method="post" required="" 
value="<?php echo $result["alamat"]; ?>"></td>
 </tr>
 <tr>
 <td>Jurusan</td>
 <td><input type="text" name="jurusan" method="post" size="20" required="" 
value="<?php echo $result["jurusan"];?>"></td>
 </tr>
 <tr>
 <td>Fakultas</td>
 <td><input type="text" name="fakultas" method="post" size="30" required="" 
value="<?php echo $result["fakultas"];?>"></td>
 </tr>
 <tr>
<td>Agama</td>
 <td><input type="text" name="agama" method="post" size="10" required="" 
value="<?php echo $result["agama"];?>"></td>
 </tr>
 <tr>
 <td>No Telepon</td>
 <td><input type="text" name="no_tlp" method="post" size="15" required="" 
value="<?php echo $result["no_tlp"];?>"></td>
 </tr>
 <tr>
 <td><button type="submit" name="submit">Simpan</button></td>
 </tr>
 <td><a href="index.php">Kembali</a></td>
 </table> 
 </form>
</body>
</html>