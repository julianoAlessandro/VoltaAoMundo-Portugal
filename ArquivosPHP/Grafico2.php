<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
        google.charts.load("current", {packages: ['corechart']});
        google.charts.setOnLoadCallback(drawChart);

        function grafico2() {
            <?php
            $conexao = new PDO('mysql:host=127.0.0.1;dbname=loginportugal', 'root', '');

            if ($conexao) {
                $sql = "SELECT cidade, nota FROM avaliacao";
                $stmt = $conexao->query($sql);
                $cidadeNota = array();

                while ($dados = $stmt->fetch(PDO::FETCH_ASSOC)) {
                    $cidade = $dados['cidade'];
                    $nota = (int)$dados['nota'];
                    $cidadeNota[] = array($cidade, $nota); // Swap the order of cidade and nota
                }
            } else {
                echo "console.error('Erro na conexão com o banco de dados.');";
            }
            ?>

            var data = google.visualization.arrayToDataTable([
                ['Cidade', 'Nota'],
                <?php
                foreach ($cidadeNota as $row) {
                    echo "['" . $row[0] . "', " . $row[1] . "],";
                }
                ?>
            ]);

            var options = {
                title: "Desempenho do site",
                width: 600,
                height: 400,
                bar: {groupWidth: "95%"},
                legend: { position: "none" },
            };

            var chart = new google.visualization.BarChart(document.getElementById("grafico2"));
            chart.draw(data, options);
        }
    </script>
    <title>Document</title>
</head>
<body>
<div id="grafico2" style="width: 900px; height: 300px;"></div>
</body>
</html>
