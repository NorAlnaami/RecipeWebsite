<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class diplayComment{
    public function displayCommentFun(){
        
        
        $class = new diplayComment();
        $connection = $class->checkUser();
        
        $query = $connection->prepare("SELECT username,comment FROM comments1");
        $query->execute();
        $result = $query->get_result();
        $count = mysqli_num_rows($result);
        if($count>0){
            while ($row = $result->fetch_assoc()){
                echo '<div class="commentUser">';
                echo " <br>". $row["username"]. "";
                echo '</div>';
                echo '<div class="comment">';
                echo" " . $row["comment"]. "<br>";
                echo '</div>';
                echo '<div class="deleteForm">';
                include '../View/deleteform.php';
                echo "<br> <br> <br>".'</div>';
                
            }
        }
    }
    public function checkUser(){
        $host="localhost"; // Host name 
        $username="TastyRecipe"; // Mysql username 
        $passwordDB="TastyRecipeWebsite"; // Mysql password 
        $db_name="myDB"; // Database name 
        //$tbl_name="MyUSERS"; // Table name 
        
        // Connect to server and select databse.
        
        $connection= mysqli_connect($host, $username, $passwordDB);
        
        if (!$connection){
            die("Database Connection Failed" . mysqli_error($connection));
        }
        $select_db = mysqli_select_db($connection, $db_name);
        if (!$select_db){
            die("Database Selection Failed" . mysqli_error($connection));
        }
        return $connection;
    }
}