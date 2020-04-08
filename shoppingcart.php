<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>購物車</title>
</head>
<body>
    <table border="1px">
        <tr bgcolor="#ffc952">
            <td>功能</td>
            <td>編號</td>
            <td>名稱</td>
            <td>價格</td>
            <td>數量</td>
        </tr>
    <?php
        $flag=false;
        $total=0;
        while(list($arr,$value)=each($_COOKIE)){
            if(isset($_COOKIE[$arr])&& is_array($_COOKIE[$arr])){
                if($flag){
                    $flag=false;
                    $color="#fafbfd";
                }
                else{
                    $flag=true;
                    $color="#ebedec";
                }
                echo "<tr bgcolor='".$color."'><td>";
                echo "<a href='delete.php?Id=".$arr."'>";
                echo "刪除</a></td>";
                $price=0;
                $quantity=0;
                while( list($name, $value)=each($_COOKIE[$arr])){
                    echo "<td>" .$value . "</td>";
                    if($name=="Price")$price=$value;
                    if($name=="Quantity")$quantity=$value;
                }
                $total+=$price*$quantity;
                echo "</tr>";
            }
        }
        if ($total != 0) {  // 顯示總金額
            echo "<tr bgcolor=#c2dde4><td colspan=5 align=right>";                
            echo "總金額 = NT$".$total."元</td></tr>";
        }
    ?>
    </table>

    <div class="footer">
        <a href="./catalog.php">商品目錄</a>
        <a href="./shoppingcart.php">查看購物車</a>
    </div>
</body>
</html>