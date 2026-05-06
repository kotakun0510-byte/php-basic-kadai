<!DOCTYPE html>
<html lang="ja">
  <meta charset="UTF-8">
  <title>課題5</title>

  <body>
    <p>
    <?php
    // 1. 各生徒の点数を変数に代入する（3章：変数の基礎）
    $score1 = 80;
    $score2 = 60;
    $score3 = 55;
    $score4 = 40;
    $score5 = 100;
    $score6 = 25;
    $score7 = 80;
    $score8 = 95;
    $score9 = 30;
    $score10 = 60;

    // 2. 変数同士を足して合計を出す（4章：四則演算）
    $total = $score1 + $score2 + $score3 + $score4 + $score5 + $score6 + $score7 + $score8 + $score9 + $score10;

    // 3. 合計を人数で割って平均を出す（4章：四則演算）
    $average = $total / 10;

    // 4. 結果を出力する（2章：echoの基本）
    echo $average;
    ?>
</p>
  </body>
</html>