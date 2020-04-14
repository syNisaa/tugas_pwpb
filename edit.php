<?php
require 'koneksi.php';
$id = $_GET['id'];

$hasil = $dbh->query("SELECT * FROM `crud` WHERE `id`=$id");

// $nama = ['nama_barang'];
// $harga = ['harga_barang'];
// $stok = ['stok_barang'];
// $spes = ['spesifikasi'];
    
    foreach($hasil as $data){
        
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Insert Barang</title>
</head>

    <style>
        body{
            background-image: url('img/bg2.jpg');
            background-size: cover;
            overflow:hidden;
        }

        .back{
            margin-left : 95%
        }
    </style>

<body>
    
    <div class="container">
        <h1 class='text-center'>Edit Data Barang</h1>
            <div class="back">
                <a href="review.php"><input type='submit' class='btn btn-primary mt-4' name='submit' value = "Back"></a>
            </div>
            <form action="prosesedit.php" method ='POST'>
            <div class="form-grup">

                <label class='font-weight-bold'>Id</label>
                <input type="text" class='form-control' name='id' value = <?php echo $data['id'];?> >

                <label class='font-weight-bold'>Nama Barang</label>
                <input type="text" class='form-control' name='namabarang' value = <?php echo $data['nama_barang'];?> >

                <label  class='font-weight-bold'>Harga Barang</label>
                <input type="text" class='form-control' name='hargabarang'  value = <?php echo $data['harga_barang'];?> >

                <label class='font-wenaight-bold'>Stok Barang</label>
                <input type="text" class='form-control' name='stokbarang'  value = <?php echo $data['stok_barang'];?>>
                
                <label class='font-weight-bold'>Spesifikasi</label>
                <input type="text" class='form-control' name='spesbarang'  value=<?php echo $data['spesifikasi'];?>>
            </div>

            <input type='submit' class='btn btn-primary mt-4' name='submit' value = "Simpan">

            </form>
    <?php } ?>
    </div>
    

</body>
</html>