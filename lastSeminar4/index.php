<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<h1>Login</h1>
        <!--The $_SERVER["PHP_SELF"] is a super global variable that returns the filename of the currently executing script-->
        <form action="checklogin.php" method="post">
            Username: <input type="text" name="myusername" id="myusername" required=""><br>
            Password:<input type="text" id="mypassword" name="mypassword"required=""><br>
            <input type="submit" name="Submit" value="Login">