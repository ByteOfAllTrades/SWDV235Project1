<?php
session_start();
$_SESSION['user'] = filter_input(INPUT_POST, 'uname');
$_SESSION['pass'] = filter_input(INPUT_POST, 'pass');
$_SESSION['eid'] = filter_input(INPUT_POST, 'eid');
try{
    require_once '..\PTHsite\database\database.php';
}
catch(PDOException $e){
    $error_message = $e->getMessage();
                echo $error_message;
                include('database_error2.php');
                exit();
}
if (isset($db)){
    include('emp.php');
}

?>
