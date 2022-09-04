<?php include ("menu.php"); ?>
        </div>

		

			<!-- page content -->
			<div class="right_col" role="main">
				<div class="">
					<div class="page-title">
						<div class="title_left">

							
							<h3>Cadastro de Funcionário</h3>
                     
				
						</div>

					</div>
					<div class="clearfix"></div>
					<div class="row">
						<div class="col-md-12 col-sm-12 ">
			
								<div class="x_content">
									<br />
									<form action="funcionario.php" method="post" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">

										<div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Nome <span class="required">*</span>
											</label>
											<div class="col-md-8 col-sm-8 ">
												<input type="text" id="first-name" name="nome" required="required" class="form-control ">
											</div>
										</div>

										<div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">Nascimento <span class="required" placeholder="00/00/0000">*</span>
											</label>
											<div class="col-md-2 col-sm-2 ">
												<input type="date" id="last-name" name="nascimento" placeholder="dd-mm-yyyy"  required="required" class="form-control">
											</div>
										
											<label for="email" class="col-form-label col-md-3 col-sm-3 label-align">Email</label><span class="required">*</span>
											<div class="col-md-3 col-sm-3 ">
											<input id="email" class="form-control" type="email" name="email"  placeholder="CDG@gmail.com">
											</div>
										</div>
											
										

									
										
											<label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">CPF</label><span class="required">*</span>
											<div class="col-md-3 col-sm-3 ">
											<input oninput="cpf_exemplo(this)" type="text" 
        									placeholder="000.000.000-00" name="cpf" id="cpf" class="form-control"/>
											</div>
										</div>
                                           

										   <div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="number">Telefone<span class="required">*</span>
											</label>
											<div class="col-md-2 col-sm-2 ">
												<input type="text"  name="telefone" class="form-control" placeholder="(00) 00000-0000">
											</div>
										   </div>
										
											<label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">RG</label><span class="required">*</span>
											<div class="col-md-3 col-sm-3 ">
												<input type="text" name="rg" class="form-control" placeholder="0000000"/>
											</div>
											<br>
											<br>
											<br>
									<div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="cep">Cidade <span class="required">*</span>
											</label>
											<div class="col-md-3 col-sm-3 ">
											<select class= "form-control" name= "cidade" style="padding: 10px; background:#edf2ff; border:none;">
										<option selected>Cidade</option>
										<option value="Carinhanha">Carinhanha</option>
										<option value="Salvador">Salvador</option>
										<option value="Mata de São João">Mata de São João</option>
										</select>
											</div>
										</div>
										
										<div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="cep">Genero <span class="required">*</span>
											</label>
											<div class="col-md-3 col-sm-3 ">
											<select class= "form-control" name= "genero" style="padding: 10px; background:#edf2ff; border:none;">
										<option selected>Genero</option>
										<option value="Homem">Homem</option>
										<option value="Mulher">Mulher</option>
										<option value="Outro">Outro</option>
										</select>
											</div>
										</div>

											<div class="item form-group">
												<label class="col-form-label col-md-3 col-sm-3 label-align" for="rua">Rua:<span class="required">*</span>
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
														<label class="col-form-label col-md-3 col-sm-3 label-align" for="numero">Numero:<span class="required">*</span>
														</label>
														<div class="col-md-8 col-sm-8 ">
														<input type="number" id="numero" name= "numero" required="required" class="form-control ">
														</div>
														</div>
													
														<div class="item form-group">
													<label class="col-form-label col-md-3 col-sm-3 label-align" for="text">Pai<span class="required">*</span>
													</label>
													<div class="col-md-2 col-sm-2 ">
													<input type="text" name="pai" class="form-control"> 
													</div>
										   			</div>
										
													<label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Mãe<span class="required">*</span></label>
													<div class="col-md-3 col-sm-3 ">
													<input type="text" name="mae" class="form-control"> 
													</div>

													<div class="item form-group">
													<label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Estado Civil<span class="required">*</span></label>
													<div class="col-md-3 col-sm-3 ">
													<input type="text" name="estado_civil" class="form-control"> 
													</div>
													</div>
										
													<label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Especialidade<span class="required">*</span></label>
													<div class="col-md-3 col-sm-3 ">
													<input type="text" name="especialidade" class="form-control"> 
													</div>
													<br>
													<br>
											

											<div class="ln_solid"></div>
											<div class="item form-group">
											<div class="col-md-6 col-sm-6 offset-md-3">
												<button type="reset" class="btn btn-outline-info">Limpar</button>
												<button type="submit" class="btn btn-outline-info">Enviar</button>
											</div>
											</div>
										


								
									</form>
								</div>
							</div>
						</div>
					</div>
					<?php include ("rodape.html"); ?>