<?php
ini_set("display_errors",1);
$file = fopen("data.txt", "r");
if ($file) {
    while (($line = fgets($file)) !== false) {
        echo $line . "<br>";
    }
    fclose($file);
} else {
    echo "ファイルの読み込みに失敗しました。";
}
?>