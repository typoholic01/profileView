<?php
require "../service/UserService.php";

if(isset($_POST["submit"])){
    //init
    $userService = new UserService();    
    $user = new User();
    
    //set
    $user->setUid($_POST["email"]);
    $user->setName($_POST["name"]);
    $user->setPassword($_POST["confirm"]);
    
    var_dump($user);
    
    //run
    if ($userService->insertUser($user)) {
        header("Location: ../view/user/success.html");        
    } else {
        header("Location: ../view/user/fail.html");         
    }
    
    
    
    
} else if ($_GET) {
    //init
    $userService = new UserService();    
    
    //run
    $userList = $userService->getUserList();
    
    var_dump($userList);   
}
?>