<?php
session_start();
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


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
        $sql=$connection->prepare("SELECT id, name,comment FROM commentsJS WHERE id=?");
        $sql->bind_param('s',$_POST['id']);
        $sql->execute();
        //$result= mysqli_query($connection, $sql) or die(mysqli_error($connection));
        $result = $sql->get_result();
        
        $row = $result->fetch_array(MYSQLI_ASSOC);

        //if the person logged in is the user who commented then delete comment
        if($_SESSION['userName'] == $row['name']){
            $query =$connection->prepare( "DELETE FROM commentsJS WHERE id=?");
            $query->bind_param('s',$_POST['id']);
            if($query->execute()){
                echo 'success';
            }
            else {
                echo 'Something went wrong, try again';
            }
        }