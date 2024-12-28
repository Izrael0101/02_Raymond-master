       <!-- ================== BEGIN BASE JS ================== -->
	<script src="assets/plugins/jquery/jquery-1.9.1.min.js"></script>
	<script src="assets/plugins/jquery/jquery-migrate-1.1.0.min.js"></script>
	<script src="assets/plugins/jquery-ui/ui/minified/jquery-ui.min.js"></script>
	<script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
	<!--[if lt IE 9]>
		<script src="assets/crossbrowserjs/html5shiv.js"></script>
		<script src="assets/crossbrowserjs/respond.min.js"></script>
		<script src="assets/crossbrowserjs/excanvas.min.js"></script>
	<![endif]-->
	<script src="assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>
	<script src="assets/plugins/jquery-cookie/jquery.cookie.js"></script>
    <script src="assets/plugins/gritter/js/jquery.gritter.js"></script>
	<!-- ================== END BASE JS ================== -->
	
	<!-- ================== BEGIN PAGE LEVEL JS ================== -->
	<script src="assets/js/login-v2.demo.min.js"></script>
	<script src="assets/js/apps.min.js"></script>
	<!-- ================== END PAGE LEVEL JS ================== -->	
			
	
	<script>
		$(document).ready(function() {
			App.init();
			LoginV2.init();
			$('#Login_lost').hide();


				
		$("#signin").click(function(e){
			        e.preventDefault();
				var formData = jQuery("#login_form1").serialize();
                             

				$.ajax({
					type: "POST",
					url: "login_class.php",
					data: formData,
					success: function(html){
					if(html.trim()=='true')
					{
						 $.gritter.add({
							title: 'Bienvenido a ECO',
							text: 'Acceso Correcto',
							class_name: 'gritter-light'
						 });
					
						var delay = 600;
							setTimeout(function(){ window.location = 'menu_blank.php'  }, delay);  
					}
					else
					{
						$.gritter.add({
							title: 'Favor de revisar Usuario',
							text: 'Error de Inicio',
							class_name: 'gritter-light'
						});
					}
					}
				});
				
		         return false;		
			
		});
			
			
			
		$("#btn_lost").click(function(e){				
			$('#Login_form').hide();
			$('#Login_lost').show();			
		});
		
		$("#btn_regresar").click(function(e){				
			$('#Login_form').show();
			$('#Login_lost').hide();			
		});
			
		
		$("#btnrecuperar").click(function(e){
			    var data = $("#txtemail").val()
                                    		 

				$.ajax({
					type: "POST",
					url: "login_reset_password_class.php",
					data: { email: data},
					success: function(html){
					if(html.trim()=='true')
					{
						 $.gritter.add({
							title: 'Restaurar Contrase&ntilde;a',
							text: 'Su contrase&ntilde;a se envio a su correo',
							class_name: 'gritter-light'
						 });
					
						var delay = 600;
						setTimeout(function(){ window.location = 'index.php'  }, delay);  
					}
					else
					{
						$.gritter.add({
							title: 'Error',
							text: 'Ocurrio un error en el proceso o el correo no existe en la base de datos',
							class_name: 'gritter-light'
						 });						
					}

					},
                                        error: function(request, status, error)
                                        {
                                           $.gritter.add({
							title: 'Error',
							text: request.responseText,
							class_name: 'gritter-light'
						 });	
                                        }
				});
				
		         return false;		
			
		});
		
			
			
		});



	</script>
							