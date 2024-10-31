<?php
//index.php
require_once 'config/connect.php';
require_once 'classes/user.php';

$database = new Database();
$db = $database->getConnection();
$user = new User($db);

if($_SERVER["REQUEST_METHOD"] == "GET") {
    if (isset($_GET["logout"])) {
        session_start();
        session_unset();
        session_destroy();
    }
}


if($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if($user->login($username, $password)) {
        header("Location: /hobi_siswa");
        exit();
    } else {
        $eror_message = "Username atau password salah!";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body class=" ">
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <h3 class="text-center">Login</h3>
                <?php if(isset($eror_message)): ?>
                    <div class="alert alert-danger"><?php echo $eror_message; ?></div>
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
                    <div class="d-flex justify-content-sm-between">
                        <button type="submit" class="btn btn-primary btn-block align-middle">Login</button> 
                        <a href="forgot.php">Forgot Password</a>
                    </div>
                    <div>
                        <a>Don't have an account?</a><a href="register.php"> register now</a>

                </form>
</body>
</html>

