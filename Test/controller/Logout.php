<?php
// remove all session variables
session_unset();

// destroy the session
session_destroy(); 

$prevPage = $_SERVER['HTTP_REFERER'];
// 변수에 이전페이지 정보를 저장

header('location:'.$prevPage);
// 페이지 이동
?>