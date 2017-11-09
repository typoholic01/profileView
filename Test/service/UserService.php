<?php
require "../dao/UserDao.php";

class UserService {
    
    /* CREATE */
    function insertUser($user) {
        $userDao = new UserDao();
        
        return $userDao->insertUser($user);
        
    }
    /* READ */
    function getUser($user) {
        $userDao = new UserDao();
        
        $login = $userDao->getUser($user);
        
        return $login;
    }
    
    function getUserList() {
        $userDao = new UserDao();
        
        $userList = $userDao->getUserList();
        
        return $userList;
    }
    
    /* UPDATE */
    function updateUser($user) {
        $userDao = new UserDao();
        
        return $userDao->updateUser($user);
    }
}

?>