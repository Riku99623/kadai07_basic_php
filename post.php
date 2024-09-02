<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" href="./style.css">
<title>好きなYouTubeチャンネル</title>
</head>
<body>
	<h1>好きなYouTubeチャンネル</h1>
	<div class="container">
  <form action="write.php" method="post">
	<table class="table">
	   <tr>
		<th class="item">名前(必須)</th>
		<td class="body"><input type="text" name="name" id="name" required><br></td>
	   </tr>
	   <tr>
		<th class="item">EMAIL(必須)</th>
		<td class="body"><input type="email" name="mail" id="mail" required><br></td>
	   </tr>
	   <tr>
		<th class="item">性別(必須)</th>
		<td class="body">
		 <select name="gender" id="gender">
		    <option value="" selected disabled>選択してください</option>
			<option value="男性">男性</option>
			<option value="女性">女性</option>
		 </select>
		</td>
	   </tr>
	   <tr>
		<th class="item">年齢(必須)</th>
		<td class="body"><input type="number" name="age" id="age" min="0" required></td>
	   </tr>
	   <tr>
		<th class="item">好きなYouTubeチャンネル名(必須)</th>
		<td class="body"><textarea name="channelname" id="channelname" required></textarea></td>
	   </tr>
	   <tr>
		<th class="item">おすすめ動画URL(必須)</th>
		<td class="body"><input type="URL" name="URL" id="URL" placeholder="https://example.com" pattern="https://.*" size="30" parequired><br></td>
	   </tr>
	</select><br>
	</table>
	<button type="submit" class="submit">送信</button>
</form>
</div>
<ul>
<li><a href="read.php">アンケート結果確認</a></li>
</ul>
</body>
</html>