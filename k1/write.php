<?php
function h($str){
    return htmlspecialchars(
        $str,ENT_QUOTES);
}
ini_set("display_errors",1);

$name = $_POST["name"];
$mail = $_POST["mail"];
$hobby = $_POST["hobby"];
$music = $_POST["music"];
$cinema = $_POST["cinema"];
$food = $_POST["food"];
$c = ",";

//文字作成
$str = date("Y-m-d H:i:s");
$str .= $c.h($name).$c.h($mail).$c.h($hobby).$c.h($music).$c.h($cinema).$c.h($food);
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
<div><?=$str?></div>

<ul>
<li><a href="read.php">結果へ</a></li>
</ul>
</body>
</html>