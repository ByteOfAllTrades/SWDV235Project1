<?php
/*database access object*/
//    echo '<script language="javascript">';
//    echo 'var username = prompt("Please enter credentials");';
//    echo 'var password = prompt("Please enter password");';
//    echo '</script>';
$user = $_SESSION['user'];
$pass = $_SESSION['pass'];
    $dsn = 'mysql:host=localhost;dbname=pthport';
    $username = $user;
    $password = $pass;
    if ($username == 'root'){
        if ($password == 'Pa$$w0rd'){
            try {
                $db = new PDO($dsn, $username, $password);
            } catch (PDOException $e) {
                $error_message = $e->getMessage();
                include('database_error2.php');
                exit();
            }
        }
        else{
            include('database_error.php');
        }
    }
    else{
        include('database_error.php');
    }
    
    
?>