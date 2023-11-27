<?php 
require_once(__DIR__ . "/../banco/sql.php");

$temps = listar_leituras("sensor_temperatura");
//print_r($temps);

foreach($temps as $t) {
    echo "['" . $t["momento_leitura"] . 
            "'," . $t["valor"] . "],";
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teste grafico</title>
</head>

<body>

    <div id="graficoPizza"></div>


    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
        google.charts.load('current', {
            'packages': ['corechart']
        });
        google.charts.setOnLoadCallback(drawChart);

        function drawChart() {

            var data = google.visualization.arrayToDataTable([
                ['Momento', 'Hours per Day'],
                <?php 
                    foreach($temps as $t) {
                        echo "['" . $t["momento_leitura"] . 
                                "'," . $t["valor"] . "],";
                    }                    
                ?>
                
                /*
                ['Trabalhar', 15],
                ['Comer', 6],
                ['Commute', 2],
                ['Watch TV', 2],
                ['Sleep', 7]
                */

            ]);

            var options = {
                title: '% de Temperaturas',
                is3D: true,
            };

            var chart = new google.visualization.
                    PieChart(document.getElementById('graficoPizza'));

            chart.draw(data, options);
        }
    </script>

</body>

</html>