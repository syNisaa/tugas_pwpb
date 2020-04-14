<!DOCTYPE html>
<html lang="en">
<head>
    <title>Pembelian</title>
</head>

    <style>
        body{
            background-image: url('img/bg3.jpg');
            background-size: cover;
            overflow:hidden;
        }
    </style>

<body>
<h1 style="text-align: center">Form Pembelian Barang</h1>

<div class="container">
<form action="transaksi.php" method="post">
    <table  align="center"  border="1" cellspacing=0 cellpadding=10 class="formmstr" >
        <tr>
            <td>Id Beli</td>
            <td><span id="kode">-</span></td>
        </tr>
        <tr>
            <td >Nama Barang</td>
            <td><input style="width: 200px" type="text" name="nama"></td>
        </tr>
        <tr>
            <td>Jumlah Barang</td>
            <td><input style="width: 200px" type="number" name="jml"></td>
        </tr>
        <tr>
            <td>Harga Barang</td>
            <td><input style="width: 200px" type="text" name="hr"></td>
        </tr>
        <tr>
            <td>tanggal Beli</td>
            <td><input style="width: 200px" type="date" name="tgl"></td>
        </tr>
        <tr>
            <td><input type='submit' class='btn btn-primary mt-4' name='submit' value = "Simpan">
            </td>
        </tr>
    </table>
</form>

        <br><hr><br>

<?php
require 'koneksi.php';

$query = $dbh->query('SELECT * FROM `barang`');

?>

    <table class="table" border="1" align="center">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Nama barang</th>
      <th scope="col">Jumlah Barang</th>
      <th scope="col">Harga Barang</th>
      <th scope="col">Tanggal Beli</th>
      <th>Modify</th>
    </tr>
  </thead>
  <tbody>

  <!-- // tampil data  -->
  <?php foreach ($query as $data_siswa){
    
      ?>
        <tr>
            <td><?php echo $data_siswa['id'];?></td>
            <td><?php echo $data_siswa['nama_barang'];?></td>
            <td><?php echo $data_siswa['jumlah_barang'];?></td>
            <td><?php echo $data_siswa['harga_barang'];?></td>
            <td><?php echo $data_siswa['tgl_beli'];?></td>
            <td><a href="delete.php?id=<?php echo $data_siswa['id']; ?>">Hapus</a> 
          
        </tr>
        <?php }?>

  </tbody>
</table>

        <div class="bek" style="margin-left:1%; margin-top:-25px;"><a href="awal.php"><input type='submit' class='btn btn-primary mt-4' name='submit' value = "Back"></a></div>

    
</div>
</body>
</html>