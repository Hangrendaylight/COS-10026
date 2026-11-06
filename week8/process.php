<?php
    session_start();
    $username = $_POST['username'];
    $password = $_POST['password'];

    if ($username == 'admin' && $password == 'password123'){
        $_SESSION['user']=$username;
        $_SESSION['token']='belington123';
        header('Location: welcome.php');
        }else{
            echo "invalid login. <a href='login.php'>Try again</a>";
        }
?>