<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include_once 'DBConnection.php';
include_once 'Model/LogIn.php';
include_once 'Model/SignUp.php';
include_once 'Model/InsertComment.php';
include_once 'Model/displayComment.php';
include_once 'Model/deleteComment.php';

class control{
    
    public function LogIncontrol() {
        $logInclass= new LogInClass();
        $accessControl = $logInclass->LogInSubmit();
        return $accessControl;
        
    }
    
    public function DBconnect() {
        
        $connect = new connect();
        $connection= $connect->checkUser();
        return $connection;
    }
    public function SignUpcontrol(){
        $signUpClass = new signUpClass();
        $signUpClass->signUpFun();
    }
    
    public function insertComment(){
        $insertComment = new insertComment();
        $insertComment->inserCommentFun();
    }
    
    public function displayComment(){
        $displayComment = new diplayComment();
        $displayComment->displayCommentFun();
    }
    public function deleteComment(){
        $deleteComment = new deleteComment();
        $deleteComment->deleteCommentFun();
    }
}