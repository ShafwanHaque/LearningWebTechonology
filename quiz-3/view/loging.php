<?php
session_start();

require_once('../model/userModel.php');
?>
<html>
<head>
    <title>Login</title>
</head>

<body>
    <h2 align = "center">LOGIN PANEL</h2>
    <form method = "post" action = "loginProcess.php">
        <table align = "center" border = 1> 
            <tr>
                <td>
                    USERNAME
                </td>
                <td>
                    <input type="text"  name = "username" >
                </td>
            </tr>
            <tr>
                <td>
                    PASSWORD
                </td>
                <td>
                    <input type="password"  name ="password">
                </td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <input type="checkBox" name = "rememberMe" value=""/> Remember Me
                </td>
            </tr>
            <tr>
                <td></td>
                <td align = "center">
                    <input type="submit" name = "submit" value = "Login">
                </td>
            </tr>
    </table>
</form>
</body>
</html>