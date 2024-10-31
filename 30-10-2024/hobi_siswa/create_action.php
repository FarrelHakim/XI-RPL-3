<?php
include_once 'connect.php';
include_once 'hobi.php';

$database = new Database();
$db = $database->getConnection();

$hobi = new hobi($db);
$hobi->nama = $_POST['nama'];
$hobi->kelas = $_POST['kelas'];
$hobi->hobi_siswa = $_POST['hobi'];
$hobi->profile = $_POST['profile'];

$hasil = $hobi->create();

if($hasil) {
    echo "Data berhasil ditambahkan.";
} else {
    echo "Gagal menambahkan data.";
}
echo "<BR> <a href='./'>Back</a>"
?>