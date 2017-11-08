<?php
require "../dao/UserDao.php";

class UserService {
    function getUserList() {
        
        $userDao = new UserDao();
        
        $userList = $userDao->getUserList();
        
        return $userList;
    }
}

?>