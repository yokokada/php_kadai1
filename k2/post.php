<!DOCTYPE html>
<html lang="jn">
<head>
    <meta charset="UTF-8">
    <title>データ入力</title>
</head>
<body>
<form action="write.php" method="post">
	<ul>
		<li>体重: <input type="text" name="weight">kg</li>
		<li>体脂肪率: <input type="text" name="fat%">%</li>
		<li>前日食事量: <input type="radio" name="food" value="1">1
		<input type="radio" name="food" value="2">2
		<input type="radio" name="food" value="3">3
		<input type="radio" name="food" value="4">4
		<input type="radio" name="food" value="5">5
	</li>
	<li>　　　　　　少←　　　　　　　→多</li>
		<li>体調: <input type="radio" name="cond" value="1">1
		<input type="radio" name="cond" value="2">2
		<input type="radio" name="cond" value="3">3
		<input type="radio" name="cond" value="4">4
		<input type="radio" name="cond" value="5">5
	</li>
	<li>　　　悪←　　　　　　　→良</li>
	</ul>
	<input type="submit" value="送信">
</form>
    
</body>
</html>

