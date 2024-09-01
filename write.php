<?php

$to = 'rktnk0623@gmail.com';

$subject = 'お問い合わせがありました';

$message = "お名前：\n";
$message .= $_POST["name"];
$message .= "\n";
$message .= "メールアドレス：\n";
$message .= $_POST["mail"];
$message .= "\n";
$message .= "内容：\n";
$message .= $_POST["memo"];

mb_send_mail($to,$subject,$message);




$name= $_POST["name"];
$mail= $_POST["mail"];
$memo= $_POST["memo"];

//作成日時,名前,メールアドレス
$str =date("Y年m月d日 H時i分s秒").",".$name.",".$mail.",".$memo;
//File書き込み
$file = fopen("data/data.txt","a");	// ファイル読み込み
fwrite($file, $str."\n");
fclose($file);

header("Location: post.php");
exit;
?>


<html>
<head>
<meta charset="utf-8">
<title>File書き込み</title>
</head>
<body>

<h1>書き込みしました。</h1>
<h2>./data/data.txt を確認しましょう！</h2>

<ul>
<li><a href="input.php">戻る</a></li>
</ul>
</body>
</html>