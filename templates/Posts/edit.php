<style>
	.form-group{
		display : flex;
	}
	label{
		display: block;
    	font-size: 1.4rem !important;
	    margin-bottom: 0 !important;
		width: 30% !important;
	}
</style>
<div class="row">
	<div class="col-md-6 offset-md-4">
		<div class="card">
			<div class="card-body">
				<?php echo $this->Form->create($posts) ?>
					<div class="form-group">
					<label>First Name</label>
						<?php echo $this->Form->input('fname', ['value'=>$fname, 'class'=>'form-control'])?>
					</div>
					<div class="form-group">
					<label>Last Name</label>
						<?php echo $this->Form->input('lname', ['value'=>$lname, 'class'=>'form-control'])?>
					</div>
					<div class="form-group">
					<label>Email</label>
						<?php echo $this->Form->input('mail', ['value'=>$mail, 'class'=>'form-control'])?>
					</div>
					<div class="form-group">
					<label>Password</label>
						<?php echo $this->Form->input('pass', ['value'=>$pass, 'class'=>'form-control'])?>
					</div>
					<div class="form-group">
					<label>Confirm Password</label>
						<?php echo $this->Form->input('cpass', ['value'=>$cpass, 'class'=>'form-control'])?>
					</div>
					<div class="form-group">
					<label>Date of birth</label>
						<?php echo $this->Form->input('dob', ['value'=>$dob, 'class'=>'form-control'])?>
					</div>
					<div class="form-group">
					<label>Phone Number</label>
						<?php echo $this->Form->input('phn', ['value'=>$phn, 'class'=>'form-control'])?>
					</div>
					<div class="form-group">
					<label>Height</label>
						<?php echo $this->Form->input('height', ['value'=>$height, 'class'=>'form-control'])?>
					</div>
					<div class="form-group">
					<label>Weight</label>
						<?php echo $this->Form->input('weight', ['value'=>$weight, 'class'=>'form-control'])?>
					</div>
					<div class="form-group">
					<label>Gender</label>
						<?php echo $this->Form->input('gender', ['value'=>$gender])?>
					</div>
					<div class="form-group">
					<label>Profile picture</label>
						<?php echo $this->Form->input('image', ['value'=>$image, 'class'=>'form-control'])?>
					</div>
					<div class="form-group">
					<label>Status</label>
						<input type="radio" name="status" value="0">
						<label>Active</label>
						<input type="radio" name="status" value="1">
						<label>Inactive</label>
					</div>
					<?php echo $this->Form->button('Update', ['class'=>'btn btn-warning'])?>
					<!--  -->
				<?php echo $this->Form->end() ?>
			</div>
		</div>
	</div>
</div>
