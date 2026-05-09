<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <title>PHP課題11</title>
</head>

<body>
  <p>
    <?php 
    // 連想配列を作成する
    $onion_data = [
      '名前' => '玉ねぎ',
      '値段' => 200,
      '産地' => '北海道'
    ];

    // foreach文を使ってキーと値を出力する
    foreach ($onion_data as $key => $value) {
      echo "{$key} : {$value}<br>";
    }
    ?>
  </p>
</body>
</html>