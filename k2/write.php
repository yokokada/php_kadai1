<?php
function h($str){
    return htmlspecialchars(
        $str,ENT_QUOTES);
}
ini_set("display_errors",1);

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // フォームから送信されたデータを取得
    $weight = $_POST["weight"];
    $fatPercentage = $_POST["fat%"];
    $foodQuantity = $_POST["food"]; // 選択された前日食事量の値
    $condition = $_POST["cond"]; // 選択された体調の値
    $c = "/"; 
}

// 文字作成
$str = date("Y-m-d H:i:s");
$str .= $c.h($weight).$c.h($fatPercentage).$c.h($foodQuantity).$c.h($condition);
//File書き込み
$file = fopen("data.txt","a");	// ファイル読み込み
fwrite($file, $str."\n");
fclose($file);
?>


<html>
<head>
<meta charset="utf-8">
<title>File書き込み</title>
</head>
<body>

<h1>書き込みしました。</h1>
<h2>./data/data.txt を確認しましょう！</h2>
<div>
<?=$str?>
</div>

<ul>
<li><a href="read.php">結果へ</a></li>
</ul>
</body>
</html>