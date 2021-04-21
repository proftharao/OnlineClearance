<?php
$userid = $_SESSION['id'];
$sql = "SELECT * FROM message LEFT JOIN designee ON designee.designee_id = message.designee_id 
WHERE id = $userid ";
$query = $conn->prepare($sql);
$query->execute();
$fetch = $query->fetchAll();

foreach ($fetch as $key => $value) { ?>
<div class="modal fade" id="message<?php echo $value ['message_id']?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-md">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title" id="myModalLabel">Message from <?php echo $value['designee_name'] ?></h4>
			</div>
			<div class="modal-body">
				<p><?php echo $value['message_content'] ?></p>
			</div>

			<form  method="POST">
				<input type="hidden" name="aaaa" value="<?php echo $value['message_id']; ?>">
				<input type="hidden" name="status" value="<?php echo $value['message_status']; ?>">
				<div class="modal-footer">
					<button type="submit" class="btn btn-primary" name="read">Ok</button>
				</div>
			</form>
		</div>
	</div>
</div>
<?php } ?>
<?php 
if (isset($_POST['read'])){
	$status = $_POST['status'];
	$idd = $_POST['aaaa'];

	$query = $conn->prepare("UPDATE message SET message_status = 1 WHERE message_id = $idd;"); 	
	$query->execute(array($status));
}
?>