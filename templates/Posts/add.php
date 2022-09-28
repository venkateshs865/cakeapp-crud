<div class="row">
	<div class="col-md-6 offset-md-4">
		<div class="card">
			<div class="card-body">
				<?php echo $this->Form->create($posts) ?>
					<div class="form-group">
						<label>First Name</label>
						<input type="text" name="fname" class="form-control">
					</div>
					<div class="form-group">
						<label>Last Name</label>
						<input type="text" name="lname" class="form-control">
					</div>
					<div class="form-group">
						<label>Email</label>
						<input type="email" name="mail" class="form-control">
					</div>
					<div class="form-group">
						<label>Password</label>
						<input type="password" name="pass" class="form-control">
					</div>
					<div class="form-group">
						<label>Confirm Password</label>
						<input type="password" name="cpass" class="form-control">
					</div>
					<div class="form-group">
						<label>Date of birth</label>
						<input type="date" name="dob" class="form-control">
					</div>
					<div class="form-group">
						<label>Phone Number</label>
						<input type="text" name="phn" class="form-control">
					</div>
					<div class="form-group">
						<label>Height</label>
						<input type="number" name="height" class="form-control">
					</div>
					<div class="form-group">
						<label>Weight</label>
						<input type="number" name="weight" class="form-control">
					</div>
					<div class="form-group">
						<label>Gender</label>
						<input type="radio" name="gender" value="Male">
						<label for="male">Male</label>
						<input type="radio" name="gender" value="Female">
						<label for="female">Female</label>
					</div>
					<div class="form-group">
						<label>Profile picture</label>
						<input type="file" name="image" class="form-control">
					</div>
					<button type="submit" class="btn btn-primary">Submit</button>
					<?php echo $this->Html->link('Back',['action'=>'index'],['class'=>'btn btn-success']); ?>
				<?php echo $this->Form->end() ?>
			</div>
		</div>
	</div>
</div>