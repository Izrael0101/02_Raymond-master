<?php include('menu_header.php'); ?>
<html>

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
	
	 <?php include('dbcon.php');
			 

			$query= mysqli_query($conn,"SELECT * FROM Users")or die(mysql_error());
								
		?>                      
        
        <!-- begin row -->
        <div class="row">
        <div class="col-md-12">
            <!-- begin panel -->
            <div class="panel panel-inverse" >
                
                <div class="panel-body">
                    <div class="table-responsive">
                                <table id="data-table" class="table table-striped table-bordered">
								<thead>
									<tr>
										<th>Nombe</th>
										<th>Correo</th>                                        
                                                                                <th>Cel</th>
										<th>Numero Empleado</th>
                                                                                
                                                                         </tr>
								</thead>
								<tbody>
                                   
                                    <?php
                                        //foreach ($rows as $row) 
                                        while ($row = mysqli_fetch_array($query)){
                                    ?>
                                    <tr>
                                        <td><?php echo $row['FIRSTNAME']; ?></td>
                                        <td><?php echo $row['EMAIL']; ?></td>
				        <td><?php echo $row['Cel']; ?></td>
                                        <td><?php echo $row['NumEmpleado']; ?></td>
                                       
                                    </tr>                                    
                                <?php } ?>
                                </tbody>
                                </table>
                    </div>
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
	