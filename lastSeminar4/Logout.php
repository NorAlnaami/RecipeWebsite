<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */ 
session_start();
session_destroy();
echo 'You are logged out. You can log in again here: ';
echo "<a href='index.php'>login</a>";
header("location:index.php");
?>
