<!-- Add New -->
<div class="modal fade" id="addnew" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel" style="font-weight: bolder;">New Customer Registration</h4></center>
            </div>
            <div class="modal-body">
			<div class="container-fluid">
			<form method="POST" action="add.php" style="color: purple;">
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Customer:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="firstname" placeholder="Enter full Customer name" required>
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Phone:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="phone" placeholder="Enter Customer Mobile number" required>
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Address:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="address" placeholder="Enter Customer Address" required>
					</div>
				</div>
					<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Email:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="email" placeholder="Enter Customer email address" required>
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Shoulder:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="shoulder" placeholder="Input shoulder Length" required>
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">H.C.L:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="hcl" placeholder="Input Half Cut Length" required>
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Bust:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="bust" placeholder="Input Bust Size" required>
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Blouse W:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="blousewaist" placeholder="Input Blouse Waist" required>
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Blouse L:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="blouselength" placeholder="Input Blouse Length" required>
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Skirt L:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="skirtlength" placeholder="Input Skirt Length" required>
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Skirt W:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="skirtwaist" placeholder="Input Skirt Waist" required>
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Hips:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="hips" placeholder="Input Hps Size" required>
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Slip L:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="sliplength" placeholder="Input Slip Length" required>
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Slip R:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="slipround" placeholder="Input Slip Round" required>
					</div>
				</div>
					<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Comment:</label>
					</div>
					<div class="col-sm-10">
						<textarea type="text" class="form-control" name="comment"></textarea>
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