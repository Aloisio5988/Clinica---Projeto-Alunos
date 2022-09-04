<?php
session_start();
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" href="images/nome.ico.ico" type="image/ico" />

    <title>Coding Hospital</title>

    <!-- Bootstrap -->
    <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="../vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="../vendors/iCheck/skins/flat/green.css" rel="stylesheet">
	
    <!-- bootstrap-progressbar -->
    <link href="../vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
    <!-- JQVMap -->
    <link href="../vendors/jqvmap/dist/jqvmap.min.css" rel="stylesheet"/>
    <!-- bootstrap-daterangepicker -->
    <link href="../vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="../build/css/custom.min.css" rel="stylesheet">
  </head>

  <body class="nav-md">
 
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="index.html" class="site_title"><i class="fa fa-hospital-o"></i> <span>Coting Hospital </span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <img src="images/img.jpg" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span style = color:black >Bem vindo ao,</span>
                <h2>Coding Hospital</h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>Coting Hospital</h3>
                <ul class="nav side-menu">
                  <li><a><i class="fa fa-home"></i> Paciente <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="paciente_tela.php">Cadastro de paciente </a></li>
					
                      <li><a href="indexa.html">Consultar dados Paciente</a></li>                      
                    </ul>
                  </li>
                  <li><a><i class="fa fa-edit"></i> Funcionário <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="funcionario_tela.php">Cadastro de Funcionário</a></li>
                      <li><a href="indexa.html">Consultar dados de funcionários</a></li>
                    </ul>
                  </li> 
                </ul>
              </div>
              <div class="menu_section">
                <h3>Página Principal</h3>
                <ul class="nav side-menu">                               
                  <li><a href="index.html"><i class="fa fa-home"></i>Inicio</li>
                </ul>
              </div>
            </div>
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
            <div class="sidebar-footer hidden-small">              
              <a data-toggle="tooltip" data-placement="top" title="Logout" href="../login/index.html">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
              </a>
            </div>
            <!-- /menu footer buttons -->
          </div>
        </div>

		

			<!-- page content -->
			<div class="right_col" role="main">
				<div class="">
					<div class="page-title">
						<div class="title_left">

							
							<h3>Vacinas Disponiveis</h3>
                     
				
						</div>

					</div>
					<div class="clearfix"></div>
					<div class="row">
						<div class="col-md-12 col-sm-12 ">
			
								<div class="x_content">
									<br />
									<form action="paciente.php" method="post" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">

										<div class="item form-group">
                                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">Vacina Disponivel:<span class="required">*</span>
											</label>
											<div class="col-md-2 col-sm-2 ">
												<input type="text" id="last-name" name="last-name"  required="required" class="form-control">
										
											</div>
										</div>

                                        <div class="item form-group">
                                        <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Estoque<span class="required">*</span>
											</label>
											<div class="col-md-3 col-sm-3 ">
                                                <input type= "name" id="name" required="required" class="form-control">
											
										
											</div>
										</div>

										<div class="item form-group">
                                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="data">Nome: <span class="required">*</span>
											</label>
											<div class="col-md-3 col-sm-3 ">
												<input type="name" id="name" name="name"  required="required" class="form-control">
									    </div>
										</div>
											
										

										
													<br>
													<br>
											

											<div class="ln_solid"></div>
											<div class="item form-group">
											<div class="col-md-6 col-sm-6 offset-md-3">
												<button type="button" class="btn btn-outline-info">Cancelar</button>
												<button type="button" class="btn btn-outline-info">Limpar</button>
												<button type="button" class="btn btn-outline-info">Verificar</button>
											</div>
											</div>
										


								
									</form>
								</div>
							</div>
						</div>
					</div>
						

			<!-- footer content -->
			<footer>
				<div class="pull-right">
					Sistemas desenvolvido pelos alunos do Senac</a>
				</div>
				<div class="clearfix"></div>
			</footer>
			<!-- /footer content -->
		</div>
	</div>

	<!-- jQuery -->
	<script src="../vendors/jquery/dist/jquery.min.js"></script>
	<!-- Bootstrap -->
	<script src="../vendors/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
	<!-- FastClick -->
	<script src="../vendors/fastclick/lib/fastclick.js"></script>
	<!-- NProgress -->
	<script src="../vendors/nprogress/nprogress.js"></script>
	<!-- bootstrap-progressbar -->
	<script src="../vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
	<!-- iCheck -->
	<script src="../vendors/iCheck/icheck.min.js"></script>
	<!-- bootstrap-daterangepicker -->
	<script src="../vendors/moment/min/moment.min.js"></script>
	<script src="../vendors/bootstrap-daterangepicker/daterangepicker.js"></script>
	<!-- bootstrap-wysiwyg -->
	<script src="../vendors/bootstrap-wysiwyg/js/bootstrap-wysiwyg.min.js"></script>
	<script src="../vendors/jquery.hotkeys/jquery.hotkeys.js"></script>
	<script src="../vendors/google-code-prettify/src/prettify.js"></script>
	<!-- jQuery Tags Input -->
	<script src="../vendors/jquery.tagsinput/src/jquery.tagsinput.js"></script>
	<!-- Switchery -->
	<script src="../vendors/switchery/dist/switchery.min.js"></script>
	<!-- Select2 -->
	<script src="../vendors/select2/dist/js/select2.full.min.js"></script>
	<!-- Parsley -->
	<script src="../vendors/parsleyjs/dist/parsley.min.js"></script>
	<!-- Autosize -->
	<script src="../vendors/autosize/dist/autosize.min.js"></script>
	<!-- jQuery autocomplete -->
	<script src="../vendors/devbridge-autocomplete/dist/jquery.autocomplete.min.js"></script>
	<!-- starrr -->
	<script src="../vendors/starrr/dist/starrr.js"></script>
	<!-- Custom Theme Scripts -->
	<script src="../build/js/custom.min.js"></script>

</body>
</html>