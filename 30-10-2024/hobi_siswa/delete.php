<?php
include_once 'connect.php';
include_once 'hobi.php';
$database = new Database();
$db = $database->getConnection();
$hobi = new hobi($db);
$hobi->id = $_GET["ID"];
$hasil = $hobi->delete();
if ($hasil) header("Location: ./");
else echo "<h1>Data Gagal Dihapus<h1><br> - <a href=\"./\">Back Home</a>";
?>

- delete_action.php
<?php
include_once 'connect.php';
include_once 'hobi.php';
$database = new Database();
$db = $database->getConnection();
$hobi = new hobi($db);
$hobi->id = $_GET['ID'];
$hasil = $hobi->delete();
if($hasil) {
header('location: ./');
} else {
echo "<h1>";
echo "data tidak bisa di hapus.";
echo "</h1>";
echo " - <a href=\"./\">Back Home</a>";
}
?>