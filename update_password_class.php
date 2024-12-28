 <?php
 include('dbcon.php');
 include('session.php');
 
 if (isset($_POST['new_password'])) {
    
 
 $new_password  = $_POST['new_password']; 
  mysqli_query($conn,"update Users set PASSWORD = '$new_password' where NPK_USUARIO = '$session_id' ") or die(mysql_error());
    
 
 ?>
 
 
 <?php
}
?>