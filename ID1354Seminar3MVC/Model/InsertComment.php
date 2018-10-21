<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class insertComment{
    public function inserCommentFun(){
        $users_id = $_SESSION['userName'];
        $comment = $_REQUEST['userComment'];
        
        //validating data
        include_once 'validation.php';
        $validate = new validate();
        $comment =$validate->test_input($comment);
        include_once 'Controller/controlClass.php';
        $control= new control();
        $connection = $control->DBconnect();
        
        //validating user input
        include_once 'validation.php';
        $validate = new validate();
        $comment =$validate->test_input($comment);
        
        $query = $connection->prepare( "INSERT INTO comments1(username,comment) VALUES(?,?)");        
        $query->bind_param('ss',$users_id,$comment);
        $query->execute();
    }
}