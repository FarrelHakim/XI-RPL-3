<?php
//register.php
require_once './config/connect.php';
require_once './classes/user.php';

$database = new Database();
$db = $database->getConnection();
$user = new User($db);

if($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if($user->register($username, $password)) {
        $sucsess_message = "Registrasi berhasil, Silahkan login.";
    } else {
        $error_message = "Registrasi gagal, Username mungkin sudah digunakan.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <h3 class="text-center">Registration</h3>
                <?php if(isset($error_message)): ?>
                    <div class="alert alert-danger"><?php echo $error_message; ?></div>
                <?php endif; ?>
                <?php if(isset($sucsess_message)): ?>
                    <div class="alert alert-success"><?php echo $sucsess_message; ?></div>
                <?php endif; ?>
                <form action="" method="POST" class="">
                    <div class="form-group">
                        <label>Username</label>
                        <input type="text" name="username" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" name="password" class="form-control" required>
                    </div><br>
                    <div>
                        <button type="submit" class="btn btn-primary btn-block align-middle">Register</button>
                    </div>
                    <div>
                        <a>Already have an account?</a><a href="dashboard.php"> sign in now</a>

                </form>
</body>
</html>
