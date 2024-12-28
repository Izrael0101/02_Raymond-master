
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
   
	<!-- ================== END BASE JS ================== -->
	
	<!-- ================== BEGIN PAGE LEVEL JS ================== -->
	<script src="assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
	<script src="assets/plugins/ionRangeSlider/js/ion-rangeSlider/ion.rangeSlider.min.js"></script>
	<script src="assets/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js"></script>
	<script src="assets/plugins/masked-input/masked-input.min.js"></script>
	<script src="assets/plugins/bootstrap-timepicker/js/bootstrap-timepicker.min.js"></script>
	<script src="assets/plugins/password-indicator/js/password-indicator.js"></script>
	<script src="assets/plugins/bootstrap-combobox/js/bootstrap-combobox.js"></script>
	<script src="assets/plugins/bootstrap-select/bootstrap-select.min.js"></script>
	<script src="assets/plugins/bootstrap-tagsinput/bootstrap-tagsinput.min.js"></script>
	<script src="assets/plugins/bootstrap-tagsinput/bootstrap-tagsinput-typeahead.js"></script>
	<script src="assets/plugins/jquery-tag-it/js/tag-it.min.js"></script>
	<script src="assets/js/form-plugins.demo.min.js"></script>
    <script src="assets/plugins/isotope/jquery.isotope.min.js"></script>
  	<script src="assets/plugins/lightbox/js/lightbox-2.6.min.js"></script>
	<script src="assets/js/gallery.demo.min.js"></script>
	<script src="assets/plugins/DataTables/js/jquery.dataTables.js"></script>
	<script src="assets/plugins/DataTables/js/dataTables.tableTools.js"></script>
	<script src="assets/js/table-manage-tabletools.demo.min.js"></script>
	<script src="assets/plugins/gritter/js/jquery.gritter.js"></script>
	<script src="assets/plugins/parsley/dist/parsley.js"></script>
	<script src="assets/js/apps.min.js"></script>
	<!-- ================== END PAGE LEVEL JS ================== -->
	
	<script>
		$(document).ready(function() {
                      
         $('body').css('background-image', 'url("assets/img/'+fondo+'")');
		 
		 $('.theme-panel [name=sidebar-fixed] option[value="2"]').prop('selected', true);
			$('#page-container').removeClass('page-sidebar-fixed');
			if ($('#page-container .sidebar-bg').length === 0) {
				$('#page-container').append('<div class="sidebar-bg"></div>');
			}
           
            $('#header').removeClass('navbar-fixed-top');
            $('#page-container').removeClass('page-header-fixed');
            $.cookie('header-fixed', false);
			
		 

			App.init();
			FormPlugins.init();
			Gallery.init();
			TableManageTableTools.init();

						
			$("#change_password").submit(function(e)
			{
				e.preventDefault();
				var password = $('#password').val();
				var current_password = $('#current_password').val();
				var new_password = $('#new_password').val();
				var retype_password = $('#retype_password').val();
				if (password != current_password)
				{
					 $.gritter.add({
							title: 'La contraseña no coincide con su contraseña actual',
							text: 'Error en el cambio de contraseña',
							class_name: 'gritter-light'
						 });
				}
				else if  (new_password != retype_password)
				{
					 $.gritter.add({
							title: 'La contraseña no coincide con su nueva contraseña',
							text: 'Error en el cambio de contraseña',
							class_name: 'gritter-light'
						 });					
				}
				else if ((password == current_password) && (new_password == retype_password))
				{
					var formData = $(this).serialize();
					
					$.ajax({
					type: "POST",
					url: "update_password_class.php",
					data: formData,
					success: function(html)
					{
						$.gritter.add({
							title: 'Se guardo con exito la contraseña',
							text: 'Cambio de contraseña correcto',
							class_name: 'gritter-light'
						});						
					
					var delay = 2000;
					setTimeout(function(){ window.location = 'menu_blank.php'  }, delay);  
					}
					});
					
				}
			});
								
					
			$('#ImgUser').mouseover(function() {
				$('#modal_mousehover_image').modal("show");
			  });
      
	  
			$("#add_user").submit(function(e){
					e.preventDefault();
									var tipo_usuario = $('#tipo_usuario').val();
					var perfil = $('#perfil').val();
									var nombre = $('#nombre').val();
									var ap_paterno = $('#ap_paterno').val();
					var ap_materno = $('#ap_materno').val();
					var correo = $('#correo').val();
					var ubicacion = $('#ubicacion').val();
					var celular = $('#celular').val();
					var num_empleado = $('#num_empleado').val();
									var usuario = $('#usuario').val();
					var password = $('#password').val();
					var telefono = $('#telefono').val();
									var sistema = $('#sistema').val();
				
									
						  var formDat_user = $(this).serialize();
									
						
						 $.ajax({
						 type: "POST",
						 url: "add_user_class.php",
						 data: formDat_user,
						 success: function(html)
						 {
							 
							 $.gritter.add({
								 title: 'El usuario se guardo con satisfaccion',
								 text: 'Usuario Guardado!!',
								 class_name: 'gritter-light'
							 });						
						
						 var delay = 2000;
						 setTimeout(function(){ window.location = 'menu_blank.php'  }, delay);  
						
						 }
						 });
				});


                    			
		});
	</script>	
	
	
	

							
