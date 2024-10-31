<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Hobi Siswa</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap');

        body {
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(135deg, #e0eafc, #cfdef3);
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        h1 {
            text-align: center;
            color: #34495e;
            font-size: 2rem;
            text-transform: uppercase;
            letter-spacing: 1px;
            margin-bottom: 20px;
        }

        form {
            background-color: #fff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            width: 300px;
        }

        label {
            font-size: 1rem;
            color: #333;
            display: block;
            margin-bottom: 10px;
        }

        input[type="text"], input[type="submit"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border-radius: 5px;
            border: 1px solid #ddd;
            font-size: 1rem;
        }

        input[type="text"]:focus {
            border-color: #2980b9;
            outline: none;
        }

        input[type="submit"] {
            background-color: #2980b9;
            color: white;
            font-size: 1rem;
            cursor: pointer;
            border: none;
            transition: background-color 0.3s ease;
        }

        input[type="submit"]:hover {
            background-color: #1f5a80;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group:last-of-type {
            margin-bottom: 0;
        }

    </style>
</head>
<body>
    <form action="create_action.php" method="post">
        <h1>Tambah Data Hobi Siswa</h1>
        <div class="form-group">
            <label for="nama">Nama</label>
            <input type="text" name="nama" id="nama" placeholder="Masukkan nama">
        </div>
        <div class="form-group">
            <label for="posisi">Kelas</label>
            <input type="text" name="kelas" id="kelas" placeholder="Masukkan kelas">
        </div>
        <div class="form-group">
            <label for="hobi">Hobi</label>
            <input type="text" name="hobi" id="hobi" placeholder="Masukkan hobi">
        </div>
        <div class="form-group">
            <label for="profile">Profile URL</label>
            <input type="text" name="profile" id="profile" placeholder="Masukkan profile url">
        </div>
        <input type="submit" value="Simpan">
    </form>
</body>
</html>
