<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <title>クラスを２つ作ってそれぞれのインスタンスを出力しよう</title>
</head>

<body>
  <p>
      <?php
       //
       //「Food」クラスを定義する
       class Food {
          //プロパティを定義する
          private $name;
          private $price;

          //コンストラクタを定義する
          public function __construct($name, $price) {
             $this->name = $name;
             $this->price = $price;
          }

          public function show_price() {
             echo $this->price . '<br>';
          }
       }

       //インスタンス化する
       $food = new Food('potato', 250);

       //インスタンス$foodの各プロパティの値を出力する
       print_r($food);
       echo '<br>';

       //
       //「Animal」クラスを定義する
       class Animal {
          //プロパティを定義する
          private $name;
          private $height;
          private $weight;

          //コンストラクタを定義する
          public function __construct($name, $height, $weight) {
             $this->name = $name;
             $this->height = $height;
             $this->weight = $weight;
          }

          public function show_height() {
             echo $this->height;
          }
       }

       //インスタンス化する
       $animal = new Animal('dog', 60, 5000);

       //インスタンス$animalの各プロパティの値を出力する
       print_r($animal);
       echo '<br>';

       //メソッドにアクセスして実行する
       $food->show_price();

       $animal->show_height();

       ?>
  </p>
</body>

</html>




