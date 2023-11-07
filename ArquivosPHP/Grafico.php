<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <link rel="stylesheet" href="estilo">
    <style>
        .ajustar{
        
            display: flex;
    flex-direction: row;
        }
        </style>
    <script type="text/javascript">
        google.charts.load("current", {packages: ['corechart']});
              google.charts.setOnLoadCallback(function () {
            drawChart1();
            drawChart2();
            drawChart3();
        });
        function drawChart1() {
            <?php
            $conexao = new PDO('mysql:host=127.0.0.1;dbname=loginportugal', 'root', '');

            if ($conexao) {
                $sql = "SELECT idade, nota FROM avaliacao";
                $stmt = $conexao->query($sql);
                $data = array();

                while ($dados = $stmt->fetch(PDO::FETCH_ASSOC)) {
                    $idade = $dados['idade'];
                    $nota = (int)$dados['nota'];
                    $data[] = array($idade, $nota);
                }
            } else {
                echo "console.error('Erro na conexão com o banco de dados.');";
            }
            ?>

            var data = google.visualization.arrayToDataTable([
                ['Idade', 'Nota'],
                <?php
                foreach ($data as $row) {
                    echo "['" . $row[0] . "', " . $row[1] . "],";
                }
                ?>
            ]);

            var options = {
                title: "Notas por Idade",
                width: 600,
                height: 400,
                bar: {groupWidth: "95%"},
                legend: { position: "Idade" },
            };

            var chart = new google.visualization.LineChart(document.getElementById("columnchart_values"));
            chart.draw(data, options);
        }

        //outro Gráfico
        function  drawChart2() {
            <?php
            $conexao = new PDO('mysql:host=127.0.0.1;dbname=loginportugal', 'root', '');

            if ($conexao) {
                $sql = "SELECT cidade, nota FROM avaliacao";
                $stmt = $conexao->query($sql);
                $cidadeNota = array();

                while ($dados = $stmt->fetch(PDO::FETCH_ASSOC)) {
                    $cidade = $dados['cidade'];
                    $nota = (int)$dados['nota'];
                    $CidadeNota[] = array($cidade, $nota); // Swap the order of cidade and nota
                }
            } else {
                echo "console.error('Erro na conexão com o banco de dados.');";
            }
            ?>

            var data = google.visualization.arrayToDataTable([
                ['Cidade', 'Nota'],
                <?php
                foreach ($CidadeNota as $row) {
                    echo "['" . $row[0] . "', " . $row[1] . "],";
                }
                ?>
            ]);

            var options = {
                title: "Desempenho do site",
                width: 600,
                height: 200,
                bar: {groupWidth: "91%"},
                bars: 'vertical',
                legend: { position: "rigth" },
            };

            var chart = new google.visualization.BarChart(document.getElementById("grafico2"));
            chart.draw(data, options);
        }


        //grafico3

        function  drawChart3() {
            <?php
            $conexao = new PDO('mysql:host=127.0.0.1;dbname=loginportugal', 'root', '');

            if ($conexao) {
                $sql = "SELECT sexo, nota FROM avaliacao";
                $stmt = $conexao->query($sql);
                $SexoNota = array();

                while ($dados = $stmt->fetch(PDO::FETCH_ASSOC)) {
                    $sexo= $dados['sexo'];
                    $nota = (int)$dados['nota'];
                    $SexoNota[] = array($sexo, $nota); 
                }
            } else {
                echo "console.error('Erro na conexão com o banco de dados.');";
            }
            ?>

            var data = google.visualization.arrayToDataTable([
                ['Sexo', 'Nota'],
                <?php
                foreach ($SexoNota as $row) {
                    echo "['" . $row[0] . "', " . $row[1] . "],";
                }
                ?>
            ]);

            var options = {
                title: "Desempenho do site",
                width: 600,
                height: 200,
                bar: {groupWidth: "91%"},
                bars: 'vertical',
                legend: { position: "rigth" },
            };

            var chart = new google.visualization.PieChart(document.getElementById("grafico3"));
            chart.draw(data, options);
        }
    </script>
    <title>Document</title>
</head>
<body>
    <div class="ajustar">
<div id="columnchart_values" style="width: 900px; height: 300px;"></div>
<div id="grafico2" style="width: 900px; height: 300px;"></div>
    </div>
    <div id="grafico3" style="width: 900px; height: 300px;"></div><br>
</body>
</html>
