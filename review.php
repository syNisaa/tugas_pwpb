<?php
require 'koneksi.php';
$query = $dbh->query('SELECT * FROM `crud`');

$color ="";
$colorr;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>

    <style>
        body{
            background-image: url('img/bg2.jpg');
            background-size: cover;
            overflow:hidden;
        }
        .alert{
            background-color: red;
            color: white
        }
    </style>

<body>
    <h1 class='text-center mt-4'>Data Barang Toko</h1>
    <div class="container">
      <div class="row">

        <div class="bek" style="margin-left:1%; margin-top:-25px;"><a href="awal.php"><input type='submit' class='btn btn-primary mt-4' name='submit' value = "Back"></a></div>
        
        <a href='insert.php'style="margin-left:2%;" class='btn btn-primary mb-2' >Add Data </a>

      </div>
    
    <table class="table">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Nama barang</th>
      <th scope="col">Harga Barang</th>
      <th scope="col">Stok Barang</th>
      <th scope="col">Spesifikasi</th>
      <th> MODIFY </th>
    </tr>
  </thead>
  <tbody>

  <!-- // tampil data  -->
  <?php foreach ($query as $data_siswa){
     
      ?>

        
        <tr>
            <td><?php echo $data_siswa['id'];?></td>
            <td><?php echo $data_siswa['nama_barang'];?></td>
            <td><?php echo $data_siswa['harga_barang'];?></td>
            <td><?php echo $data_siswa['stok_barang'];
              $stok = $data_siswa['stok_barang'];
            if ($stok < 5) {
                echo "<br> Stok Menipis!";
            }
                

            ?></td>
            <td><?php echo $data_siswa['spesifikasi'];?></td>
          

            <td><a href="prosesdelete.php?id=<?php echo $data_siswa['id']; ?>">Hapus</a> |
            <a href="edit.php?id=<?php echo $data_siswa['id']; ?>">Edit</a></td>
            
        </tr>
        <?php }?>


  </tbody>
</table>

        
    </div>
    

</body>
</html>