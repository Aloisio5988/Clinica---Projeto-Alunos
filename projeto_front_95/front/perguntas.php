<?php include ("menu.php"); ?>
        </div>

			<!-- page content -->
			<div style="background-color: #fff" class="right_col" role="main">
				<div class="">
					<div class="page-title">
						<div class="title_left">
							
							<h3> <b>Coding Hospital</b> </h3>

              <div class="row x_title">
              </div>
             
              <h3><i class="fa fa-edit"><b>Perguntas frequentes</b></h3></i>
             
    <br> 
   
    
      <div class="layout">
        <div class="accordion">
          <div class="accordion__question">
            <p><b>Como realizar uma marcação de consulta ou exame?</b></p>
      
          </div>
          <div class="accordion__answer">
            <p> A marcação de consulta ou exame pode ser realizada através dos telefones (00) 0000-0000. 
                Ou se preferir você pode realizar a pré-marcação online atraves da nossa platarforma; 
                <a href="https://www.homehost.com.br/">Marcar exame</a>

               <!-- /o link vai ser redirecionada pra pagina de marcar exame -->
            </p>
          </div>
        </div>
      
        <div class="accordion">
          <div class="accordion__question">
            <p><b>Quais especialidades e serviços são atendidos na clinica?</b></p>
          </div>
      
          <div class="accordion__answer">
            <p>
                Entre em contato com a nossa central de atendimento, através do telefone (00) 0000-0000, ou acesse nossa lista 
                de especialidade atraves da nossa plataforma;
                <a href="https://www.homehost.com.br/">Lista de especialidade </a>
<!-- /o link vai ser redirecionada pra pagina de Lista de especialidade -->


            </p>
        </div>
    </div>

            <div class="accordion">
                <div class="accordion__question">
                  <p><b>Como faço pra doar sangue?</b></p>
                </div>
            
                <div class="accordion__answer">
                    <p>
                    
                        Entre em contato com a nossa central de atendimento, através do telefone (00) 0000-0000, ou cadastre-se atraves da nossa plataforma;
                        <a href="file:///C:/laragon/www/projeto_front/front/sangue.html"> Doação de sangue </a>
        
                    </p>


          </div>
        </div>

        <div class="accordion">
            <div class="accordion__question">
              <p><b>Requesitos basicos para doação de sangue.</b></p>
            </div>

            <div class="accordion__answer">
                <p>
                    • Estar em boas condições de saúde.
                    <br>
                    • Ter entre 16 e 69 anos, desde que a primeira doação tenha sido feita até 60 anos (menores de 18 anos, clique para ver documentos necessários e formulário de autorização. Consulte também este procedimento no Hemocentro de sua região)
                    <br>
                    • Pesar no mínimo 50kg.
                    <br>
                    • Estar descansado (ter dormido pelo menos 6 horas nas últimas 24 horas).
                    <br>
                    • Estar alimentado (evitar alimentação gordurosa nas 4 horas que antecedem a doação).
                    <br>
                    • Apresentar documento original com foto emitido por órgão oficial (Carteira de Identidade, Cartão de Identidade de Profissional Liberal, Carteira de Trabalho e Previdência Social).
    
                </p>

                
          </div>
        </div>

        <div class="accordion">
          <div class="accordion__question">
            <p><b>Como funciona a pré-marcação online?</b></p>
          </div>

          <div class="accordion__answer">
              <p>
                A pré-marcação online funciona com o preenchimento do formulário online que será enviado automaticamente para a central de marcação. 
                Existindo possibilidade de marcação o setor responsável entrará em contato por telefone ou e-mail, 
                confirmando sua solicitação para a data e horário disponíveis. 
                Caso não haja o contato dentro de 72 horas solicitamos que entre em contato através dos telefones (00) 0000-0000.
                 Pois pode ter ocorrido uma falha no envio dos seus dados.
              </p>

              
        </div>
      </div>




      <script>
        let answers=document.querySelectorAll(".accordion");
        answers.forEach((event)=>{
            event.addEventListener('click',()=>{
                if(event.classList.contains("active")){
                    event.classList.remove("active");
                }
                else{
                    event.classList.add("active");
                }
            })
        })
    </script>
     
         
		
  

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

