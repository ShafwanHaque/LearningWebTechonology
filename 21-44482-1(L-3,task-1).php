<?php 
    $space=" ";

    if(isset($_POST['submit'])){

        $name = $_POST['name'];
        

        if($name == "" ){
            echo "null username";
        }
        else if($name == " "){

            echo "Contains at least two words!";
        }
        else if(preg_match("/^[a-zA_]*$/",$name)){
            echo "Name must start with letter!";   
        }
        else {
            header('location: 21-44482-1(L-3,task-2).php');
        }
    }
?>
<html>
<head>
    <title>
        Lab 2.2 Task-1
    </title>
</head>
<body>
    <div>
        <form method="post">
            <fieldset>
                <legend>Name</legend>
                name: <input type="text" name="name" value="" /> <br>  
                <hr>      
                <input type="submit" name="submit" value="Submit" />
            </fieldset>
        </form>
    </div>
</body>
</html>