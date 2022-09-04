<?php
unset( $_SESSION['id_login'] );  // irá remover apenas os dados de 'palavra'
session_destroy();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Coding Hospital</title>
	<!-- Site favicon -->
	<link rel="shortcut icon" href="images/icon.jpeg">
	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<!-- Google Font -->
	<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Nunito:200,300,400,600,700" rel="stylesheet">
	<!-- Icon Font -->
	<link rel="stylesheet" href="fonts/ionicons/css/ionicons.css">
	<!-- Text Font -->
	<link rel="stylesheet" href="fonts/font.css">
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="css/bootstrap.css">
	<!-- Normal style CSS -->
	<link rel="stylesheet" href="css/style.css">
	<!-- Normal media CSS -->
	<link rel="stylesheet" href="css/media.css">
</head>
<center><body>
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
                        
         </div>
      </div>

	<!-- Header end -->
	<main class="cd-main">
		<section class="cd-section index7 visible">
			<div class="cd-content style7">
				<div class="login-box">
					<div class="login-form-slider">
						<!-- login slide start -->
						<div class="login-slide slide">
							<div class="login-header">
								<div class="sign-up-txt text-right">
								
								<center><b><h4>Coding Hospital</h4></b></center>
								</div>
							</div>
							</b><form action="confirmacao.php" method="post" class="padding-40px">
								<div class="form-group user-name-field">
									<input type="text" name="usuario" class="form-control" placeholder="Usuário">
									<div class="field-icon"><i class="ion-person"></i></div>
								</div>
								<div class="form-group margin-bottom-30px forgot-password-field">
									<input type="password" name="senha" class="form-control" placeholder="Senha">
									<div class="field-icon"><i class="ion-locked"></i></div>
									
								</div>
								<div class="form-group sign-in-btn">
									<input type="submit" class="submit" value="Acessar">
								</div>
								<div>
									<a class="reset_pass" href="#">Esqueceu sua senha?</a>
								</div>

									<div class="separator">
										<p class="change_link">Primeiro acesso?
										  <a href="#signup" class="to_register"> Cadastre-se </a>
										</p>
										
							</form>
						</div>
						
						
						
					
						<!-- forgot password slide end -->
					</div>
				</div>
			</div>
		</section>
	</main>
	<div id="cd-loading-bar" data-scale="1"></div>
	<!-- JS File -->
	<script src="js/modernizr.js"></script>
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/popper.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script>
	<script src="js/velocity.min.js"></script>
	<script type="text/javascript" src="js/script.js"></script>
</body></center>
</html>