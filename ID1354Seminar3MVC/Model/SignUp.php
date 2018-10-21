<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class signUpClass{
    public function signUpFun(){
        include_once 'Controller/controlClass.php';
        $control= new control();
        //if(isset($_REQUEST['submitSignUp'])){
            $connection = $control->DBconnect();
            $uname = strip_tags($_REQUEST['usernameSignUp']);
            $upass = strip_tags($_REQUEST['passwordSignUp']);
            
            //validating user input
            include_once 'validation.php';
            $validate = new validate();
            $uname =$validate->test_input($uname);
            $upass = $validate->test_input($upass);
            
            
            $connection = $control->DBconnect();
            $uname = $connection->real_escape_string($uname);
            $upass = $connection->real_escape_string($upass);
 
            $hashed_password = password_hash($upass, PASSWORD_DEFAULT);
            //check if user already exists or username is in the database
            $check_username = $connection->prepare("SELECT username FROM tbl_users WHERE username=?");
            $check_username->bind_param('s', $uname);
            $check_username->execute();
            $result = $check_username->get_result();
            
            //need to check if the result found in the db are more than one row
            // because then it means the username and password was actually found in the DB
            $count= mysqli_num_rows($result);
            
            //if username is not in the database then:
            if($count==0){
                
                $query = $connection->prepare( "INSERT INTO tbl_users(username,password) VALUES(?,?)");
                
                if($query->bind_param('ss',$uname,$hashed_password)){
                    $query->execute();
                    echo '<br><br>Successfully registered <br><br> You can Log In now';
                }
                else{
                    echo 'Error while registering';
                }
                
            }
        }
    }
//}
?>
