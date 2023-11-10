<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
   
    <style>
        .ajustar{
        
            display: flex;
            justify-content:center;
            
        

        }
     
        h1{
            text-align: center;
        }
        body{
          background-color:gray;
          opacity:0.6;
        }
        .ajustar3{
       
            display: flex;
            flex-direction:column;
             justify-content:end;
             width:90vw;

        }
        .graficosexo{
            background-color:blue;
            display: flex;
    flex-direction:row;
    justify-content:center;

        }
        
   





        </style>
    <script type="text/javascript">
        google.charts.load("current", {packages: ['corechart']});
              google.charts.setOnLoadCallback(function () {
            drawChart1();
            drawChart2();
            drawChart3()
            
        });
        function drawChart1() {
            <?php
            $conexao = new PDO('mysql:host=127.0.0.1;dbname=loginportugal', 'root', '');

            if ($conexao) {
                $sql = "SELECT idade, AVG(nota) as nota FROM avaliacao GROUP BY idade";
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
                width: 590,
                height: 300,
                bar: {groupWidth: "95%"},
                legend: { position: "Idade" },
                colors: ['green'],
                fontSize: 14,
                backgroundColor: 'black',
                titleTextStyle: {
            color: 'white' // Defina a cor do texto do título como branco
        }
      
            };

            var chart = new google.visualization.LineChart(document.getElementById("columnchart_values"));
            chart.draw(data, options);
        }

        //outro Gráfico
        function  drawChart2() {
            <?php
            $conexao = new PDO('mysql:host=127.0.0.1;dbname=loginportugal', 'root', '');

            if ($conexao) {
                $sql = "SELECT cidade, AVG(nota) as nota FROM avaliacao GROUP BY cidade";
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
                width: 590,
                height: 300,
                bar: {groupWidth: "91%"},
                bars: 'vertical',
                legend: { position: "rigth" },
                colors: ['red'],
                fontSize: 14,
                backgroundColor: 'black',
                titleTextStyle: {
            color: 'white' // Defina a cor do texto do título como branco
        }
                
            };

            var chart = new google.visualization.BarChart(document.getElementById("grafico2"));
            chart.draw(data, options);
        }


        //grafico3
        function drawChart3() {
            <?php
            $conexao = new PDO('mysql:host=127.0.0.1;dbname=loginportugal', 'root', '');

            if ($conexao) {
                $sql = "SELECT sexo, AVG(nota) as nota FROM avaliacao GROUP BY sexo";
                $stmt = $conexao->query($sql);
                $data = array();

                while ($dados = $stmt->fetch(PDO::FETCH_ASSOC)) {
                    $sexo= $dados['sexo'];
                    $nota = (int)$dados['nota'];
                    $NotaSexo[] = array($sexo, $nota);
                  
                }
            } else {
                echo "console.error('Erro na conexão com o banco de dados.');";
            }
            ?>

            var data = google.visualization.arrayToDataTable([
                ['sexo', 'Nota'],
                <?php
                foreach ($NotaSexo as $row) {
                         echo "['" . $row[0] . "', " . $row[1] . "],";

                }
                ?>
            ]);

            var options = {
                title: "Notas por Sexo",
                width: 490,
                height: 200,
                bar: {groupWidth: "95%"},
                legend: { position: "Idade" },
                colors: ['red', 'green'],
                fontSize: 14,
                backgroundColor: 'black',
                titleTextStyle: {
            color: 'white' // Defina a cor do texto do título como branco
        }
          
            };

            var chart = new google.visualization.PieChart(document.getElementById("grafico4"));
            chart.draw(data, options);
        }

        
      
    </script>
    <title>Dashbord-SitePortugal</title>
</head>
<body>
    <h1>Desempenho do Site Volta ao Mundo</h1>

   
 <div class="ajustar3 row">
  <div id="columnchart_values" class="col" style="width: 700px; height: 200px;"></div><br>
    <div id="grafico2" style="width: 600px; height: 300px; color:red"></div>
    <div id="grafico3" class="col"style="width: 700px; height: 200px;"></div><br>  
    <div id="grafico4" class="col"style="width: 700px; height: 200px;"></div>
 </div>
 
    
</body>
</html>
