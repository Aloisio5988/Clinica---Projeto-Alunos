<?php include ("menu.php"); ?>
        </div>


        <!-- page content -->
        <div class="right_col" role="main">
          <!-- top tiles -->
          <h1><b>Principal</b></h1>
          <div class="row" style="display: inline-block;" >
          
        </div>
          <!-- /top tiles -->

          <div class="row">
            
              

              <style>
    .bolsa {
      padding: 80px 50px;
      background: red;
      color: #ccc;
      border: 2px solid #ccc;
      text-decoration: white;
      border-radius: 30px;
      font-size: 15px;

    }
    .bolsa:hover { background: black; }
    .paciente {
      padding: 80px 50px;
      background: blue;
      color: #ccc;
      border: 2px solid #ccc;
      text-decoration: none;
      border-radius: 30px;
      font-size: 15px;
    }
    .paciente:hover { background: black; }

    .funcionario {
      padding: 80px 50px;
      background: blueviolet;
      color: #ccc;
      border: 2px solid #ccc;
      text-decoration: none;
      border-radius: 30px;
      font-size: 15px;
    }
    .funcionario:hover { background: black; }
  </style>
<br>
      <a href="tela_principal.php" class="paciente"><i class="fa fa-users"></i> <b>Paciente</b>
      <br>Acesse tudo sobre Pacientes</a>

      <a href="funcionario_lista.php" class="funcionario"><i class="fa fa-user-md"></i> <b>Funcionário</b>
      <br> Acesse tudo sobre Funcionário</a>

      <a href="bolsa_lista.php" class="bolsa"><i class="fa fa-heartbeat"></i> <b>Bolsa de Sangue</b>
      <br> Acesse tudo sobre Doação de Sangue</a>

          </div>
          <br/>
<!-- GRAFICO DE DOAÇÕES -->

<?php

require 'conexao_principal.php';

?>

<di class="row">
  <div class="col-md-5 col-sm-5">
    <div class="dashboard_graph">
      <!-- js of google of chart -->
      <script type="text/javascript" src="https://www.google.com/jsapi"></script>
      <script type="text/javascript">
        google.load("visualization", "1", {
          packages: ["corechart"]
        });
        google.setOnLoadCallback(drawChart);

        function drawChart() {

          var data_val = google.visualization.arrayToDataTable([
            ['tipo_sanguineo', 'total'],
            <?php
            $pdo = conecta();
            $menuQuery = $pdo->prepare("SELECT tipo_sanguineo, COUNT(tipo_sanguineo) AS total FROM banco_sangue GROUP BY tipo_sanguineo");
            $menuQuery->execute();
            while ($menuRow = $menuQuery->fetch(PDO::FETCH_ASSOC)) {
              echo "['" . $menuRow['tipo_sanguineo'] . "'," . $menuRow['total'] . "],";
            }
            ?>
          ]);

          var options_val = {
            title: 'Doações de Sangue 2022'
          };

          var chart_val = new google.visualization.PieChart(document.getElementById('piechart'));

          chart_val.draw(data_val, options_val);
        }
      </script>

      <body>
        <div id="piechart" style="width: 510px; height: 350px;"></div>
      </body>
      <div class="clearfix"></div>
    </div>
  </div>
  <div class="col-md-5 col-sm-5">

    <!-- Grafico 2 -->

    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load("current", {
        packages: ['corechart']
      });
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ["Cidade", "Total" ],
          <?php
          $pdo = conecta();
          $menuQuery = $pdo->prepare("SELECT cidade, COUNT(cidade) AS total FROM paciente GROUP BY cidade");
          $menuQuery->execute();
          while ($menuRow = $menuQuery->fetch(PDO::FETCH_ASSOC)) {
            echo "['" . $menuRow['cidade'] . "'," . $menuRow['total'] . "],";
          }
          ?>

        ]);

        var view = new google.visualization.DataView(data);
        view.setColumns([0,
          {
            calc: "stringify",
            sourceColumn: 1,
            type: "string",
            role: "annotation"
          },
          1
        ]);

        var options = {
          title: "Cidades dos Pacientes",
          width: 600,
          height: 400,
          bar: {
            groupWidth: "95%"
          },
          legend: {
            position: "none"
          },
        };
        var chart = new google.visualization.ColumnChart(document.getElementById("columnchart_values"));
        chart.draw(view, options);
      }
    </script>
    <div id="columnchart_values" style="width: 500px; height: 300px;"></div>
        </div>
        <!-- /page content -->

        <?php include ("rodape.html"); ?>