<div class="modal fade" id="edit<?php echo $value ['id']?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">

			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title" id="myModalLabel">Create Notification</h4>
			</div>

			<div class="modal-body">
				<form action="../add_message.php" method="POST">
					<div class="form-group">
						<input type="hidden" name="id" value="<?php echo $value['id'] ?>">
						<label>	Message</label>
						<textarea class="form-control" rows="10" cols="75" name="message" required></textarea>
					</div>
					<input type="submit" name="sent" value="Send" class="btn btn-primary btn-block form-control"> 
				</form>	
			</div>
		</div>
	</div>
</div>