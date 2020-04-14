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
        <h1 class='text-center'>Input Data Barang</h1>
            <div class="back">
                <a href="review.php"><input type='submit' class='btn btn-primary mt-4' name='submit' value = "Back"></a>
            </div>
        <form action="prosesadd.php" method ='POST'>
            <div class="form-grup">

                <label for="namabarang" class='font-weight-bold'>Id</label>
                <input type="text" class='form-control' name='id' >

                <label for="namabarang" class='font-weight-bold'>Nama Barang</label>
                <input type="text" class='form-control' name='namabarang' >

                <label for="namabarang" class='font-weight-bold'>Harga Barang</label>
                <input type="text" class='form-control' name='hargabarang'>

                <label for="mabarang" class='font-wenaight-bold'>Stok Barang</label>
                <input type="text" class='form-control' name='stokbarang'>
                
                <label for="namabarang" class='font-weight-bold'>Spesifikasi</label>
                <input type="text" class='form-control' name='spesbarang'>
            </div>

            <input type='submit' class='btn btn-primary mt-4' name='submit' value = "Simpan">
            
        </form>
            
    </div>

</body>
</html>