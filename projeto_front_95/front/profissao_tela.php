<?php include ("menu.php"); ?>
</div>
<!-- page content -->
<div class="right_col" role="main">
  
      <div class="page-title">
       <div class="title_left">
         <h3><i class="fa fa-user"> Lista de funções</i></h3>
      </div>
   </div>
   <div class="clearfix"></div>
   <div class="row">
      <div class="col-md-12 col-sm-12 ">
         <div class="x_content">
            <br />
            <form action="paciente.php" method="post" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">
               <div class="item form-group">
                  <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Função </label>
                  <div class="col-md-5 col-sm-5 ">
                     <input type="text" id="nome" name="nome" required="required" class="form-control ">
                  </div>
                  <label for="Estado civil">Nível <span class="required">*</span>
                  </label>
                  <div>
                     <select name="Nível" style="padding: 10px; background:#edf2ff; border:none;">
                        <option selected>Nível</option>
                        <option value="Geral">Geral</option>
                        <option value="Especialista">Especialista</option>
                        <option value="Administrador">Administrador</option>
                     </select>
                  </div>
               </div>
               <div class="clearfix"></div>
               <center>
                  <div class="item form-group">
                     <div class="col-md-6 col-sm-6 offset-md-3">
                        <button type="reset" class="btn btn-outline-info">Limpar</button>
                        <button type="submit" name="enviar" value="enviar" class="btn btn-outline-info">Enviar</button>
                     </div>
                  </div>
               </center>
            </form>
         </div>
      </div>
    </div>
   
</div>
