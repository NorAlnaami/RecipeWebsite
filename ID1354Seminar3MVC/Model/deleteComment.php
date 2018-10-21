<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class deleteComment{
    public function deleteCommentFun(){
        $Connection = new deleteComment();
        $connection = $Connection->checkUser();
        $sql=$connection->prepare("SELECT username,comment FROM comments1 WHERE comment=?");
        $sql->bind_param('s',$_REQUEST['commentToDelete']);
        $sql->execute();
        //$result= mysqli_query($connection, $sql) or die(mysqli_error($connection));
        $result = $sql->get_result();
        
        $row = $result->fetch_array(MYSQLI_ASSOC);

        //if the person logged in is the user who commented then delete comment
        if($_SESSION['userName'] == $row['username']){
            $query =$connection->prepare( "DELETE FROM comments1 WHERE comment=?");
            $query->bind_param('s',$_REQUEST['commentToDelete']);
            if($query->execute()){
                echo 'comment is deleted';
            }
            else {
                echo 'Something went wrong, try again';
            }
        }
        else{
            echo 'You are not authorized to delete this comment';
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