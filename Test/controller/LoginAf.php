<?php
require "../service/UserService.php";

if(isset($_POST["uid"])){
    //init
    session_start();
    $userService = new UserService();
    $user = new User();
    $login = new User();
    
    //set
    $user->setUid($_POST["uid"]);
    $user->setPassword($_POST["password"]);
    
    var_dump($user);
    
    //run
    $login = $userService->getUser($user);
    
    if ($login === null) {
        
        header("Location: ../view/user/fail.html");
    } else {
        // Set session variables
        $_SESSION["login"] = serialize($login);
        
        header("Location: ../view/user/success.html");
    }
    
}
?>