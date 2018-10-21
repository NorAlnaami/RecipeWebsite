<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        include_once 'View/LogInForm.php';
        include_once 'Controller/controlClass.php';
        $control= new control();
        $access= $control->LogIncontrol();
        
        //if clicked on sign up
        if(isset($_REQUEST['signUpBox'])){
            header("Location:View/SignUpForm.php");
        }
        //if submit sign up
        if(isset($_REQUEST['submitSignUp'])){
            $control->SignUpcontrol();
        }
        //if submitted the comment
        if(isset($_REQUEST['submitComment1'])){
            $control->insertComment();
            header("Location: View/PanCake.php");
        }
        //if submit delete
        if(isset($_REQUEST['DeleteButton'])){
            $control->deleteComment();
            header("Location: View/PanCake.php");
        }
        //if logged in successfully
        if($access==TRUE){
            header("Location: View/recipes.php");
        }
        ?>
    </body>
</html>
