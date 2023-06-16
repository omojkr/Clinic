<!-- Edit -->
<div class="modal fade" id="addnew" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
				<center><h4 class="modal-title" id="myModalLabel">Add New</h4></center>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
            <div class="modal-body">
			<div class="container-fluid">
			<form method="POST" action="add.php">
				<div class="row form-group">
					<div class="col-sm-5">
						<label class="control-label modal-label">Firstname: </label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="firstName" required>
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-5">
						<label class="control-label modal-label">Middle Initial: </label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="middleInitial" required>
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-5">
						<label class="control-label modal-label">Lastname: </label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="lastName" required>
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-5">
						<label class="control-label modal-label">Email: </label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="email" required>
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-5">
						<label class="control-label modal-label">Date of Birth: </label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="dateofbirth" required>
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-5">
						<label class="control-label modal-label">Gender: </label>
					</div>
					<div class="col-sm-10">
						<select type="text" class="form-control" name="gender" required>
							<option>...</option>
							<option> Male </option>
							<option> Female </option>
						</select>
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-5">
						<label class="control-label modal-label">Contact Number: </label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="contact_number" required>
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-5">
						<label class="control-label modal-label">Address: </label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="address" required>
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-5">
						<label class="control-label modal-label">Password: </label>
					</div>
					<div class="col-sm-10">
						<input type="password" class="form-control" name="password" required>
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-5">
						<label class="control-label modal-label">Confirm Password: </label>
					</div>
					<div class="col-sm-10">
						<input type="password" class="form-control" name="confirm_password" value="">
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