<!-- Add New -->
<div class="modal fade" id="addnew" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel" style="font-weight: bolder;">New Staff Registration</h4></center>
            </div>
            <div class="modal-body">
			<div class="container-fluid">
			<form method="POST" action="add_staff.php" style="color: purple;">
			<div style="font-weight: bolder;text-align: center;">Contact Details</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Name:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="fulname" placeholder="Enter full staff name">
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Phone:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="phone" placeholder="Enter staff mobile number">
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Address:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="address" placeholder="Enter staff address">
					</div>
				</div>
					<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Email:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="email" placeholder="Enter staff email address">
					</div>
				</div>
				<div style="font-weight: bolder;text-align: center;">Staff Details</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Role:</label>
					</div>
					<div class="col-md-6">
						<select name="user_type" id="user_type" >
				        <option value=""></option>
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
						<input type="text" class="form-control" name="username" placeholder="Choose username for staff" required>
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Password:</label>
					</div>
					<div class="col-sm-10">
						<input type="password" class="form-control" name="password_1" placeholder="Enter password" required>
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Comfirm:</label>
					</div>
					<div class="col-sm-10">
						<input type="password" class="form-control" name="password_2" placeholder="Comfirm Password" required>
					</div>
				</div>
				<div style="font-weight: bolder;text-align: center;">Other Informations</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">D.O.B:</label>
					</div>
					<div class="col-sm-10">
						<input type="Date" class="form-control" name="dob">
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Gender:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="gender" placeholder="">
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">State:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="state" placeholder="">
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">L.G.A:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="lga" placeholder="">
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Marital Status:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="maritalstatus" placeholder="">
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Date Employed:</label>
					</div>
					<div class="col-sm-10">
						<input type="Date" class="form-control" name="dateemployed" placeholder="">
					</div>
				</div>
				<div style="font-weight: bolder;text-align: center;">Payment Details</div>
					<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Bank:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="accountname">
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Account:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="accountnumber">
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Salary:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="salary">
					</div>
				</div>
            </div> 
			</div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                <button type="submit" name="register_btn" class="btn btn-primary"><span class="glyphicon glyphicon-floppy-disk"></span> Save</a>
			</form>
            </div>

        </div>
    </div>
</div>