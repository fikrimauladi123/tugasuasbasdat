<?php
 include("koneksi.php");
 $mahasiswa = mysqli_query($conn,"SELECT * FROM mhs");
?>
<!DOCTYPE html>
<html>
<head>
 <title>Daftar Mahasiswa</title>
</head>
<body>
 <h1>Daftar Mahasiswa</h1>
 <table border="1 " cellspacing="0" cellpadding="10">
 <tr>
 <th>No</th>
 <th>NPM</th>
 <th>Nama</th>
 <th>Email</th>
 <th>Alamat</th>
 <th>Jurusan</th>
 <th>Fakultas</th>
 <th>Agama</th>
 <th>No Telepon</th>
 <th>Aksi</th>
 </tr>
 <?php $i = 1; ?>
 <?php while( $row = mysqli_fetch_assoc($mahasiswa)) { ?>
 <tr>
 <td><?= $i; ?></td>
 <td><?php echo $row ["npm"] ?></td>
 <td><?php echo $row ["nama"] ?></td>
 <td><?php echo $row ["email"] ?></td>
 <td><?php echo $row ["alamat"] ?></td>
 <td><?php echo $row ["jurusan"] ?></td>
 <td><?php echo $row ["fakultas"] ?></td>
 <td><?php echo $row ["agama"] ?></td>
 <td><?php echo $row ["no_tlp"] ?></td>
 <td>
 <a href="edit.php?npm=<?php echo $row["npm"];?>">Edit</a> || 
 <a href="hapus.php?npm=<?php echo $row["npm"];?>" onclick="return 
confirm('yakin akan menghapus dataa?');">Hapus</a>
 </td>
 </tr>
 <?php $i++; ?>
 <?php } ?>
 </table>
 <p align="left"><a href="tambah.php"><h3>Tambah Data</h3></a></p>
</body>
</html>