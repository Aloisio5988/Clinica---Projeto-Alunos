<?php 
include("paciente_conexao.php");
$grupo = selectAllPessoa();

include ("menu.php"); ?>
</div>
<!-- page content -->
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
            <h3><i class="fa fa-user">  Lista de pacientes</i></h3>
            
         </div>
      </div>
      <div class="clearfix"></div>
      <div class="row">
         <div class="col-md-12 col-sm-12 ">
            <div class="x_content">
                
      <table border="1" class="table">
          <thead class="thead-light">
              <tr>
                  <th>Nome</th>
                  <th>Nascimento</th>
                  <th>Telefone</th>
                  <th>Endereço</th>
                  <th>Editar</th>
                  <th>Excluir</th>
              </tr>
          </thead>
          <tbody>
             <?php 
                foreach($grupo as $pessoa) { ?>

                   <tr>
                      <th><?=$pessoa["nome"]?></th>
                      <th><?=formatoData($pessoa["nascimento"])?></th>
                      <th><?=$pessoa["telefone"]?></th>
                      <th><?php echo ("Cidade: ".$pessoa["cidade"]." \n Rua: ".$pessoa["rua"]);?></th>
                      <th>
                          <form name="alterar" action="alterar.php" method="post">
                              <input type="hidden" name="id" value="<?=$pessoa["id"]?>">
                              <input type="submit" name="editar" value="Editar">
                          </form>
                      </th>
                      <th>
                          <form name="excluir" action="paciente_conexao.php" method="post">
                              <input type="hidden" name="id_paciente" value="<?=$pessoa["id_paciente"]?>">
                              <input type="hidden" name="acao" value="excluir">
                              <input type="submit" name="excluit" value="Excluir">
                          </form>
                      </th>
                  </tr>   
                <?php }
              ?>
          </tbody>
     </table>
   
       <?php
            // Função para formatar a data
            function formatoData($data) {
                $array = explode("-", $data);
                $novaData = $array[2]."/".$array[1]."/".$array[0];
                return $novaData;
            }

        ?>
               
               
</div>
</div>
</div>
</div>
<?php include ("rodape.html"); ?>
