<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
</head>

<body>
    <p>
      <?php
      // 独自のソート関数を作成
      function sort_2way($array, $order) {
          // 引数$orderがTRUEなら昇順、それ以外（FALSE）なら降順
          if ($order === TRUE) {
              echo "昇順にソートします。<br>";
              sort($array); // PHP標準関数で昇順ソート
          } else {
              echo "降順にソートします。<br>";
              rsort($array); // PHP標準関数で降順ソート
          }

          // ソートした配列のデータを1行ずつ表示する
          foreach ($array as $value) {
              echo $value . "<br>";
          }
      }

      // ソート対象の配列を用意
      $nums = [15, 4, 18, 23, 10];

      // 昇順ソートで呼び出し
      sort_2way($nums, TRUE);

      // 降順ソートで呼び出し
      sort_2way($nums, FALSE);
      ?>    
    </p>
</body>

</html>