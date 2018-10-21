<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <script src="myJS.js"></script>
    </head>
    <body onload="displayComment()">
        <button id="myBtn" onclick="addComment()" name="btn" value="comment">Comment</button>
        <input id="userComment" name="usercomment">
    </body>
    <div id="commentHolder">
        
    </div>
    <input type="hidden" id="userName" value="<?php echo $_SESSION['userName'];?>" ></input>
</html>
