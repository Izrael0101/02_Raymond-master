
<?php include('login_header.php'); ?>
<body id="login" >
    
	<!-- begin #page-loader -->
	<div id="page-loader" class="fade in"><span class="spinner"></span></div>
	<!-- end #page-loader -->
	
	<div class="login-cover">
	    <div class="login-cover-image"><img src="assets/img/login-bg/bg-1.jpg" data-id="login-cover-image" alt="" /></div>
	    <div class="login-cover-bg"></div>
	</div>
	<!-- begin #page-container -->
	<div id="page-container" class="fade">
	
	    <!-- begin login -->
        <div class="login login-v2" id="Login_form" data-pageload-addclass="animated flipInX">
            <!-- begin brand -->
            <div class="login-header">
				<div class="brand">
					<!--<span class="logo"></span> Haku -->
					<!--<small>Haku Login</small>-->
					<span><img src="assets/img/gallery/logo_login.png" alt="Dispute Bills"></span>	E.C.O.
				</div>
				<!--<div class="icon">
					<i class="fa fa-sign-in"></i>
				</div>-->
			</div>
            <!-- end brand -->
            <div class="login-content">
				<form id="login_form1"  method="POST" class="margin-bottom-0">		
					<div class="form-group m-b-20">
						<input value="<?php if(isset($_COOKIE["member_login"])) { echo $_COOKIE["member_login"]; } ?>" type="text"  class="form-control input-lg" id="username" name="username" placeholder="Correo o Usuario" required>
					</div>
					<div class="form-group m-b-20">
						<input value="<?php if(isset($_COOKIE["member_password"])) { echo $_COOKIE["member_password"]; } ?>" type="password" class="form-control input-lg" id="password" name="password" placeholder="Contrase&ntilde;a" required>
					</div>
					<div class="checkbox m-b-20">
						<label>
							<input name="remember" id="remember" <?php if(isset($_COOKIE["member_login"])) { ?> checked <?php } ?> type="checkbox" /> Recordarme
						</label>
					</div>
					<div class="login-buttons m-b-20">
						<button data-placement="right" type="button" onclick="return false;" id="signin" class="btn btn-success btn-block btn-lg">Entrar</button>
					</div>
					
					<div class="login-buttons ">
						<button data-placement="right" type="button" onclick="return false;" id="btn_lost" class="btn btn-warning btn-block btn-lg">Olvido su Contrase&ntilde;a?</button>
					</div>
				
				</form>
			</div>

        </div>
        <!-- end login -->
		
		
		
		<!-- begin login Lost -->
       <div class="login login-v2" id="Login_lost" data-pageload-addclass="animated flipInX">
            <!-- begin brand -->
            <div class="login-header">
				<p> 
					Introduzca su direcci&oacute;n de correo electr&oacute;nico.
				</p>        
            </div>
            <br>
            <!-- end brand -->
            <div class="login-content">
                <form id="lost_form" method="POST" class="margin-bottom-0">
                    <div class="form-group m-b-20">
                        <input type="text" id="txtemail" name="email" class="form-control input-lg"  placeholder="Correo o Usuario" required />
                    </div>               
					<div class="row">
						 <div class="col-md-6">
						  <button data-placement="right" type="button" id="btn_regresar" class="btn btn-warning btn-block btn-lg">Regresa a Inicio</button>
						</div>
						<div class="col-md-6">
						  <button type="button" id="btnrecuperar" name="reset"  class="btn btn-info btn-block btn-lg">Recuperar</button>
						</div>
					</div>
                   
                </form>
				
            </div>
        </div>
        <!-- end login Lost -->   
        
        <ul class="login-bg-list">
            <li class="active"><a href="#" data-click="change-bg"><img src="assets/img/login-bg/bg-1.jpg" alt="" /></a></li>			
			<li><a href="#" data-click="change-bg"><img src="assets/img/login-bg/bg-2.jpg" alt="" /></a></li>
			
        </ul>
      
	</div>
	<!-- end page container -->
		
	
<?php include('login_script.php'); ?>

</body>
</html>
