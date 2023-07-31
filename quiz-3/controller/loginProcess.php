<?php
    session_start();
    require_once('../model/userModel.php');

     $username = $_POST['username'];
     $password = $_POST['password'];

    $status = login($username, $password);

    if($status){

         $user = getUser($username);

         if($user['isExist'] == 'false'){
            header('location: ../view/login.php?err=falseUser');
            exit();
         }

         $_SESSION['username'] = $user['username'];
         $_SESSION['user'] = $user;

else{
        header('location: ../view/welcome.php?username='.$username);
        exit();}
     }
     else header('location: ../view/login.php?err=mismatch');

?>