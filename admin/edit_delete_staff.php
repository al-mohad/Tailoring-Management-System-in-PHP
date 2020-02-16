<!-- Edit -->
<div class="modal fade" id="edit_<?php echo $row['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel" style="font-weight: bolder;">New Staff Registration</h4></center>
            </div>
            <div class="modal-body">
			<div class="container-fluid">
			<form method="POST" action="editStaff.php" style="color: purple;">
			<input type="hidden" class="form-control" name="id" value="<?php echo $row['id']; ?>">
			<div style="font-weight: bolder;text-align: center;">Contact Details</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Name:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="fulname" value="<?php echo $row['fulname']; ?>">
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
						<label class="control-label modal-label">Address:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="address" value="<?php echo $row['address']; ?>">
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
				<div style="font-weight: bolder;text-align: center;">Staff Details</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Role:</label>
					</div>
					<div class="col-md-6">
						<select name="user_type" id="user_type" >
				        <option value="<?php echo $row['user_type']; ?>"></option>
				        <option value="admin">Admin</option>
				        <option value="user">User</option>
				        <option value="tailor">Tailor</option>
				      </select>
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Username:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="username" value="<?php echo $row['username']; ?>">
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Password:</label>
					</div>
					<div class="col-sm-10">
						<input type="password" class="form-control" name="password_1" placeholder="Enter password">
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Comfirm:</label>
					</div>
					<div class="col-sm-10">
						<input type="password" class="form-control" name="password_2" placeholder="Comfirm Password">
					</div>
				</div>
				<div style="font-weight: bolder;text-align: center;">Other Informations</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">D.O.B:</label>
					</div>
					<div class="col-sm-10">
						<input type="Date" class="form-control" name="dob" value="<?php echo $row['dob']; ?>">
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Gender:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="gender" value="<?php echo $row['gender']; ?>">
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">State:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="state" value="<?php echo $row['state']; ?>">
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">L.G.A:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="lga" value="<?php echo $row['lga']; ?>">
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Marital Status:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="maritalstatus" value="<?php echo $row['maritalstatus']; ?>">
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Date Employed:</label>
					</div>
					<div class="col-sm-10">
						<input type="Date" class="form-control" name="EmployedOn" value="<?php echo $row['EmployedOn']; ?>">
					</div>
				</div>
				<div style="font-weight: bolder;text-align: center;">Payment Details</div>
					<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Bank:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="accountname" value="<?php echo $row['accountname']; ?>">
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Account:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="accountnumber" value="<?php echo $row['accountnumber']; ?>">
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Salary:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="salary" value="<?php echo $row['salary']; ?>">
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
            	<p class="text-center">Are you sure you want to Delete</p>
				<h2 class="text-center"><?php echo $row['fulname'].' <b>A.K.A</b> '.$row['username']; ?></h2>
			</div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                <a href="deleteStaff.php?id=<?php echo $row['id']; ?>" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Yes</a>
            </div>

        </div>
    </div>
</div>

<!-- View -->
<div class="modal fade" id="view_<?php echo $row['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel">Staff Information</h4></center>
            </div>
            <div class="modal-body">
			<div class="container-fluid">
			<form method="POST" action="edit.php" style="font-weight: bolder;">
				<input type="hidden" class="form-control" name="id" value="<?php echo $row['id']; ?>">
				<div class="row form-group">
					<div class="col-md-6">
						<label class="control-label modal-label">Staff Name:</label>
					</div>
					<div class="col-md-6">
						<?php echo $row['fulname']; ?>
					</div>
				</div>
				<hr style="color: purple;">
				<div class="row form-group">
					<div class="col-md-6">
						<label class="control-label modal-label">Address:</label>
					</div>
					<div class="col-md-6">
						<?php echo $row['address']; ?>
					</div>
				</div>
				<hr>
				<div class="row form-group">
					<div class="col-md-6">
						<label class="control-label modal-label">Phone:</label>
					</div>
					<div class="col-md-6">
						<?php echo $row['phone']; ?>
					</div>
				</div>
				<hr>
				<div class="row form-group">
					<div class="col-md-6">
						<label class="control-label modal-label">Email:</label>
					</div>
					<div class="col-md-6">
						<?php echo $row['email']; ?>
					</div>
				</div>
				<hr>
				<div class="row form-group">
					<div class="col-md-6">
						<label class="control-label modal-label">Staff Role:</label>
					</div>
					<div class="col-md-6">
						<?php echo $row['user_type']; ?>
					</div>
				</div>
				<hr>
				<div class="row form-group">
					<div class="col-md-6">
						<label class="control-label modal-label">Username:</label>
					</div>
					<div class="col-md-6">
						<?php echo $row['username']; ?>
					</div>
				</div>
				<hr>
				<div class="row form-group">
					<div class="col-md-6">
						<label class="control-label modal-label">D.O.B:</label>
					</div>
					<div class="col-md-6">
						<?php echo $row['dob']; ?>
					</div>
				</div>
				<hr>
				<div class="row form-group">
					<div class="col-md-6">
						<label class="control-label modal-label">Gender:</label>
					</div>
					<div class="col-md-6">
						<?php echo $row['gender']; ?>
					</div>
				</div>
				<hr>
				<div class="row form-group">
					<div class="col-md-6">
						<label class="control-label modal-label">State:</label>
					</div>
					<div class="col-md-6">
						<?php echo $row['state']; ?>
					</div>
				</div>
				<hr>
				<div class="row form-group">
					<div class="col-md-6">
						<label class="control-label modal-label">L.G.A:</label>
					</div>
					<div class="col-md-6">
						<?php echo $row['lga']; ?>
					</div>
				</div>
				<hr>
				<div class="row form-group">
					<div class="col-md-6">
						<label class="control-label modal-label">Marital Status:</label>
					</div>
					<div class="col-md-6">
						<?php echo $row['maritalstatus']; ?>
					</div>
				</div>
				<hr>
				<div class="row form-group">
					<div class="col-md-6">
						<label class="control-label modal-label">Hired Date:</label>
					</div>
					<div class="col-md-6">
						<?php echo $row['EmployedOn']; ?>
					</div>
				</div>
				<hr>
				<div class="row form-group">
					<div class="col-md-6">
						<label class="control-label modal-label">Account Name:</label>
					</div>
					<div class="col-md-6">
						<?php echo $row['accountname']; ?>
					</div>
				</div>
				<hr>
				<div class="row form-group">
					<div class="col-md-6">
						<label class="control-label modal-label">Account Number:</label>
					</div>
					<div class="col-md-6">
						<?php echo $row['accountnumber']; ?>
					</div>
				</div>
				<hr>
				<div class="row form-group">
					<div class="col-md-6">
						<label class="control-label modal-label">Salary:</label>
					</div>
					<div class="col-md-6">
					<?php echo $row['salary']; ?>
					</div>
				</div>
            </div> 
			</div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-ok"></span> OK</button>
			</form>
            </div>

        </div>
    </div>
</div>