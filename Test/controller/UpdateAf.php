<?php
require "../service/UserService.php";

if(isset($_POST["submit"])){
    //init
    $userService = new UserService();
    $user = new User();
    
    //set
    $user->setName($_POST["name"]);
    $user->setProfile($_POST["profile"]);
    $user->setPhoto($_POST["photo"]);
    
    var_dump($user);
    
    //run
    if ($userService->updateUser($user)) {
        header("Location: ../view/user/success.html");
    } else {
        header("Location: ../view/user/fail.html");
    }
    
}
?>