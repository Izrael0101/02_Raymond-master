<?php include('menu_header.php'); ?>
    <body>
		
	
	<!-- begin #page-container -->
	<div id="page-container" class="fade page-sidebar-fixed page-header-fixed">
		<!-- begin #header -->
		<?php include('menu_navbar.php'); ?>		
		<!-- end #header -->
		
		<!-- begin #sidebar -->
		<?php include('menu_sidebar.php'); ?>
		<!-- end #sidebar -->
		
	<!-- begin content -->
	<div id="content" class="content">
	
		<?php	
		$query = mysqli_query($conn, "select * from Users where NPK_USUARIO = '$session_id'")or die(mysql_error());
		$row = mysqli_fetch_array($query);
		?>	
			<!-- begin row -->
			<div class="row">
			  <div class="col-md-12">
			        <!-- begin panel -->
                    <div class="panel panel-inverse" data-sortable-id="form-stuff-4">
                       
                        <div class="panel-body">
                           <form  method="post" id="change_password" class="form-horizontal" data-parsley-validate="true">
                                <fieldset>
                                    <legend>Cambio de Contrase&ntilde;a</legend>
                                    <div class="form-group">
                                        <label class="col-md-4 control-label">Contrase&ntilde;a Actual</label>
                                        <div class="col-md-8">
											<input type="hidden" id="password" name="password" value="<?php echo $row['Password']; ?>"  placeholder="Current Password">
                                            <input type="password" id="current_password" class="form-control" placeholder="Contrase&ntilde;a Actual" data-parsley-required="true"  />
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-4 control-label">Contrase&ntilde;a Nueva</label>
                                        <div class="col-md-8">
                                           <input type="password" class="form-control" id="new_password" name="new_password" placeholder="Contrase&ntilde;a Nueva" data-parsley-required="true" >
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-4 control-label">Reescriba su nueva Contrase&ntilde;a </label>
                                        <div class="col-md-8">
                                            <input type="password" class="form-control" id="retype_password" name="retype_password" placeholder="Repita Contrase&ntilde;a" data-parsley-required="true" >
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-md-8 col-md-offset-4">
                                            <button type="submit" class="btn btn-info"><i class="icon-save"></i> Cambiar</button>
                                        </div>
                                    </div>
                                </fieldset>
                            </form>
                        </div>
                    </div>
                    <!-- end panel -->
					
                </div>
				
			</div>
			<!-- end row -->			
		</div>
		<!-- end content -->
		
		<!-- begin theme -->		
		<?php include('menu_theme.php'); ?>
		<!-- end theme -->		
       		
		<!-- begin scroll to top btn -->
		<a href="javascript:;" class="btn btn-icon btn-circle btn-success btn-scroll-to-top fade" data-click="scroll-top"><i class="fa fa-angle-up"></i></a>
		<!-- end scroll to top btn -->
		
		<?php include('menu_script.php'); ?>


	</div>
	<!-- end page container -->
	
    </body>
</html>