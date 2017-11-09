<?php
require "Conn.php";
require "../vo/User.php";

class UserDao
{
    
    /******************************
     *          CREATE 
     ******************************/
    public function insertUser($user) 
    {
        $connClass = new Conn();
        
        //접속
        $conn = $connClass->conn;
        
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        
        $sql = "INSERT INTO Users (uid, password, name)
VALUES ('".$user->getUid()."','".$user->getPassword()."','".$user->getName()."')";
        
        return $conn->query($sql);
        
    }
    
    /******************************
     *          READ
     ******************************/
    public function getUser($user)
    {
        $connClass = new Conn();
        
        //접속
        $conn = $connClass->conn;
        
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        
        $sql = "SELECT * FROM
              Users
              WHERE uid = ".$user->getUid();
        
        if ($result = $conn->query($sql)) {
            
            /* fetch object array */
            while ($login = $result->fetch_object('User')) {
                /* free result set */
                $result->close();
                
                return $login;
            }
            
        }
        
    }
    
    public function getUserList()
    {
        $connClass = new Conn();
        
        //접속
        $conn = $connClass->conn;
        
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        
        $sql = "SELECT * FROM
              Users";
        $result = $conn->query($sql);
        
        //담기
        while ($user = $result->fetch_object('User')) {
            $users[] = $user;
        }
        
        return $users;
    }
    
    /******************************
     *          UPDATE
     ******************************/
    public function updateUser($user)
    {
        $connClass = new Conn();
        
        //접속
        $conn = $connClass->conn;
        
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        
        $sql = "UPDATE Users
                SET name = ".$user->getName().",
    			    profile = ".$user->getProfile().",
    			    photo = ".$user->getPhoto()."
        		WHERE uid = ".$user->getUid();
        
        return $conn->query($sql);
    }
}
?>