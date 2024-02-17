<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
</head>

<body>
    <p>
        <?php
        // 配列を第1引数で指定されたソート方向（昇順または降順）に従ってソートする
         function sort_2way($array, $order) {
              
          if ( $order ) {
            // 昇順にソート
              sort($array);
              echo "昇順にソートします。<br>";
            
            } else {
            // 降順にソート
              rsort($array);
              echo "降順にソートします。<br>";
        
            }
            foreach ($array as $num) {
                echo $num . '<br>';
          }
        }

           // ソートする配列を宣言
           $nums= [15, 4, 18, 23, 10];
           // trueなら昇順
           $order = true; 
           sort_2way($nums, $order);
           // falseなら降順
           $order = false; 
           sort_2way($nums, $order);
        ?>
    </p>
</body>

</html>
