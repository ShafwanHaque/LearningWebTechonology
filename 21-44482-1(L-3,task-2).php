<?php 
    
    if(isset($_POST['submit'])){

        $email = $_POST['email'];
        

        if($email == "" ){
            echo "null email";
        }
        else if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
            echo"Invalid email format";
        }
        else {
            header('location: 21-44482-1(L-3,task-3).php');
        }
    }
?>
<html>
<head>
    <title>
        Lab 3 Task-1
    </title>
</head>
<body>
    <div>
        <form method="post">
            <fieldset>
                <legend>Email</legend>
                email: <input type="text" name="email" value="" /> <br>  
                <hr>      
                <input type="submit" name="submit" value="Submit" />
            </fieldset>
        </form>
    </div>
</body>
</html>