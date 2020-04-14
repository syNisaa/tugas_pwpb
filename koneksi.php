<?php 

try {
    // buat koneksi dengan database
    $dbh = new PDO('mysql:host=localhost;dbname=jualbeli', "root", "");
  }
  catch (PDOException $e) {
    // tampilkan pesan kesalahan jika koneksi gagal
    echo "Koneksi atau query bermasalah: " . $e->getMessage() . "<br/>";
    die();
  }


?>