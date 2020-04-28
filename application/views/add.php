<?php echo form_open('tbladmin/add',array("class"=>"form-horizontal")); ?>

	<div class="form-group">
		<label for="uname" class="col-md-4 control-label">Uname</label>
		<div class="col-md-8">
			<input type="text" name="uname" value="<?php echo $this->input->post('uname'); ?>" class="form-control" id="uname" />
		</div>
	</div>
	<div class="form-group">
		<label for="pword" class="col-md-4 control-label">Pword</label>
		<div class="col-md-8">
			<input type="text" name="pword" value="<?php echo $this->input->post('pword'); ?>" class="form-control" id="pword" />
		</div>
	</div>
	
	<div class="form-group">
		<div class="col-sm-offset-4 col-sm-8">
			<button type="submit" class="btn btn-success">Save</button>
        </div>
	</div>

<?php echo form_close(); ?>