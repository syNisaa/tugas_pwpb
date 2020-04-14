<?php
    include('koneksi.php');

    $id = $_POST['id'];
    $nama = $_POST['namabarang'];
    $har = $_POST['hargabarang'];
    $st = $_POST['stokbarang'];
    $sp = $_POST['spesbarang'];

  

    $query = $dbh->query("UPDATE `crud` SET `id` = '$id', `nama_barang` = '$nama', `harga_barang` = '$har', `stok_barang` = '$st', `spesifikasi` = '$sp' WHERE `crud`.`id` = '$id'");

    if($query == TRUE){
        header("location:review.php");
        // echo "yeay";
    }else{
        echo "Data GAGAl Diupdate";
    }


?>