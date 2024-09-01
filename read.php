<?php
$file = fopen('data/data.txt', 'r');// ファイルを開く

// ファイル内容を1行ずつ読み込んで出力
while ($str = fgets($file)) {
    echo nl2br($str); // nl2br() ... 改行文字を追加
}
fclose($file); // ファイルを閉じる
?>

<html>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>結果画面</title>
    </head>
    <body>
        <a href="./post.php">投票画面に戻る</a>
    </body>
    </html>
</html>