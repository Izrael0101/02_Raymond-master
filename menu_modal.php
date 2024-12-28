   <div id="myModal_Image" id="myModal_Image" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" >
      <div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				
				<h4 class="modal-title">Cambiar Imagen</h4>
			</div>
			<div class="modal-body">
					<form method="post" action="save_image_class.php" enctype="multipart/form-data">
						<center>    
							<div class="control-group">
							<div class="controls">
								<input name="image" class="input-file uniform_on" id="fileInput" type="file" required>
							</div>
							</div>
						</center>
													
						<div class="modal-footer">
							<button class="btn" data-dismiss="modal" aria-hidden="true"><i class="icon-remove icon-large"></i> Cerrar</button>
							<button class="btn btn-info" name="change"><i class="icon-save icon-large"></i> Cambiar</button>
						</div>
					</form>
			</div>
		</div>
	</div>
  </div>    
  
  
  
  
  
<?php if(isset($_SESSION['id'])){ ?>
  
<?php include('dbcon.php');
  $query= mysqli_query($conn,"select * from Users where NPK_USUARIO= '$session_id' and ACTIVE = 1")or die(mysql_error());
  $row = mysqli_fetch_array($query);
?>

<div class="modal" id="modal_mousehover_image">
	<div class="modal-dialog">
		<div class="modal-content">
			
			
			<div class="modal-header">
			  <h4 class="modal-title">Informacion del Usuario </h4>
			</div>
			
			<div class="modal-body">
				<div class="row">
					<div class="col-md-6">
						<img src="assets/<?php echo $row['IMAGE']; ?>" alt="" style=" width: 100%; max-height: 48%;" />
					</div>
					<div class="col-md-4">
							<ul class="nav nav-pills nav-stacked nav-sm">
								<li><a href="email_inbox_v2.html"><i class="fa fa-user fa-fw m-r-5"></i>Usuario: <?php echo" ".$row['FIRSTNAME']. " ".$row['LASTNAME'] ; ?></a></li>
								<li><a href="email_inbox_v2.html"><i class="fa fa-envelope fa-fw m-r-5"></i>Correo:  <?php echo " ".$row['EMAIL']; ?></a></li>
								<li><a href="email_inbox_v2.html"><i class="fa fa-phone fa-fw m-r-5"></i>Telefono: <?php echo " ".$row['PHONE']; ?></a></li>
							</ul>
					</div>
					
				</div>
			</div>
			
		
			<div class="modal-footer">
				<a href="javascript:;" class="btn btn-sm btn-white" data-dismiss="modal">Close</a>
			</div>
		</div>
	</div>
</div>
<?php } ?>



 <div id="Modal_Fondo" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" >
  <div class="modal-dialog">
	<div class="modal-content">
		<div class="modal-header">
			
			<h4 class="modal-title">Cambiar Fondo</h4>
		</div>
		<div class="modal-body">
				<form method="post" action="save_fondo_class.php" enctype="multipart/form-data">
					<center>    
						<div class="control-group">
						<div class="controls">
							<input name="image" class="input-file uniform_on" id="fileInput" type="file" required>
						</div>
						</div>
					</center>
												
					<div class="modal-footer">
						<button class="btn" data-dismiss="modal" aria-hidden="true"><i class="icon-remove icon-large"></i> Cerrar</button>
						<button class="btn btn-info" name="change_fondo"><i class="icon-save icon-large"></i> Cambiar</button>
					</div>
				</form>
		</div>
	</div>
</div>
</div>   
	