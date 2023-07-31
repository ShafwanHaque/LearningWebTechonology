<?php
    require_once('db.php');
    function login($username, $password){
        $con = dbConnection();
        $sql = "select * from user where username='{$username}' and password='{$password}'";
        $result = mysqli_query($con, $sql);
        $count = mysqli_num_rows($result);
        if($count == 1){
            return true;
        }else{
            return false;
        }
    }

    function getUser($username){
        $con = dbConnection();
        $sql = "SELECT * from user where username='{$username}';";
        
        if($result = mysqli_query($con, $sql)){
            return mysqli_fetch_assoc($result);
        }
        return false;
    }

?>