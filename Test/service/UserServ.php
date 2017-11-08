<?php
require "../dao/UserDao.php";

$userDao = new UserDao();

$supplyArr = $userDao->getUserList();

var_dump($supplyArr);

?>