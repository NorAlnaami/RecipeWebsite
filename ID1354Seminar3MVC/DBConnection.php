<?php
class connect{

    public function connectfun() {
        
    }
    public function checkUser(){
        $host="localhost"; // Host name 
        include_once 'DBInfo.php';
        $DB = new DBInfo();
        $infoUser = $DB->DBreturnUsername();
        $username= $infoUser; // Mysql username 
        $infoPWD = $DB->DBreturnPassword();
        $passwordDB= $infoPWD; // Mysql password 
        $db_name="myDB"; // Database name 
        //$tbl_name="MyUSERS"; // Table name 
        
        // Connect to server and select databse.
        
        $connection= mysqli_connect($host, $username, $passwordDB);
        
        if (!$connection){
            die("Database Connection Failed" . mysqli_error($connection));
        }
        $select_db = mysqli_select_db($connection, $db_name);
        if (!$select_db){
            die("Database Selection Failed" . mysqli_error($connection));
        }
        return $connection;
    }
}
