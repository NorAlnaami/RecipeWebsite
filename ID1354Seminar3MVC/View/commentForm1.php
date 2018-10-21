<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */?>

<html>
   
<body>
    
    <form action="../index.php" method="post">
    <br>
    Comment:
    <br>
    <textarea name="userComment" id="comment" rows="5" cols="40"></textarea><br>
 <input type="submit" name="submitComment1" id="submit">
</form>

</body>
</html>
<?php
 include '../Controller/commentControl.php';
 $control = new commentControl();
 $control->displayComment();?>