<div id="header" class="header navbar navbar-default navbar-fixed-top">
			<!-- begin container-fluid -->
			<?php if(isset($_SESSION['id'])){ ?>
			
			<div class="container-fluid">
			
			<?php include('dbcon.php');
			  $query= mysqli_query($conn,"select * from Users where NPK_USUARIO= '$session_id' and ACTIVE = 1")or die(mysql_error());
			  $row = mysqli_fetch_array($query);
			?>
			
				<!-- begin mobile sidebar expand / collapse button -->
				<div class="navbar-header">
				        <a href="menu_blank.php" class="navbar-brand">					
					<span><img src="assets/img/gallery/previous.png"></span> Inicio
					</a>
					<button type="button" class="navbar-toggle" data-click="sidebar-toggled">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
				</div>
				<!-- end mobile sidebar expand / collapse button -->
				
				
			</div>
			
			<?php } ?>
			<!-- end container-fluid -->
		</div>		
<?php include('menu_modal.php'); ?>	