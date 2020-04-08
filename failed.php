<?php
session_start();
if(isset($_SESSION["failed"])){
    echo "Your name or password is false.<br/>";
    echo "<a href='logout.php'>重新登入</a>";
}else{
    echo "非法進入";
    echo "<a href='logout.php'>重新登入</a>";
}
?>