<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<td class="contact-delete">
    <form action="../index.php" method="post">
        <input type="hidden" name="commentToDelete" value="<?php echo $row['comment']; ?>">
        <input type="submit" name="DeleteButton" value="Delete">
    </form>
</td>