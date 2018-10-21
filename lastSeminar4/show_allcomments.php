<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$host="localhost"; // Host name 
        $username="TastyRecipe"; // Mysql username 
        $passwordDB="TastyRecipeWebsite"; // Mysql password 
        $db_name="myDB"; // Database name 
        
        // Connect to server and select databse.
        
        $connection= mysqli_connect($host, $username, $passwordDB);
        
        if (!$connection){
            die("Database Connection Failed" . mysqli_error($connection));
        }
        $select_db = mysqli_select_db($connection, $db_name);
        if (!$select_db){
            die("Database Selection Failed" . mysqli_error($connection));
        }
        
        $sql = "SELECT id ,name, comment FROM commentsJS";
$result = $connection->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        ?>
<table class="myTable" id="myTable">
            <tr id="row<?php echo $row['id'];?>">
        <th>
        Author
        </th>
        <td>
        <?php echo $row['name'];?>
        </td>
        <th>
        Comment
        </th>
        <td>
        <?php echo $row['comment'];?>
        </td>
        <td>
            <button id="myDel" onClick="delete_comment('<?php echo $row['id']?>')">Delete</button>
        </td>
        </tr>
        </table>
        <?php
                
    }
}
