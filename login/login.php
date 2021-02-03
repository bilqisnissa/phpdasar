<?php
//cek apakah tombol submit sudah di klik atau blm
if(isset($_POST["submit"])){
    //cek username dan pass
    if($_POST["username"] == "admin" && $_POST["password"] == "123456"){
        //jika benar, direct(pindah) ke halaman admin
        header("Location: admin.php");
        exit;
    }else{
        $error = true;
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Login</h1>
<!-- pesan eror -->
<?php if(isset($error)):?>
    <p style="color:red; font-style:italic">username/password salah<p>
<?php endif;?>


    <form action="" method="post">
        <label for="username">Username : </label>
        <input type="text" name="username" id="username">

        <p>

        <label for="password">Password : </label>
        <input type="password" name="password" id="password">

        <p>
        <button type="submit" name="submit">Login</button>
    </form>
</body>
</html>