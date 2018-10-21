<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
//if(isset($_REQUEST['signUpBox'])){
            //echo 'SignUpBox is clicked';
        //}
?>
<body>

    <h1>Sign Up</h1>

        <form action="../index.php" method="post">
            Username: <input type="text" name="usernameSignUp" id="userNameSignUp" required=""><br>
            Password:<input type="text" id="password" name="passwordSignUp"required=""><br>
            <input type="submit" name="submitSignUp" value="SignUp"><br>
            <a href="../index.php?LogInBox">LogIn</a>
