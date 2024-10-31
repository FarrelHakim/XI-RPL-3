<?php 
include './connect.php';
include './hobi.php';
$db = new Database();
$hobi = new Hobi($db->getConnection());

session_start();
if (!isset($_SESSION['username'])) {
    echo "<script>alert('Anda belum login, silahkan login terlebih dahulu.'); window.location = '../Login/dashboard.php';</script>";
    exit();
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD OOP PHP</title>
    <link rel="shortcut icon" href="https://media-cgk1-2.cdn.whatsapp.net/v/t61.24694-24/464848699_3816901108626488_8595549522696228673_n.jpg?ccb=11-4&oh=01_Q5AaIGISRZ46zNFjrd3toHtSGH464qRkF4T_VsCofn9F5Dz9&oe=672D88C4&_nc_sid=5e03e0&_nc_cat=107">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap');
        
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f3f4f6;
            color: #444;
            margin: 0;
            padding: 20px;
        }

        h1 {
            font-size: 2.2rem;
            color: #2d3436;
            text-align: center;
            text-transform: uppercase;
            letter-spacing: 1.5px;
            margin-bottom: 20px;
        }

        h3 {
            font-size: 1.4rem;
            color: #555;
            text-align: center;
            margin-bottom: 20px;
        }

        a {
            display: inline-block;
            background-color: #6c5ce7;
            color: #fff;
            padding: 10px 18px;
            text-decoration: none;
            border-radius: 4px;
            font-weight: 500;
            margin-bottom: 20px;
            transition: background-color 0.3s ease;
        }

        a:hover {
            background-color: #574b90;
        }

        .container {
            max-width: 900px;
            margin: 0 auto;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            background-color: #fff;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
        }

        th, td {
            padding: 12px 16px;
            text-align: center;
        }

        th {
            background-color: #6c5ce7;
            color: white;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        td {
            font-size: 0.95rem;
            color: #333;
        }

        tr:nth-child(even) {
            background-color: #f7f7f7;
        }

        tr:hover {
            background-color: #ececec;
            transition: background-color 0.3s ease;
        }

        .btn {
            padding: 8px 12px;
            border: none;
            border-radius: 4px;
            color: white;
            font-size: 0.85rem;
            text-transform: uppercase;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .btn-edit {
            background-color: #00b894;
        }

        .btn-delete {
            background-color: #d63031;
        }

        .btn-out {
            background-color:#d63031;
        }

        .btn-edit:hover {
            background-color: #009975;
        }

        .btn-delete:hover {
            background-color: #b82d2a;
        }
        .btn-out:hover {
            background-color: #b82d2a;
        }

        .btn-add {
            display: block;
            margin: 0 auto 20px;
            text-align: center;
        }

        .btn-out {
            display: flex;
            margin: 10px;
            width: 80px;
            text-align: center;
            position: absolute;
            right: 270px;
            top: 105px;
            color: white;
            padding: 8px 8px;
            border: none;
            border-radius: 4px;
            font-size: 0.85rem;
            text-transform: uppercase;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        @media (max-width: 768px) {
            table, th, td {
                font-size: 0.85rem;
            }

            .btn {
                font-size: 0.75rem;
                padding: 6px 10px;
            }
        }

    </style>
</head>
<body>

<div class="container">
    <h1>CRUD OOP PHP</h1>
    <h3>Data Hobi Siswa</h3>
    <button class="btn-out" onclick="if(confirm('Apakah anda yakin ingin log out?')) window.location='../Login/dashboard.php?logout';">Log Out</button> 
    <a href="./create.php" class="btn btn-add">Tambahkan Data</a>

    <table>
        <tr>
            <th>ID</th>
            <th>Profile</th>
            <th>Nama</th>
            <th>Kelas</th>
            <th>Hobi</th>
            <th colspan="2">Aksi</th>
        </tr>
        <?php
        foreach($hobi->read() as $x){
            $id = $x["ID"];
            $nama = $x["Nama"];
            $kelas = $x["Kelas"];
            $hobi_siswa = $x["Hobi"];
            
            echo "
            <tr>
            <td>" . $id . "</td>
            <td><img alt='" . $nama . "' src='" . $x["Profile"] . "' class='img-fluid' style='width: 56px; border-radius: 200px;'/></td>
                <td>" . $nama . "</td>
                <td>" . $kelas . "</td>
                <td>" . $hobi_siswa . "</td>
                <td><a href=\"./edit.php?ID=" . $id . "&Nama=" . $nama . "&Kelas=" . $kelas . "&Hobi=" . $hobi_siswa . "\" class='btn btn-edit'>Edit</a></td>
                <td><a onclick=\"if (confirm('Yakin hapus ini?')) window.location.href = './delete_action.php?ID=" . $id . "';\" class='btn btn-delete'>Delete</a></td>
            </tr>";
        }
        ?>
    </table>
</div>

</body>
</html>
