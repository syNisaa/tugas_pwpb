
<?php
include("koneksi.php");
session_start();
if($_SERVER["REQUEST_METHOD"] == "POST")
{
$admin = $dbh->prepare('SELECT * FROM `admin` WHERE nama = :nama and password = :password');
$admin->execute(array(
                  ':nama' => $_POST['nama'],
                  'password' => $_POST['password']
                  ));
$row = $admin->fetch(PDO::FETCH_ASSOC);
 
if(empty($row['nama'])){

// echo "Your Login Name or Password is invalid";

header("location: login.php");

}else {

$_SESSION['login_user'] = $_POST['nama'];

header("location: review.php");
}
}
?>



