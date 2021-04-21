<div class="modal fade"  id="edit<?php echo $value ['req_id']?>" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<form method="POST" enctype = "multipart/form-data">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
					</button>
					<h4 class="modal-title" id="myModalLabel">Pass requirement</h4>
				</div>
				<div class="modal-body">
					<center>
						<h5>Attach File Here</h5>
						<input type="hidden" name="req_id" value="<?php echo $value['req_id']; ?>"> 
						<input type="hidden" name="designee_id" value="<?php echo $value['designee_id']; ?>"> 
						<input type="file" name="file"> <br />
					</center>
				</div>
				<div class="modal-footer">
					<button type="submit" name="files" class="btn btn-primary pull-right">Submit</button>
				</div>
			</form>
		</div>
	</div>
</div>