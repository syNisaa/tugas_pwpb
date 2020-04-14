<?php
    include ('koneksi.php');

    $id = $_GET['id'];

    $query = $dbh->query("DELETE FROM `crud` WHERE `crud`.`id` = $id");

    if($query==TRUE){
        header("location:review.php");
    }else{
        echo "Data GAGAl Dihapus";
    }

?>