<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="UTF-8">
    <title>PHP課題16</title>
  </head>

  <body>
    <p>
      <?php

      // 食べ物クラス
      class Food {
          // プロパティ
          private $name;
          private $price;

          // コンストラクタ（生まれた瞬間に値を代入）
          public function __construct(string $name, int $price) {
              $this->name = $name;
              $this->price = $price;
          }

          // メソッド（価格を出力する仕事）
          public function show_price() {
              echo $this->price . "\n";
          }
      }

      // 動物クラス
      class Animal {
          // プロパティ
          private $name;
          private $height;
          private $weight;

          // コンストラクタ
          public function __construct(string $name, int $height, int $weight) {
              $this->name = $name;
              $this->height = $height;
              $this->weight = $weight;
          }

          // メソッド（身長を出力する仕事）
          public function show_height() {
              echo $this->height . "\n";
          }
      }

      // --- Step3. インスタンスを作成し、出力する ---

      // 食べ物インスタンスの作成（ポテト、250円）
      $potato = new Food('potato', 250);

      // 動物インスタンスの作成（犬、身長60、体重5000）
      $dog = new Animal('dog', 60, 5000);

      // print_r 関数を使ってインスタンスの中身を出力
      print_r($potato);
      print_r($dog);

      // --- Step4. メソッドへアクセスする ---

      // それぞれのメソッドを実行
      $potato->show_price();
      $dog->show_height();

      ?>
    </p>
  </body>
</html>