<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
</head>

<body>
    <p>
    <?php
    function sort_2way(array &$array, bool $order): void {  
      if ($order) {
        sort($array);  
      } else {
        rsort($array);
      }
    }
    
    $nums = [15, 4, 18, 23, 10];
    
    echo "昇順にソートします。<br>";
    sort_2way($nums, true);
    foreach ($nums as $num) {
      echo $num . "<br>";
    }

    echo "\n";
    
    echo "降順にソートします。<br>";
    sort_2way($nums, false);
    foreach ($nums as $num) {
      echo $num . "<br>";
    }
    
    ?>
    </p>
</body>

</html>