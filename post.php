<html>
<head>
<meta charset="utf-8">
<title>POST練習</title>
</head>
<body>
<form action="write.php" method="post">
	お名前: <input type="text" name="name"><br>
	EMAIL: <input type="email" name="mail"><br>
	備考：<textarea name="memo" cols="30" rows="10" ></textarea>
	<button type="submit">送信</button>
</form>
<ul>
<li><a href="read.php">アンケート結果確認</a></li>
</ul>
</body>
</html>