<?php
include('koneksi.php');

// print_r($_POST);

$id = $_POST['id'];
$nama = $_POST['nama'];
$jml = $_POST['jml'];
$hr = $_POST['hr'];
$st = $_POST['satuan'];
$tgl = $_POST['tgl'];

$total = $_POST['jml']*$_POST['hr'];

$result = $dbh->exec("INSERT INTO `barang` (`id`, `nama_barang`, `jumlah_barang`, `harga_barang`,`satuan`, `tgl_beli`) VALUES (NULL, '$nama', '$jml', '$hr','$st', '$tgl')");


echo $result;

echo"<table>";
 echo "<tr><td>".$total."</td></tr>";
echo"</table>";

if($result == true){
    header("location:file.php");
    echo "alert($total)";
}else{
    echo"gagal";
}
?>
