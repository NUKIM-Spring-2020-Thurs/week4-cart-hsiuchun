<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>購物網站</title>
    <?php
        session_start();
        if(isset($_POST["Item"])){
            $_SESSION["Quantity"]=$_POST["Quantity"];
            $id=$_POST["Item"];
            $_SESSION["ID"]=$id;
            switch(strtoupper($id)){
                case "P001":
                    $_SESSION["Name"]="手工餅乾";
                    $_SESSION["Price"]=250;
                    break;
                case "P002":
                    $_SESSION["Name"]="巧克力鮮奶油蛋糕";
                    $_SESSION["Price"]=300;
                    break;
                case "P003":
                    $_SESSION["Name"]="草莓鮮奶油蛋糕";
                    $_SESSION["Price"]=330;
                    break;
                case "P004":
                    $_SESSION["Name"]="義式冰淇淋";
                    $_SESSION["Price"]=150;
                    break;
            }
            header("Location:savecart.php");
        }
    ?>
    
</head>
<body>

    <?php
        session_start();
        if(isset($_SESSION["login"])){
            //echo "yor are successed<br/><br/>";
            $date=strtotime("+7 days",time());
            $uName=$_SESSION["sid"];
            setcookie("sid",$uName,$date);
            
            echo '<form action="catalog.php" method="post">
            選擇商品 &nbsp;
            <select name="Item" id="">
                <option value="P001">手工餅乾-$250</option>
                <option value="P002" selected>巧克力鮮奶油蛋糕-$300</option>
                <option value="P003">草莓鮮奶油蛋糕-$330</option>
                <option value="P004">義式冰淇淋-$150</option>
            </select>
            &nbsp;訂購數量&nbsp;
            <input type="number" name="Quantity" id="" style="width:50px" min="0" step="1">
            <input type="submit" value="訂購">
            <input type="reset" value="重置">
        </form>
    
        
        <div class="footer">
            <a href="catalog.php">商品目錄</a>
            <a href="shoppingcart.php">查看購物車</a>
        </div>';
        echo "<a href='logout.php'>登出系統</a>";

        }else{
            echo "非法進入"."<br/>";
            echo "<a href='logout.php'>回首頁</a>";
        }
    ?>
</body>
</html>