<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include_once '../Model/displayComment.php';
include_once '../Model/deleteComment.php';
class commentControl{
    
    public function displayComment(){
        $displayComment = new diplayComment();
        $displayComment->displayCommentFun();
    }
    
    public function deleteComment(){
        $deleteComment = new deleteComment();
        $deleteComment->deleteCommentFun();
    }
    
}
