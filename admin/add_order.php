<!-- Add New -->
<div class="modal fade" id="addnew" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel" style="font-weight: bolder;">Add New Order <span class="glyphicon glyphicon-shopping-cart"></span></h4></center>
            </div>
            <div class="modal-body">
			<div class="container-fluid">
			<form method="POST" action="addOrder.php">
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Customer:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="CustomerName" required>
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Amount:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="NumberOfCloths" required>
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Recieved:</label>
					</div>
					<div class="col-sm-10">
						<input type="Date" class="form-control" name="RecievedDate" required>
					</div>
				</div>
					<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Collection:</label>
					</div>
					<div class="col-sm-10">
						<input type="Date" class="form-control" name="DueDate" required>
					</div>
				</div>
					<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Tailor:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="AssignedTailor" required>
					</div>
				</div>
					<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Comment:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="Comment" required>
					</div>
				</div>
            </div> 
			</div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                <button type="submit" name="add" class="btn btn-primary"><span class="glyphicon glyphicon-floppy-disk"></span> Save</a>
			</form>
            </div>

        </div>
    </div>
</div>