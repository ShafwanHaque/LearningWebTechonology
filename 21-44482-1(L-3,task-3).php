<?php 
    
    if(isset($_POST['submit'])){

        $date = $_POST['date'];
        $month = $_POST['month'];
        $year = $_POST['year'];
        

        if($date == "" || $month =="" || $year =="" ){
            echo "null date or month or year";
        }
        else if (preg_match("/^[1-31]*$/",$date)){
            echo"Invalid date!";
        }
        else if (preg_match("/^[1-12]*$/",$month)){
            echo"Invalid month!";
        }
        else if (preg_match("/^[1953-1998]*$/",$year)){
            echo"Invalid year!";
        }
        else {
            //header('location: ');
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
                <legend>DATE OF BIRTH</legend>    
                <table>    
                    <tr>
                        <th>dd</th>
                        <th></th>        
                        <th>mm</th> 
                        <th></th>       
                        <th>yyy</th>  
                    </tr>    
                    <tr>
                        <td><input type="text" name="date" value="" /></td>
                        <td>/</td>   
                        <td><input type="text" name="month" value="" /></td>
                        <td>/</td>  
                        <td><input type="text" name="year" value="" /></td>  
                    </tr> 
</table>
                <hr>      
                <input type="submit" name="submit" value="Submit" />
            </fieldset>
        </form>
    </div>
</body>
</html>