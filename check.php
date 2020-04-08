<?php
ob_start(); //緩衝區，按照程式順序進行而沒有優先權
session_start();

$name=$_POST["username"];
$passwd=$_POST["pwd"];

// echo "使用者名稱".$name."<br/>";
// echo "使用者密碼".$passwd."<br/>";

$urid="a1073316";
$urpwd="test0709";

if($urid==$name && $urpwd==$passwd){
    //echo "login successful!";
    $_SESSION["login"]="S";
    $_SESSION["sid"]=$urid;
    header('location:catalog.php');
}else{
    $_SESSION["failed"]="F";
    header('location:failed.php');
    //echo "login failed.";
    //header('location:account.php');
    // echo "登入失敗，將在3秒後跳轉回登入頁面";
    // echo "<meta http-equiv='refresh' content='3;url=account.php'/>";
}

?>