<HTML>
	<HEAD><TITLE>Exibir Data e Hora em HTML </TITLE>
		<script src="https://code.jquery.com/jquery-1.11.2.js"></script>
		<script type="text/javascript">
			jQuery(window).load(function($){
				atualizaRelogio();
			});
		</script>
	</HEAD>
   <?php
   include("pontocone.crud.php");
   session_start();
   if($_SESSION ["id_login"]==""){
      $erro = "Necessário fazer login";
      header ("Location: ../login/index.php?erro=$erro");
   }
   $id = $_SESSION ["id_login"];
   $grupo = selectAllpontofuncionario($id);
   include ("menu.php"); ?>  
</div>
<div class="right_col" role="main">
   <div class="">
      <div class="page-title">
         <div class="title_left">
         	
            <?php  
               if ($_GET["msg"]!=""){
               	?>
            <div class="alert alert-success alert-dismissible fade show" role="alert">
               <strong>Atenção: </strong> <?php  echo ($_GET["msg"]);?>
               <button type="button" class="close" data-dismiss="alert" aria-label="Close">
               <span aria-hidden="true">&times;</span>
               </button>
            </div>
            <?php } ?>
            <h2>Coding Hospital</h2>
            <div class="row x_title">
											</div>

            <h3><i class="fa fa-user">  Ponto de serviço</i></h3>
            <br>
            
         </div>
      </div>
      <br>
      <div class="x_panel">
      <h2><i class="fa fa-book" style="font-size:24px"> Registrar Ponto</i></h2>
      <div>
      <i class="fa fa-calendar" style="font-size:24px" aria-hidden="true"></i> <output id="data" style="font-family: 'arial black', 'avant garde'; font-size: 15px;"></output>
		</div>
		<div>
      <i class="fa fa-clock-o" style="font-size:24px" aria-hidden="true"></i> <output id="hora" style="font-family: 'arial black', 'avant garde'; font-size: 30px;"></output>				
		</div>	

      <div class="clearfix"></div>
      <div class="row">
         <div class="col-md-6 col-sm-6 ">
            <div class="x_content">
              <form action="pontocone.php" method="POST">
      <table border="1" class="table">
          <thead class="thead-light">
          <thead class="thead-light">
          <tr>
          <th>Entrada</th>
          <th>Saída Almoço</th>
          <th>Retorno almoço</th>
          <th>Fim</th>
          </tr>
</thead>
<tbody>
<?php
 foreach($grupo as $pessoa) { ?>
<tr>
<th><?=$pessoa["hora_1"]?></th>
<th><?=$pessoa["hora_2"]?></th>
<th><?=$pessoa["hora_3"]?></th>
<th><?=$pessoa["hora_4"]?></th>
</tr>
<?php }
?>
</tbody>
</table>
<form action="pontocone.php" method="post">
<button type="submit" class="btn btn-outline-secondary">Enviar</button>
</form> 
          <script>
		function atualizaRelogio(){ 
			var momentoAtual = new Date();
			
			var vhora = momentoAtual.getHours();
			var vminuto = momentoAtual.getMinutes();
			var vsegundo = momentoAtual.getSeconds();
			
			var vdia = momentoAtual.getDate();
			var vmes = momentoAtual.getMonth() + 1;
			var vano = momentoAtual.getFullYear();
			
			if (vdia < 10){ vdia = "0" + vdia;}
			if (vmes < 10){ vmes = "0" + vmes;}
			if (vhora < 10){ vhora = "0" + vhora;}
			if (vminuto < 10){ vminuto = "0" + vminuto;}
			if (vsegundo < 10){ vsegundo = "0" + vsegundo;}

			dataFormat = vdia + " / " + vmes + " / " + vano;
			horaFormat = vhora + " : " + vminuto + " : " + vsegundo;

			document.getElementById("data").innerHTML = dataFormat;
			document.getElementById("hora").innerHTML = horaFormat;

			setTimeout("atualizaRelogio()",1000);
		}
	</script>

<tbody>


</php>


<?php include ("rodape.html"); ?>