<div id="sidebar" class="sidebar">
    <!-- begin sidebar scrollbar -->
    <div data-scrollbar="true" data-height="100%">

                             
<ul class='nav'>
                    <li class='has-sub'>   
						 <li class="dropdown navbar-user">  
													
							<a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown">
								<img id="ImgUser" src="assets/<?php echo $row['IMAGE']; ?>" alt="" /> 
								<span><?php echo $row['FIRSTNAME']." ".$row['LASTNAME'];  ?></span> <b class="caret"></b> 
							</a>						
							<ul class="dropdown-menu animated fadeInLeft">
							 <li class="arrow"></li>			    
								<li><a href="change_password_form.php"><i class="fa fa-lock"></i>  Cambiar Contrase&ntilde;a</a></li>
                                                                <li><a href="#myModal_Image" data-toggle="modal"><i class="fa fa-user"></i>  Cambiar Imagen</a></li>
                                                                <li><a href="#Modal_Fondo" data-toggle="modal"><i class="fa fa-picture-o"></i>  Cambiar Fondo</a></li>
								<li class="divider"></li>
								<li><a href="menu_logout.php"><i class="fa fa-sign-out"></i>  Cerrar Sesi&oacute;n</a></li>
							</ul>
						</li>
					</li>
				</ul>
        
                               <script> var fondo = "<?php echo $row['IMG_FONDO']; ?>"</script>
        
	<?php include('dbcon.php');
        
$query= mysqli_query($conn,"
SELECT a.NPK_MENU,
a.NAME_MENU,
a.URL,
a.ICON,
CASE WHEN Deriv1.Count IS NULL 
THEN 0 
ELSE Deriv1.Count 
END AS Count
FROM Menu a
LEFT OUTER JOIN (select PARENT,count(*) as Count from Menu  where ACTIVE = 1 group by PARENT) Deriv1 
 ON a.NPK_MENU = Deriv1.PARENT
INNER JOIN MenuProfile mp 
 ON mp.NFK_MENU = a.NPK_MENU
INNER JOIN Cat_Profile cp 
 ON cp.NPK_PROFILE = mp.NFK_PROFILE
INNER JOIN Users u 
 ON u.NFK_PROFILE = cp.NPK_PROFILE
WHERE u.NPK_USUARIO = '$session_id' 
AND a.PARENT = 0 
AND a.ACTIVE = 1
")or die(mysql_error());

            $level = 0;
            $rowCount = mysqli_num_rows($query);
            
            echo "<ul class='nav'>";
            while ($row = mysqli_fetch_array($query)) 
            {
                if($row['Count'] > 0)
                {
                    echo "<li class='has-sub'>";
						echo"<a href='javascript:;'> ";
							echo "<b class='caret pull-right'></b>";
							echo"<i class='".$row['ICON']."'></i>"; 
							echo" <span>".$row['NAME_MENU']."</span> ";
						echo"</a>";
							echo"<ul class='sub-menu'>";

							$query2= mysqli_query($conn,"
SELECT 
a.NPK_MENU,
a.NAME_MENU,
a.URL,
a.ICON,
CASE WHEN Deriv1.Count IS NULL 
THEN 0 
ELSE Deriv1.Count 
END AS Count
FROM Menu a
LEFT OUTER JOIN (select PARENT,count(*) as Count from Menu  where ACTIVE = 1 group by PARENT) Deriv1 
	ON a.NPK_MENU = Deriv1.PARENT
INNER JOIN MenuProfile as mp 
	ON mp.NFK_MENU = a.NPK_MENU
INNER JOIN Cat_Profile cp 
	ON cp.NPK_PROFILE = mp.NFK_PROFILE
INNER JOIN Users as u 
	ON u.NFK_PROFILE = cp.NPK_PROFILE
WHERE u.NPK_USUARIO = '$session_id' 
AND a.ACTIVE = 1 
AND a.PARENT = ".$row['NPK_MENU'])or die(mysql_error());

							$level2 = 0;
							while ($row2 = mysqli_fetch_array($query2)) 
							{
								if ($level2 == mysqli_num_rows($query2)){
									break;
								}
								echo "<li class='has-sub'><a href='" . $row2['URL'] . "'> <i class='".$row2['ICON']."'></i>" . $row2['NAME_MENU'] . "</a></li>"; 
								$level2 = $level2+1;
							}                
							echo"</ul>";
                    echo"</li>"; 
                }
                elseif($row['Count']== 0)
                {
                    echo "<li class='has-sub'>";
					echo"<a href='" . $row['URL'] . "'>";
					echo" <i class='".$row['ICON']."'></i>";
					echo" <span>".$row['NAME_MENU']."</span> ";
					echo"</a>";
					echo"</li>";             
                }
                $level = $level+1;
            }
			
			echo "<!-- begin sidebar minify button -->";
			echo"		<li><a href='javascript:;' class='sidebar-minify-btn' data-click='sidebar-minify'><i class='fa fa-angle-double-left'></i></a></li>";
			echo        "<!-- end sidebar minify button -->";
			
            echo "</ul>";
            
	?>
    </div>
    <!-- end sidebar scrollbar -->
</div>
<div class="sidebar-bg"></div>
	