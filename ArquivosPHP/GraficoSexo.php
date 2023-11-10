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
    
            height:90vh;
            padding-top:2%;
            padding-left:18%;

        }
        
   





        </style>
    <script type="text/javascript">
        google.charts.load("current", {packages: ['corechart']});
              google.charts.setOnLoadCallback(function () {
             drawChart3()
            
        });
       

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
                width: 790,
                height: 500,
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
<header>
    <nav class="navbar navbar-expand-lg navbar-light bg-dark">
  <a class="navbar-brand" href="#"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class=" navbar-collapse" id="navbarToggleExternalContent">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link  corAltera" href="Grafico.php">Desempenho do site</a>
      </li>
      <li class="nav-item">
        <a class="nav-link  corAltera" href="ListarComentarios.php">ListarComentarios</a>
      </li>
      <li class="nav-item">
        <a class="nav-link  corAltera" href="usuario-logout.php"><img src="errado.png" width="30px"></a>
      </li>
  
    </ul>
  </div>
</nav>
</header>
<body>
    <h1>Desempenho do Site Volta ao Mundo</h1>

   
 <div class="graficosexo">
  
    <div id="grafico4" class="col "style="width: 700px; height: 200px;"></div>

 </div>
 
    
</body>
</html>
