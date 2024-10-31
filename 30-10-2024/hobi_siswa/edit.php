<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Edit</title>
<style>
/* Styling untuk body */
body {
font-family: Arial, sans-serif;
background-color: #f0f0f5;
margin: 0;
padding: 20px;
display: flex;
justify-content: center;
align-items: center;
height: 100vh;
}
/* Container form */
form {
background-color: #fff;
border-radius: 10px;
box-shadow: 0 0 15px rgba(0, 0, 0, 0.2);
padding: 30px;
width: 350px;
}
/* Judul */
h1 {
text-align: center;
color: #333;
margin-bottom: 40px;
width: 420px;
}
/* Style untuk label input */
label {
font-size: 16px;
color: #555;
}
/* Style untuk input field */
input[type="number"], input[type="text"] {
width: 100%;

padding: 8px;
margin: 10px 0 20px;
border: 1px solid #ccc;
border-radius: 5px;
}
/* Style untuk tombol kirim */
input[type="submit"] {
width: 100%;
background-color: #2068E4;
color: white;
padding: 10px;
border: none;
border-radius: 5px;
cursor: pointer;
font-size: 16px;
}
/* Hover efek untuk tombol */
input[type="submit"]:hover {
background-color: #0A285A;
}
</style>
</head>
<body>
<h1>Edit Data Hobi Siswa</h1>
<form action="./edit_action.php" method="POST">
Id: <input type="number" name="id" id="id" min="0" <?php $x =
$_GET["ID"];if ($x !== null) echo "value='$x'"; ?>><br>
Nama: <input type="text" name="nama" id="nama" <?php $x =
$_GET["Nama"];if ($x !== null) echo "value='$x'"; ?>><br>
Posisi: <input type="text" name="kelas" id="kelas" <?php $x =
$_GET["Kelas"];if ($x !== null) echo "value='$x'"; ?>><br>
Hobi: <input type="text" name="hobi" id="hobi" <?php $x =
$_GET["Hobi"];if ($x !== null) echo "value='$x'"; ?>><br>
Profile: <input type="text" name="profile" id="profile" <?php $x =
$_GET["Profile"] ?? "";if ($x !== null) echo "value='$x'"; ?>><br>
<input type="submit" value="Kirim">
</form>
</body>
</html>