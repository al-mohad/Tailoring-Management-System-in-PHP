<!-- View -->
<div class="modal fade" id="view_<?php echo $row['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel">Edit Customer Info</h4></center>
            </div>
            <div class="modal-body">
			<div class="container-fluid">
			<form method="POST" action="edit.php">
				<input type="hidden" class="form-control" name="id" value="<?php echo $row['id']; ?>">
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Customer:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="fulname" value="<?php echo $row['fulname']; ?>">
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Address:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="address" value="<?php echo $row['address']; ?>">
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Phone:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="phone" value="<?php echo $row['phone']; ?>">
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Email:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="email" value="<?php echo $row['email']; ?>">
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Shoulder:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="shoulder" value="<?php echo $row['shoulder']; ?>">
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">H.C.L:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="hcl" value="<?php echo $row['hcl']; ?>">
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Bust:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="bust" value="<?php echo $row['bust']; ?>">
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Blouse L:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="blouselength" value="<?php echo $row['blouselength']; ?>">
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Blouse W:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="blousewaist" value="<?php echo $row['blousewaist']; ?>">
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Skirt L:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="skirtlength" value="<?php echo $row['skirtlength']; ?>">
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Skirt W:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="skirtwaist" value="<?php echo $row['skirtwaist']; ?>">
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Hips:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="hips" value="<?php echo $row['hips']; ?>">
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Slip L:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="sliplength" value="<?php echo $row['sliplength']; ?>">
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Slip R:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="slipround" value="<?php echo $row['slipround']; ?>">
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Comment:</label>
					</div>
					<div class="col-sm-10">
					<input type="text" class="form-control" name="comment" value="<?php echo $row['comment']; ?>">
					</div>
				</div>
            </div> 
			</div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                <button type="submit" name="edit" class="btn btn-success"><span class="glyphicon glyphicon-check"></span> Update</a>
			</form>
            </div>

        </div>
    </div>
</div>

<!-- Delete -->
<div class="modal fade" id="delete_<?php echo $row['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel">Delete Customer</h4></center>
            </div>
            <div class="modal-body">	
            	<p class="text-center">Are you sure you want to Delete</p>
				<h2 class="text-center"><?php echo $row['fulname'].' <b>of</b> '.$row['address']; ?></h2>
			</div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                <a href="delete.php?id=<?php echo $row['id']; ?>" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Yes</a>
            </div>

        </div>
    </div>
</div>