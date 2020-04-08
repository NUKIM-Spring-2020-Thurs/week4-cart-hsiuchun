<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <?php
    if(isset($_COOKIE["sid"])){
        $user=$_COOKIE["sid"];
        echo "歡迎再度光臨"." ".$_COOKIE["sid"];
        setcookie("sid","",time()-3600);
    }else{
        echo "歡迎新朋友";
        $user="";
    }
    ?>

</head>
<body>
    <h1>login page</h1>
    <form action="check.php" method="POST">
        帳號<input type="text" name="username" value="<?php echo $user ?>" required>
        密碼<input type="password" name="pwd" required>
        <input type="submit" value="提交">
    </form>
</body>
</html>