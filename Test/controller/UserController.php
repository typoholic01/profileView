<?php
require "../service/UserService.php";

// class UserController {
//     function getUserList() {
        
//     }    
// }

$userService = new UserService();

$userList = $userService->getUserList();

var_dump($userList);
?>