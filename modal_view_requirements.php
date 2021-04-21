<div class="modal fade"  id="view<?php echo $value ['id']?>" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-dialog modal-md">
		<div class="modal-content">
			<form method="POST">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
					</button>
					<h4 class="modal-title" id="myModalLabel">View Requirements</h4>
				</div>
				<div class="modal-body">
					<table class="table table-bordered">
						<thead>
							<tr>
								<td>Requirement Content</td>
								<td>Passed Requirements</td>
								<td>Requirement</td>
							</tr>
						</thead>
					</table>
				</div>
				<div class="modal-footer">
					<button type="submit" name="files" class="btn btn-primary pull-right">Submit</button>
				</div>
			</form>
		</div>
	</div>
</div>