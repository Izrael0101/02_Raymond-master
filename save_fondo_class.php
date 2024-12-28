 <?php
include('dbcon.php');
include('session.php');


if (isset($_POST['change_fondo'])) {
    
    
    $image      = addslashes(file_get_contents($_FILES['image']['tmp_name']));
    $image_name = addslashes($_FILES['image']['name']);
    $image_size = getimagesize($_FILES['image']['tmp_name']);
    
    move_uploaded_file($_FILES["image"]["tmp_name"], "assets/img/image-bg/" . $_FILES["image"]["name"]);
    $location = "image-bg/" . $_FILES["image"]["name"];
    
    mysqli_query($conn,"update  Users set IMG_FONDO = '$location' where NPK_USUARIO  = '$session_id' ") or die(mysql_error());
    
?>
 
	<script>
	window.location = "menu_index.php";  
	</script>

<?php
}
?>