<?php 
    session_start();    
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php
        if(isset($_POST["submit"])) {
            $_SESSION['name'] = $_POST['fullname'];
            $_SESSION['age'] = $_POST['age'];
            $_SESSION['citizen'] = $_POST['citizenship'];
            $_SESSION['grade'] = $_POST['gradeLevel'];
            $_SESSION['sex'] = $_POST['sex'];
            $_SESSION['address'] = $_POST['address'];
            $_SESSION['email'] = $_POST['email'];
            $_SESSION['password'] = $_POST['password'];
    }
    ?>

    <center>

    <h1>REGISTER</h1>
    <form method="post">

        <input type="text" name="fullname" placeholder="Enter your full name:">

        <br>
        <br>

        <input type="number" name="age" placeholder="Enter your age:">
        
        <br>
        <br>
        
        <select name="citizenship">
            <option value="">Enter your citizenship</option>
            <option value="pinoy">Filipino</option>
            <option value="cano">American</option>
            <option value="hapon">Japanese</option>
            <option value="indiano">Indian</option>
            <option value="chino">Chinese</option>
        </select>

        <br>
        <br>

        <select name="gradeLevel">
            <option value="">Enter your Grade Level</option>
            <option value="11">Grade 11</option>
            <option value="12">Grade 12</option>
        </select>

        <br>
        <br>

        <select name="sex">
            <option value="">Gender</option>
            <option value="male">Male</option>
            <option value="female">Female</option>
        </select>

        <br>
        <br>

        <input type="text" name="address" placeholder="Enter your address:">

        <br>
        <br>

        <input type="email" name="email" placeholder="Enter your email:">
        
        <br>
        <br>

        <input type="password" name="password" placeholder="Enter your passord:">

        <br>
        <br>
        <input type="submit" name="submit">
    </form>

    <?php
        if(isset($_POST['login-submit'])) {
            $login_email = $_POST['login-email'];
            $login_password = $_POST['login-password'];

            $stored_email = $_SESSION['email'];
            $stored_password = $_SESSION['password'];

            if($stored_email === $stored_email && $login_password === $stored_password){
                $_remarks = 'Login Successfully!';
            }
            else {
                $_remarks = 'Login Failed!';
            }
    
    
        }
    ?>
    <hr>

    <h1>LOGIN</h1>
    <br>
    <form method="post">
        <input type="email" name="login-email" placeholder="Enter your email:">
        
        <br>
        <br>

        <input type="password" name="login-password" placeholder="Enter your password:">

        <br>
        <br>

        <input type="submit" name="login-submit">
    </form>

    <br>
    <br>

    <h2>
        <?= $_remarks ?>
    </h2>
    
    </center>
</body>
</html>