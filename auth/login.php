<?php
session_start();
include '../config/database.php';

if(isset($_POST['login'])){
    $u = $_POST['username'];
    $p = md5($_POST['password']);

    $q = mysqli_query($conn,
        "SELECT * FROM users WHERE username='$u' AND password='$p'"
    );

    if(mysqli_num_rows($q) > 0){
        $_SESSION['login'] = true;
        header("Location: ../pages/home.php");
        exit;
    } else {
        $error = "Login gagal";
    }
}
?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="../assets/css/style.css">
<title>Login</title>
</head>
<body>

<div class="login-container">
<form method="post">
<h3>Login Shopediaa</h3>
<?php if(isset($error)) echo $error; ?>
<input name="username" placeholder="Username">
<input type="password" name="password" placeholder="Password">
<button name="login">Login</button>
</form>
</div>

</body>
</html>
