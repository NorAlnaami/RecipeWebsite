<?php
session_start();
class LogInClass{
  
    
    public function LogInSubmit() {
        include_once 'Controller/controlClass.php';
        $control= new control();
        
        if(isset($_REQUEST['submitLogIn'])){
            $userName = $_REQUEST['userName'];
            $password = $_REQUEST['password'];
            
            //validating user input
            include_once 'validation.php';
            $validate = new validate();
            $userName =$validate->test_input($userName);
            $password = $validate->test_input($password);

            
            $connection = $control->DBconnect();
            $tableName = "tbl_users";
            
            //database security prepared statement
            //checking if the input username and password can be found in the database
            $sql = $connection->prepare("SELECT username,password FROM $tableName WHERE username=?");
            $sql->bind_param('s', $userName);
            $sql->execute();
            
            $result = $sql->get_result();
            //need to check if the result found in the db are more than one row
            // because then it means the username and password was actually found in the DB
            $nrows = mysqli_num_rows($result);
            $row = $result->fetch_array(MYSQLI_ASSOC);

            if($nrows==1 && password_verify($password, $row['password'])){
                $_SESSION['userName'] = $userName;
                $access= TRUE;
                return $access;
            }
            else{
                $access= FALSE;
                echo '<br> <br>Wrong username or password <br> Try again';
                return $access;
            }

        }
    }
}
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

