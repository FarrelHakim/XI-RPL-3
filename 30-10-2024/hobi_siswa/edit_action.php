<?php
include_once 'connect.php';
include_once 'hobi.php';

$database = new Database();
$db = $database->getConnection();
$hobi = new hobi($db);
$hobi->id = $_POST['id'];
$hobi->nama = $_POST['nama'];
$hobi->kelas = $_POST['kelas'];
$hobi->hobi_siswa = $_POST['hobi'];
$hobi->profile = $_POST['profile'];
$hasil = $hobi->edit();
echo "<h1>";
if($hasil) {
echo "data berhasil di edit.";
} else {
echo "data tidak bisa di edit.";
}
echo "</h1>";
echo " - <a href=\"./\">Back Home</a>";
?>