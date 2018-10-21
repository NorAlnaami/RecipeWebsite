/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


function displayComment(){
    $.ajax({
        type: 'POST',
        url: 'show_allcomments.php',
        success: function(result){
            document.getElementById("commentHolder").innerHTML= result;
        }
    });
}

function addComment(){
    var author = document.getElementById("userName").value;
    var comment = document.getElementById("userComment").value;
    $.ajax({
        type: 'POST',
        url: 'post_comment.php',
        data:{receivedComment:comment},
        success: function(result){
            var id=result;
            var table=document.getElementById("myTable");
            var table_len=(table.rows.length-1);
            var row = table.insertRow(0).outerHTML= "<table class='myTable' id='myTable'><tr id='row"+id+"'><th>Author</th><td>"+author+"</td><th>Comment</th><td>"+comment+"</td><td><input type='button' id='myDel' value='Delete' onclick='delete_comment("+id+")'></td></tr></table>";
        }
    });
}

function delete_comment(iddelComment){
    $.ajax({
        type: 'POST',
        url: 'delete_comment.php',
        data:{id:iddelComment},
        success: function(result){
            if(result==="success"){
                   var row= document.getElementById("row"+iddelComment);
                   row.parentNode.removeChild(row);
               }
        }
    });
}