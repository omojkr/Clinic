<!-- Edit -->
<div class="modal fade" id="edit_<?php echo $row['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
			<center><h4 class="modal-title" id="myModalLabel">Edit User</h4></center>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
            <div class="modal-body">
			<div class="container-fluid">
			<form method="POST" action="edit.php">
				<input type="hidden" class="form-control" name="id" value="<?php echo $row['id']; ?>">
				<div class="row form-group">
					<div class="col-sm-5">
						<label class="control-label modal-label">Firstname:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="firstName" value="<?php echo $row['firstName']; ?>">
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-5">
						<label class="control-label modal-label">Middle Initial:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="middleInitial" value="<?php echo $row['middleInitial']; ?>">
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-5">
						<label class="control-label modal-label">Lastname:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="lastName" value="<?php echo $row['lastName']; ?>">
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-5">
						<label class="control-label modal-label">Email:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="email" value="<?php echo $row['email']; ?>">
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-5">
						<label class="control-label modal-label">Date of Birth:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="dateofbirth" value="<?php echo $row['dateofbirth']; ?>">
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-5">
						<label class="control-label modal-label">Contact Number:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="contact_number" value="<?php echo $row['contact_number']; ?>">
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-5">
						<label class="control-label modal-label">Address:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="address" value="<?php echo $row['address']; ?>">
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-5">
						<label class="control-label modal-label">Password:</label>
					</div>
					<div class="col-sm-10">
						<input type="password" class="form-control" name="password" value="<?php echo $row['password']; ?>">
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-5">
						<label class="control-label modal-label">Confirm Password:</label>
					</div>
					<div class="col-sm-10">
						<input type="password" class="form-control" name="confirm_password" value="">
					</div>
				</div>
            </div> 
			</div>
            <div class="modal-footer">
				 <button type="submit" name="edit" class="btn btn-success"><span class="glyphicon glyphicon-check"></span> Update</a>
                <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
               
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
			<center><h4 class="modal-title" id="myModalLabel">Delete Member</h4></center>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                
            </div>
            <div class="modal-body">	
            	<p class="text-center">Are you sure you want to Delete</p>
				<h2 class="text-center"><?php echo $row['firstName'].' '.$row['lastName']; ?></h2>
			</div>
            <div class="modal-footer">
			<a href="delete.php?id=<?php echo $row['id']; ?>" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Yes</a>
                <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                
            </div>

        </div>
    </div>
</div>