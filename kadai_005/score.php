<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <title>テストの平均点を計算しよう</title>
</head>

<body>
    <p>
        <?php
        //変数に代入する
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

        //合計点を算出する
        $score_Sum = $score1 + $score2 + $score3 + $score4 + $score5 + $score6 + $score7 + $score8 + $score9 + $score10;

        //平均点を演出する
        $score_Ave = $score_Sum / 10;

        //平均点をブラウザに出力
        echo $score_Ave;
        ?>
    </p>
</body>
</html>