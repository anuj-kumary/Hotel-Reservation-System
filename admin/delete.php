<?php

 include_once('_c_connection.php');

 $id = $_GET['id'];

 $deletequery = "delete from user_details where id=$id";

 $query = mysqli_query($conn,$deletequery);

 if($query){
 	?>
 	<script>
 		alert('deleted Succesfully');
 	</script>

 	<?php
 	header('location:admin.php');
 }else{
 	?>
 	<script>
 		alert('No delete');
 	</script>

 	<?php

 }


?>