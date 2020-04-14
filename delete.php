<?php
    include ('koneksi.php');

    $id = $_GET['id'];

    $query = $dbh->query("DELETE FROM `barang` WHERE `barang`.`id` =$id ");

    if($query==TRUE){
        header("location:file.php");
    }else{
        echo "Data GAGAl Dihapus";
    }

?>