<?php
/*another database object*/
//    echo '<script language="javascript">';
//    echo 'var username = prompt("Please enter credentials");';
//    echo 'var password = prompt("Please enter password");';
//    echo '</script>';
    $dsn = 'mysql:host=localhost;dbname=pthport';
    $username = 'root';
    $password = 'Pa$$w0rd';

    try {
        $db = new PDO($dsn, $username, $password);
    } catch (PDOException $e) {
        $error_message = $e->getMessage();
        include('database_error2.php');
        exit();
    }
?>