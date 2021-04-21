<?php 

include('../connect.php');
include('../session.php');

end_session();
if (!isset($_SESSION['id']) || ($_SESSION['id'] == '')){ ?>
	<script>
		window.location = 'index.php';
	</script>
	<?php
}
 
	header('location:../index.php');

?>