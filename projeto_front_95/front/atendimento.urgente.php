<?php
include("menu.php");
//session_start();
?>
</div>

<!-- page content -->
<div class="right_col" role="main">
	<div class="">
		<div class="page-title">
			<div class="title_left">


				<h3>Atendimento Urgente</h3>


			</div>

		</div>
		<div class="clearfix"></div>
		<div class="row">
			<div class="col-md-12 col-sm-12 ">

				<div class="x_content">
					<br />
					<form action="paciente.php" method="post" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">

						<div class="item form-group">
							<label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">Urgencia:<span class="required">*</span>
							</label>
							<div class="col-md-2 col-sm-2 ">
								<input type="text" id="last-name" name="last-name" required="required" class="form-control">

							</div>
						</div>

						<div class="item form-group">
							<label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Telefone<span class="required">*</span>
							</label>
							<div class="col-md-3 col-sm-3 ">
								<input type="number" class="form-control" placeholder="00-0000000">


							</div>
						</div>

						<div class="item form-group">
							<label class="col-form-label col-md-3 col-sm-3 label-align" for="data">Data: <span class="required">*</span>
							</label>
							<div class="col-md-3 col-sm-3 ">
								<input type="date" id="data" name="data" placeholder="dd-mm-aaaa" required="required" class="form-control">
							</div>
						</div>




						<br>
						<br>


						<div class="ln_solid"></div>
						<div class="item form-group">
							<div class="col-md-6 col-sm-6 offset-md-3">
								<button type="reset" class="btn btn-outline-info">Limpar</button>
								<button type="submit" name="verificar" value="verificar" class="btn btn-outline-info">Verificar</button>
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