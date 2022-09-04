<?php
session_start();
$nome = $_SESSION["nome"];
?>
	
 <!DOCTYPE html>
 <html lang="en">
   <head>
     <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
     <!-- Meta, title, CSS, favicons, etc. -->
     <meta charset="utf-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <link rel="icon" href="images/favicon.ico" type="image/ico" />
 
     
 
 
     <title>CH</title>
 
   
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
               <a href="principal.php" class="site_title"><i class="fa fa-hospital-o"></i> <span>Coding Hospital </span></a>
              </div>
  
              <div class="clearfix"></div>
  
              <!-- menu profile quick info -->
              <div class="profile clearfix">
                <div class="profile_pic">
                  <img src="images/img.jpg" alt="..." class="img-circle profile_img">
                </div>
                <div class="profile_info">
                  <span>Bem vindo,</span>
                  <h2><?php echo ($nome);?></h2>
                </div>
              </div>
              <!-- /menu profile quick info -->
  
              <br />
  
              <!-- sidebar menu -->
              <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
                <div class="menu_section">
                  <h3>Coding Hospital</h3>
                  <ul class="nav side-menu">
                    <li><a><i class="fa fa-users"></i> Paciente <span class="fa fa-chevron-down"></span></a>
                      <ul class="nav child_menu">
                      <li><a href="tela_principal.php">Tela Principal</a></li>
                        <li><a href="paciente_tela.php">Cadastro de Paciente</a></li>
                        <li><a href="marcar.consulta.php">Marcar Consulta</a></li>  
                        <li><a href="paciente_lista.php">Consultar Lista de Pacientes</a></li>                      
                      </ul>
                    </li>
                    <li><a><i class="fa fa-user-md"></i> Funcionário <span class="fa fa-chevron-down"></span></a>
                      <ul class="nav child_menu">
                        <li><a href="funcionario_tela.php">Cadastro de Funcionário</a></li>
                        <li><a href="consulta.php">Cadastrar Consulta</a></li>
                        <li><a href="funcionario_lista.php">Consultar dados de funcionários</a></li>
                      </ul>
                    </li>  
                   
                    <li><a><i class="fa fa-briefcase"></i> Profissão <span class="fa fa-chevron-down"></span></a>
                      <ul class="nav child_menu">
                        <li><a href="profissao_tela.php">Cadastro de Profissão</a></li>
                        <li><a href="funcionarioprofissao_lista.php">Funcionário / Profissão</a></li>
                      </ul>
                    </li>  

                    <li><a><i class="fa fa-heartbeat"></i> Bolsa de Sangue <span class="fa fa-chevron-down"></span></a>
                      <ul class="nav child_menu">
                        <li><a href="sangue.php">Cadastro de Doação</a></li>
                        <li><a href="bolsa_lista.php">Listagem de doações</a></li>
                      </ul>
                    </li>  
                    <li><a><i class="fa fa-stethoscope"></i> Especialidade <span class="fa fa-chevron-down"></span></a>
                      <ul class="nav child_menu">
                        <li><a href="cadastro_especialidade.php">Cadastro de Especialide</a></li>
                        <li><a href="especialidade_lista.php">Listagem de Especialidades</a></li>
                      </ul>
                    </li>
                    <li><a><i class="fa fa-clock-o"></i> Bater Ponto <span class="fa fa-chevron-down"></span></a>
                      <ul class="nav child_menu">
                        <li><a href="ponto.php">Folha de ponto</a></li>
                      </ul>
                    </li>
                    <li><a><i class="fa fa-comments-o"></i> Sobre <span class="fa fa-chevron-down"></span></a>
                      <ul class="nav child_menu">
                        <li><a href="perguntas.php">Perguntas Frequentes</a></li>
                        <li><a href="reclame_aqui.php">Reclamações</a></li>
                      </ul>
                    </li>
                        <li><a href="atendimento.urgente.php">Atendimento Urgente</a></li>
                      </ul>
                    </li>
                  </ul>
                </div>
                <div class="menu_section">
                  <h3>Página Principal</h3>
                  <ul class="nav side-menu">                               
                    <li><a href="principal.php"><i class="fa fa-hospital-o"></i>Inicio</a></li>
                  </ul>
                </div>
              </div>
              <!-- /sidebar menu -->
  
             
              <!-- /menu footer buttons -->
            </div>