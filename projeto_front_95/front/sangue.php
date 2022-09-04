<?php include ("menu.php"); ?>
        </div>

		

			<!-- page content -->
			<div class="right_col" role="main">
				<div class="">
					<div class="page-title">
						<div class="title_left">

							
							<h3>Doação de sangue</h3>
                     
				
						</div>

					</div>
					<div class="clearfix"></div>
					<div class="row">
						<div class="col-md-12 col-sm-12 ">
			
								<div class="x_content">
									<br />
									<form action="bolsasangue.php" method="post" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">

										<div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Doador:<span class="required">*</span>
											</label>
											<div class="col-md-8 col-sm-8 ">
												<input type="text" name= "doador" id="first-name" required="required" class="form-control ">
											</div>
										</div>

										<div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">tipo sanguineo:<span class="required">*</span>
											</label>
											<div class="col-md-2 col-sm-2 ">
											<select name="tipo_sanguineo"> 
											<option>selecione tipo sanguineo</option>
												<option value="A+">A+</option>
												<option value="B+">B+</option>
												<option value="AB+">AB+</option>
												<option value="O+">O+</option>
												<option value="A-">A-</option>
												<option value="B-">B-</option>
												<option value="AB-">AB-</option>
												<option value="O-">O-</option>
											</select>
											</div>
										
											<label for="email" class="col-form-label col-md-3 col-sm-3 label-align">nome:<span class="required">*</span></label>
											<div class="col-md-3 col-sm-3 ">
											<input id="name" class="form-control" type="text" name="nome">
											</div>
										</div>
											
										

										
													<br>
													<br>
											

											<div class="ln_solid"></div>
											<div class="item form-group">
											<div class="col-md-6 col-sm-6 offset-md-3">
												<button type="button" class="btn btn-outline-info">Cancelar</button>
												<button type="button" class="btn btn-outline-info">Limpar</button>
												<button type="submit" class="btn btn-outline-info">Enviar</button>
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