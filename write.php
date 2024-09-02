<?php
$name= $_POST["name"];
$mail= $_POST["mail"];
$age= $_POST["age"];
$gender= $_POST["gender"];
$channelname= $_POST["channelname"];
$URL= $_POST["URL"];

//作成日時,名前,メールアドレス
$str =date("Y年m月d日 H時i分s秒").",".$name.",".$mail.",".$age.",".$gender.",".$channelname.",".$URL;
//File書き込み
$file = fopen("data/data.txt","a");	// ファイル読み込み
fwrite($file, $str."\n");
fclose($file);
?>


<html>
<head>
<meta charset="utf-8">
<title>確認画面</title>
</head>
<body>
<div>
    <?php
    echo nl2br("$name\n$mail\n$age\n$gender\n$channelname\n$URL");
    ?>
</div>
<p>こちらの内容で回答しました</p>
<ul>
<li><a href="./post.php">投票画面に戻る</a></li>
</ul>
</body>
</html>