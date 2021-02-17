<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-eqiv="X-UA-Compatible" content="ie=edge">
    <title>2進数から10進数への変換ツール 結果</title>
</head>
<body>
    <h1>結果表示</h1>

<?php
    // フォームの入力チェック
    if (isset($_POST['str_binary'])&& strcmp($_POST['str_binary'],"")!=0){
        $str_binary = $_POST['str_binary'];
    } else {
        $str_binary ="";
    }
?>

<?php if (strcmp($str_binary,"")==0): ?> 
    <!--フォームに入力がなかった時の処理 -->
    <p>2進数が設定されていません。やり直してください。</p>
<?php else : ?>
    <!-- フォームに入力有の処理 -->
    <p>変換しました。</p>

<?php
    // 変換
    $dec = intval($str_binary,2);

    // 表示文字列作成
    $str_result = sprintf("2進数 %b は、<br>16進数:%x<br> 10進数:%d<br>です。",$dec,$dec,$dec);
?>

    <!-- 結果表示 -->
    <P><?php echo $str_result; ?></P>
<?php endif; ?>

    <!-- フォームページへ戻る -->
    <p><a href="/test/binary/form.php">もう一度変換しますか？</a></p>

</body>
</html>