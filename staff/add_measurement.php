<!-- Add New -->
<div class="modal fade" id="addmeasurement" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel" style="font-weight: bolder;">Add New Measurement</h4></center>
            </div>
            <div class="modal-body">
			<div class="container-fluid">
			<form method="POST" action="addMeasurement.php">
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">ID:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="id" required>
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Customer:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="fulname" required>
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Shoulder</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="Shoulder" placeholder="Enter Shoulder Size" required>
					</div>
				</div>
					<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Half-Cut</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="HalfCutLenght" placeholder="Enter Half Cut Length Size" required>
					</div>
				</div>
					<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Bust</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="Bust" placeholder="Enter Bust Size" required>
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Blouse-W</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="BlouseWaist" placeholder="Enter Blouse Waist Size" required>
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Blouse-L</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="BlouseLength" placeholder="Enter Blouse Length Size" required>
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Skirt-L</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="SkirtLength" placeholder="Enter Skirt Length Size" required>
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Skirt-W</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="SkirtWaist" placeholder="Enter Skirt Waist Size" required>
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Hips</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="Hips" placeholder="Enter Hips Size" required>
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Slip-L</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="SlipLenght" placeholder="Enter Slip Length Size" required>
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Slip-R</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="SlipRound" placeholder="Enter Slip Round Size" required>
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