 <?php
 include('dbcon.php');
 include('session.php');
     
 
if(isset($_REQUEST))
{
	
$tipo_usuario = $_POST['tipo_usuario'];
$perfil = $_POST['perfil'];
$nombre = $_POST['nombre'];
$ap_paterno = $_POST['ap_paterno'];
$ap_materno = $_POST['ap_materno'];
$correo = $_POST['correo'];
$ubicacion = $_POST['ubicacion'];
$celular = $_POST['celular'];
$num_empleado = $_POST['num_empleado'];
$usuario = $_POST['usuario'];
$password = $_POST['password'];
$telefono = $_POST['telefono'];
$sistema = $_POST['sistema'];
 
    
mysqli_query($conn , "INSERT INTO `Users` (`NFK_USERTYPE`, `NFK_PROFILE`, `FIRSTNAME`, `LASTNAME`, `MOTHERSNAME`, `EMAIL`, `NFK_Location`, `Cel`, `NumEmpleado`, `UserName`, `Password`, `Phone`, `Image`, `ACTIVE`, `DATEADD`, `NFK_USER_ADD`, `DATEUPDATE`, `NFK_USER_UPDATE`, `NFK_SYSTEM`) VALUES ('$tipo_usuario', '$perfil', '$nombre', '$ap_paterno', '$ap_materno', '$correo', '$ubicacion', '$celular', '$num_empleado', '$usuario', '$password', '$telefono','', '1',NULL, NULL, NULL, NULL, '$sistema'); ") or die(mysql_error());

 
}

 ?>

 
 
 

