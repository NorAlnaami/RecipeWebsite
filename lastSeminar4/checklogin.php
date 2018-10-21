<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
session_start();

$host="localhost"; // Host name 
        $username="TastyRecipe"; // Mysql username 
        $passwordDB="TastyRecipeWebsite"; // Mysql password 
        $db_name="myDB"; // Database name 
        
        // Connect to server and select databse.
        
        $connection= mysqli_connect($host, $username, $passwordDB);
        
        if (!$connection){
            die("Database Connection Failed" . mysqli_error($connection));
        }
        $select_db = mysqli_select_db($connection, $db_name);
        if (!$select_db){
            die("Database Selection Failed" . mysqli_error($connection));
        }

// username and password sent from form 
$userName = $_POST['myusername']; 
$password = $_POST['mypassword']; 

 $sql = $connection->prepare("SELECT username,password FROM MyUSERS WHERE username=?");
            $sql->bind_param('s', $userName);
            $sql->execute();
            
            $result = $sql->get_result();
            //need to check if the result found in the db are more than one row
            // because then it means the username and password was actually found in the DB
            $nrows = mysqli_num_rows($result);
            $row = $result->fetch_array(MYSQLI_ASSOC);

            if($nrows==1){
                $_SESSION['userName'] = $userName;
                header("location:recipes.php");
            }
            else{
                echo '<br> <br>Wrong username or password <br> Try again';
            }