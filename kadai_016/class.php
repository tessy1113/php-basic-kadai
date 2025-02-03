<!DOCTYPE html>
<html lang="ja">

<head>
   <meta charset="UTF-8">
   <title>PHP基礎編</title>
</head>

<body>
   <p>
    <?php
    class Food {
      public $name;
      public $price;

      public function __construct($name, $price) {
        $this->name = $name;
        $this->price = $price;
      }

      public function show_price() {
        echo "{$this->price}<br>";
      }
    }

    class Animal {
      public $name;
      public $height;
      public $weight;

      public function __construct($name, $height, $weight) {
        $this->name = $name;
        $this->height = $height;
        $this->weight = $weight;
      }

      public function show_height() {
          echo "{$this->height}<br>";
      }
    }
    
    $potato = new Food("potato", 250);
    $dog = new Animal("dog", 60, 5000);

    var_dump($potato);
    echo "<br>";
    var_dump($dog);
    echo "<br>";

    $potato->show_price();
    $dog->show_height();
    ?>
    </p>
</body>

</html>
