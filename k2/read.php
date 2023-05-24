<!DOCTYPE html>
<html>
<head>
    <title>折れ線グラフ表示</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body>
    <canvas id="myChart"></canvas>

    <?php
$file = fopen("data.txt", "r");
$dates = [];
$weights = [];
$fatPercentages = [];
$foodIntakes = [];
$conditions = [];

if ($file) {
    while (($line = fgets($file)) !== false) {
        $data = explode("/", $line);
        $dates[] = $data[0];
        $weights[] = floatval($data[1]);
        $fatPercentages[] = floatval($data[2]);
        $foodIntakes[] = intval($data[3]) * 10;
        $conditions[] = intval($data[4]) * 10;
    }
    fclose($file);
} else {
    echo "ファイルの読み込みに失敗しました。";
}

?>

<html>
<head>
    <title>折れ線グラフ表示</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body>
    <canvas id="myChart"></canvas>

    <script>
        var ctx = document.getElementById('myChart').getContext('2d');
        var chart = new Chart(ctx, {
            type: 'line',
            data: {
                labels: <?php echo json_encode($dates); ?>,
                datasets: [
                    {
                        label: '体重',
                        data: <?php echo json_encode($weights); ?>,
                        backgroundColor: 'rgba(255, 0, 0, 0.5)',
                        borderColor: 'rgba(255, 0, 0, 1)',
                        borderWidth: 1
                    },
                    {
                        label: '体脂肪率',
                        data: <?php echo json_encode($fatPercentages); ?>,
                        backgroundColor: 'rgba(0, 255, 0, 0.5)',
                        borderColor: 'rgba(0, 255, 0, 1)',
                        borderWidth: 1
                    },
                    {
                        label: '前日食事量',
                        data: <?php echo json_encode($foodIntakes); ?>,
                        backgroundColor: 'rgba(0, 0, 255, 0.5)',
                        borderColor: 'rgba(0, 0, 255, 1)',
                        borderWidth: 1
                    },
                    {
                        label: '体調',
                        data: <?php echo json_encode($conditions); ?>,
                        backgroundColor: 'rgba(255, 255, 0, 0.5)',
                        borderColor: 'rgba(255, 255, 0, 1)',
                        borderWidth: 1
                    }
                ]
            },
            options: {
                scales: {
                    y: {
                        suggestedMin: 0,
                        suggestedMax: 50,
                        stepSize: 5
                    }
                }
            }
        });
    </script>
</body>
</html>

