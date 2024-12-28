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
			<!-- begin row -->
			<div class="row">
			  <div class="col-md-12">
			        <!-- begin panel -->
                    <div class="panel panel-inverse">
                       
                        <div class="panel-body">
						
                           <form class="form-horizontal"  method="post" id="add_user" data-parsley-validate="true" >
                                <fieldset>                                   
                                    <div class="form-group">
                                        <label class="col-md-2 control-label">Tipo de Usuario</label>
                                        <div class="col-md-8">
										    <select class="form-control" name="tipo_usuario" id="tipo_usuario" data-size="10" data-live-search="true" data-style="btn-inverse" data-parsley-required="true">
                                            <option value="" selected>Elegir Opcion...</option>
                                            <?php
											$query= mysqli_query($conn,"SELECT * FROM Cat_UserType ")or die(mysql_error());
											
											while($row = mysqli_fetch_array($query))
											{                                                 
											   echo "<option value='" .htmlspecialchars($row['NPK_USERTYPE'])."'>"
											   .htmlspecialchars($row['DESCRIPTION'])
											   ."</option>";
											}
											?>
											</select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-2 control-label">Perfil</label>
                                        <div class="col-md-8">
										  <select class="form-control" name="perfil" id="perfil" data-size="10" data-live-search="true" data-style="btn-inverse" data-parsley-required="true">
											<option value="" selected>Elegir Opcion...</option>
											<?php
											$query= mysqli_query($conn,"SELECT * FROM Cat_Profile where NFK_System = '$session_sys'")or die(mysql_error());
											
											while($row = mysqli_fetch_array($query))
											{                                                 
											   echo "<option value='" .htmlspecialchars($row['NPK_PROFILE'])."'>"
											   .htmlspecialchars($row['DESCRIPTION'])
											   ."</option>";
											}
											?>
										  </select>	                                    
                                        </div>
                                    </div>									 
                                    <div class="form-group">
                                       <label class="col-md-2 control-label"></label>	
                                        <div class="col-md-8">
                                            <input class="form-control" name="nombre" id="nombre"  placeholder="Nombre" data-type="alphanum" data-parsley-required="true">
                                        </div>
                                    </div>
									<div class="form-group">
                                       <label class="col-md-2 control-label"></label>	
                                        <div class="col-md-8">
                                            <input class="form-control" name="ap_paterno" id="ap_paterno"  placeholder="Apellido Paterno" data-type="alphanum" data-parsley-required="true">
                                        </div>
                                    </div>
									<div class="form-group">
                                       <label class="col-md-2 control-label"></label>	
                                        <div class="col-md-8">
                                            <input class="form-control" name="ap_materno" id="ap_materno"  placeholder="Apellido Materno" data-type="alphanum" data-parsley-required="true">
                                        </div>
                                    </div>
									<div class="form-group">
                                       <label class="col-md-2 control-label"></label>	
                                        <div class="col-md-8">
                                            <input type="text" class="form-control" name="correo" id="correo" data-parsley-type="email" placeholder="Correo" data-parsley-required="true" >
                                        </div>
                                    </div>
									<div class="form-group">
                                        <label class="col-md-2 control-label">Ubicacion</label>
                                        <div class="col-md-8">
										    <select class="form-control" name="ubicacion" id="ubicacion" data-size="10" data-live-search="true" data-style="btn-inverse" data-parsley-required="true">
                                            <option value="" selected>Elegir Opcion...</option>
                                            <?php
											$query= mysqli_query($conn,"SELECT * FROM Locations where NFK_System = '$session_sys'")or die(mysql_error());
											
											while($row = mysqli_fetch_array($query))
											{                                                 
											   echo "<option value='" .htmlspecialchars($row['NPK_Location'])."'>"
											   .htmlspecialchars($row['Name'])
											   ."</option>";
											}
											?>
											</select>
                                        </div>
                                    </div>
									<div class="form-group">
                                       <label class="col-md-2 control-label"></label>	
                                        <div class="col-md-8">
                                            <input class="form-control" name="celular" id="celular"  placeholder="Celular" data-parsley-type="number">
                                        </div>
                                    </div>
									<div class="form-group">
                                       <label class="col-md-2 control-label"></label>	
                                        <div class="col-md-8">
                                            <input class="form-control" name="num_empleado" id="num_empleado"  placeholder="Num Empleado" data-parsley-type="number">
                                        </div>
                                    </div>
									<div class="form-group">
                                        <label class="col-md-2 control-label"></label>	
                                        <div class="col-md-8">
                                            <input class="form-control" name="usuario" id="usuario"  placeholder="Usuario"  data-type="alphanum" data-parsley-required="true">
                                        </div>
                                    </div>
									<div class="form-group">    
										<label class="col-md-2 control-label"></label>										
                                        <div class="col-md-8">
                                            <input type="Password" name="password" id="password" class="form-control"  placeholder="Contrase&ntilde;a" data-parsley-required="true">
                                        </div>
                                    </div>
									<div class="form-group">   
										<label class="col-md-2 control-label"></label>												
                                        <div class="col-md-8">
                                           <input type="text" name="telefono" id="telefono" class="form-control" id="masked-input-phone" placeholder="Telefono" data-parsley-type="number" />
                                        </div>
                                    </div>
									<div class="form-group">
                                        <label class="col-md-2 control-label">Sistema</label>
                                        <div class="col-md-8">
										  <select class="form-control" name="sistema" id="sistema" data-size="10" data-live-search="true" data-style="btn-inverse" >
											<option value="" selected>Elegir Opcion...</option>
											<?php
											$query= mysqli_query($conn,"SELECT * FROM System ")or die(mysql_error());
											
											while($row = mysqli_fetch_array($query))
											{                                                 
											   echo "<option value='" .htmlspecialchars($row['NPK_SYSTEM'])."'>"
											   .htmlspecialchars($row['SYSTEM_NAME'])
											   ."</option>";
											}
											?>
										  </select>	                                    
                                        </div>
                                    </div>									
                                    <div class="form-group">
                                        <div class="col-md-8 col-md-offset-4">
                                            <button type="submit" class="btn btn-info"><i class="icon-save"></i> Guardar</button>
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
		


                <!-- begin content -->
		<?php include('menu_theme.php'); ?>
		<!-- end content -->		
       		
		<!-- begin scroll to top btn -->
		<a href="javascript:;" class="btn btn-icon btn-circle btn-success btn-scroll-to-top fade" data-click="scroll-top"><i class="fa fa-angle-up"></i></a>
		<!-- end scroll to top btn -->
		
		<?php include('menu_script.php'); ?>
	</div>
	<!-- end page container -->
	
    </body>
</html>