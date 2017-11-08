<?php
require "Conn.php";
require "../vo/User.php";

class UserDao
{
    public function getUserList()
    {        
        $connClass = new Conn();
        
        $conn = $connClass->conn;
        
        $tasks = [];
        
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        
        $sql = "SELECT * FROM
              Users";
        $result = $conn->query($sql);
        
        while ($user = $result->fetch_object('User')) {
            $users[] = $user;
        }
        
        return $users;
    }
    
    //아이템 코드를 받아 아이템 이름을 출력한다
    public function getItemName($ItemCode)
    {
        $conn = $this->conn;
        
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        
        $sql = "SELECT  QuickRepair, QuickMarionette, Marionette, Arms, Coin FROM
              itemcodes
              where ItemCode = '$ItemCode'";
        
        $result = $conn->query($sql);
        
        while($row = $result->fetch_array($resulttype = MYSQLI_ASSOC))
        {
            $rows[] = $row;
        }
        return $rows;
    }
}
?>