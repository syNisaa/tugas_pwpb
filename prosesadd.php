<?php

    include('koneksi.php');

    // print_r($_POST);

    $id = $_POST['id'];
    $nama = $_POST['namabarang'];
    $har = $_POST['hargabarang'];
    $st = $_POST['stokbarang'];
    $sp = $_POST['spesbarang'];

    $result = $dbh->exec("INSERT INTO `crud` (`id`, `nama_barang`, `harga_barang`, `stok_barang`, `spesifikasi`) VALUES ('$id', '$nama', '$har', '$st', '$sp')");

    echo $result;

    if($result == true){
        header("location:review.php");
    }else{
        echo"gagal";
    }
?>