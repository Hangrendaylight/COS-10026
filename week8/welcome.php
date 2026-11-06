<?php

    SESSION_START();


    if (isset($_SESSION['user'])){
        include 'header.inc';
        echo "Welcome to this page, dear ".$_SESSION['user'].'</br>';
        echo "your token: ".$_SESSION['token'];
    } else {
        header ('Location:login.php');
    }

?>
<?php include 'footer.inc'; ?>