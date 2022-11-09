<?php
class dbh{
    public $hostname = "127.0.0.1";
    public $username = "root";
    public $password = "";
    public $dbname = "zuriphp";
    protected function connect(){
        global $hostname;
        global $username;
        global $password;
        global $dbname;
        $conn = mysqli_connect($hostname, $username, $password, $dbname);
        if(!$conn){
            echo "<script> alert('Error connecting to the database') </script>";
        }
        return $conn;
    }
}

    
    