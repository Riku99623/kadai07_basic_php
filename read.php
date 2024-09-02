<?php
$file = fopen('data/data.txt', 'r');// ファイルを開く

echo '<h2>アンケート結果</h2>';
echo "<table border='1' cellspacing='0' cellpadding='10'>";
echo '<tr>';
echo '<th>回答日時</th>';
echo '<th>名前</th>';
echo '<th>EMAIL</th>';
echo '<th>年齢</th>';
echo '<th>性別</th>';
echo '<th>好きなYouTubeチャンネル</th>';
echo '<th>おすすめ動画URL</th>';
echo '</tr>';

// ファイル内容を1行ずつ読み込んで出力
while (($line = fgets($file)) !== false) {
    $fields = explode(",",$line);
      echo '<tr>';
      echo '<td>'.htmlspecialchars($fields[0]).'</td>';
      echo '<td>'.htmlspecialchars($fields[1]).'</td>';
      echo '<td>'.htmlspecialchars($fields[2]).'</td>';
      echo '<td>'.htmlspecialchars($fields[3]).'</td>';
      echo '<td>'.htmlspecialchars($fields[4]).'</td>';
      echo '<td>'.htmlspecialchars($fields[5]).'</td>';
      echo '<td><a href="'.htmlspecialchars($fields[6]).'"target="_blank">'.htmlspecialchars($fields[6]).'</a></td>';
      echo'</tr>';
    }
  echo'</table>';
  fclose($file); // ファイルを閉じる
  ?>

<html>
    <!DOCTYPE html>
    <html lang="ja">
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