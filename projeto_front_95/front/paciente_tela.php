<?php include ("menu.php"); ?>
</div>
<!-- page content -->
<div class="right_col" role="main">
   <div class="">
      <div class="page-title">
         <div class="title_left">
            <?php  
               if ($_GET["erro"]!=""){
               	?>
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
               <strong>Atenção: </strong> <?php  echo ($_GET["erro"]);?>
               <button type="button" class="close" data-dismiss="alert" aria-label="Close">
               <span aria-hidden="true">&times;</span>
               </button>
            </div>
            <?php } ?>
            <h3><i class="fa fa-user">  Cadastro de pacientes</i></h3>
            
         </div>
      </div>
      <div class="clearfix"></div>
      <div class="row">
         <div class="col-md-12 col-sm-12 ">
            <div class="x_content">
               <br />
               <form action="paciente.php" method="post" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">
                  <div class="item form-group">
                     <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Informe seu nome <span class="required">*</span>
                     </label>
                     <div class="col-md-5 col-sm-5 ">
                        <input type="text" id="nome" name="nome" required="required" class="form-control ">
                     </div>
                     <label for="Estado civil">Estado civil <span class="required">*</span>
                     </label>
                     <div class="">
                        <select name="estado_civil" style="padding: 10px; background:#edf2ff; border:none;">
                           <option selected>estado civil</option>
                           <option value="Solteiro">Solteiro</option>
                           <option value="Casado">Casado</option>
                           <option value="Viúvo">Viúvo</option>
                           <option value="Separado">Separado</option>
                           <option value="Divorciado">Divorciado</option>
                        </select>
                     </div>
                  </div>
                  <br>
                  <div class="item form-group">
                     <label class="col-form-label col-md-3 col-sm-3 label-align" for="data">Informe sua data de nascimento <span class="required">*</span>
                     </label>
                     <div class="col-md-3 col-sm-3 ">
                        <input type="date" id="nascimento" name="nascimento" placeholder="dd-mm-aaaa"  required="required" class="form-control">
                     </div>
                     <label for="email" class="col-form-label col-md-3 col-sm-3 label-align">Informe seu email<span class="required">*</span>
                     </label>
                     <div class="col-md-3 col-sm-3 ">
                        <input id="email" class="form-control" type="email" name="email">
                     </div>
                  </div>
                  <div class="item form-group">
                     <label class="col-form-label col-md-3 col-sm-3 label-align" for="cpf">CPF<span class="required">*</span>
                     </label>
                     <div class="col-md-3 col-sm-3 ">
                        <input type="text" id="cpf" name="cpf"  placeholder="000.000.000-00" required="required" class="form-control">
                     </div>
                     <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">RG<span class="required">*</span>
                     </label>
                     <div class="col-md-3 col-sm-3 ">
                        <input type="number" name="RG" class="form-control" placeholder="00000000">
                     </div>
                  </div>
            </div>
            <br>
            <div class="item form-group"></div>
            <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Telefone<span class="required">*</span>
            </label>
            <div class="col-md-3 col-sm-3 ">
            <input type="number" name="telefone" class="form-control" placeholder="00-0000000">
            </div>           
         </div>
      </div>
   </div>
   <br/>
   <label class="col-form-label col-md-3 col-sm-3 label-align" for="doenca">Possue alguma doença cronica? Qual <span class="required">*</span>
   </label>
   <div class="col-md-5 col-sm-5 ">
   <input type="text" id="doenca_cronica" name="doenca_cronica" required="required" class="form-control ">
   </div>
   <br> <br> <br>
   <h5>Filiação</h5>
   <div class="row x_title">
   </div>
   <br>
   <div class="item form-group">
   <label class="col-form-label col-md-3 col-sm-3 label-align" for="nmae">Nome da Mãe<span class="required">*</span>
   </label>
   <div class="col-md-3 col-sm-3 ">
   <input type="text" id="nmae" name="nmae" required="required" class="form-control">
   </div>
   </div>
   <div class="item form-group">
   <label class="col-form-label col-md-3 col-sm-3 label-align" for="npai">Nome do Pai<span class="required">*</span>
   </label>
   <div class="col-md-3 col-sm-3 ">
   <input type="text" id="npai" name="npai" required="required" class="form-control">
   </div>
   </div>
   <h5>Endereço</h5>
   <div class="row x_title">
   </div>
   <br>
   <div class="item form-group">
   <label class="col-form-label col-md-3 col-sm-3 label-align" for="cep">Cidade <span class="required">*</span>
   </label>
   <div class="col-md-8 col-sm-8 ">
   <select name="cidade" style="padding: 10px; background:#edf2ff; border:none;">
   <option selected >cidade</option>
   <option value="Carinhanha">Carinhanha</option>
   <option value="Salvador">Salvador</option>
   <option value="Mata de São João">Mata de São João</option>
   </select>
   </div>
   </div>
   <div class="item form-group">
   <label class="col-form-label col-md-3 col-sm-3 label-align" for="rua">Rua<span class="required">*</span>
   </label>
   <div class="col-md-8 col-sm-8 ">
   <input type="text" id="rua" name="rua" required="required" class="form-control ">
   </div>
   </div>
   <div class="item form-group">
   <label class="col-form-label col-md-3 col-sm-3 label-align" for="bairro">Bairro<span class="required">*</span>
   </label>
   <div class="col-md-8 col-sm-8 ">
   <input type="text" id="bairro" name="bairro" required="required" class="form-control ">
   </div>
   </div>
   <div class="item form-group">
   <label class="col-form-label col-md-3 col-sm-3 label-align" for="numero">Numero<span class="required">*</span>
   </label>
   <div class="col-md-8 col-sm-8 ">
   <input type="number" id="numero" name="numero" required="required" class="form-control ">
   </div>
   </div>
   <div class="ln_solid"></div>
   <div class="item form-group">
   <div class="col-md-6 col-sm-6 offset-md-3">
   <button type="reset" class="btn btn-outline-info">Limpar</button>
   <button type="submit" name="enviar" value="enviar" class="btn btn-outline-info">Enviar</button>
   </div>
   </div>
   </form>
</div>
</div>
</div>
</div>
<?php include ("rodape.html"); ?>
