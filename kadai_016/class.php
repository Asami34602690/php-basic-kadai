<!DOCTYPE html>
 <html lang="ja">
 
 <head>
     <meta charset="UTF-8">
     <title>PHP基礎編</title>
 </head>
 
 <body>
     <p> <?php
        //クラスを定義する
        class Food {
            //プロパティを定義する
            public $name;
            public $price;

            public function show_price() {
                echo $this->price . '<br>';
            }

            public function __construct(string $name, int $price) {
                $this->name = $name;
                $this->price = $price;
            }
        }  
        
        //クラスを定義する
        class Animal {
            //プロパティを定義する
            public $name;
            public $height;
            public $weight;
            public function show_height() {
                echo $this->height . '<br>';
            }

            public function __construct(string $name, int $height, string $weight) {
                $this->name = $name;
                $this->height = $height;
                $this->weight = $weight;
            }
        }
       
       //インスタンス化
        $food = new Food('potato' ,250);
        $animal = new Animal('dog' ,60, 5000);

        // プロパティの値を表示
        print_r($food);
        echo '<br>';
        print_r($animal);
        echo '<br>';

        // メソッドを呼び出して値を表示
        $food->show_price();
        $animal->show_height();

        ?>
     </p>
 </body>
 
 </html>
