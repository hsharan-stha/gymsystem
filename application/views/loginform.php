<?php include_once('link.php');?>
<?php include_once('header.php');?>
		<div class="container">
			<div class="row">
			<div class="col-lg-4 col-lg-offset-4">
			<div class="panel panel-default" style="margin-top:50px;">
					<div class="panel panel-heading">
						<h5 align="center" class="btn btn-link">login form</h5>
						<h5 align="center" style="color:red">
							<?php echo $this->session->flashDAta('loginmsg');?>

						</h5>
					</div>
					<form class="" action="<?php echo base_url();?>controlCheck/checkForLogin" method="post" name="myForm">
					<div class="panel panel-body" style="font-size: 12px;">
						<div class="form-group">
							<label for="uname">username:</label>
							<input type="text" id="uname" placehplder="please enter username" name="uname" required="required" class="form-control"/>
						</div>
						<div class="form-group">
							<label for="pword">password:</label>
							<input type="password" id="pword" name="pword" required="required" placehplder="please enter password" class="form-control"/>
						</div>
					</div>
					<div class="panel panel-footer">
						
						  <input type="submit" name="btnsubmit" id="btnsubmit" value="submit" class="btn btn-success center-block" >
					</div>
					</form>
				</div>
				</div>
			</div>
		</div>




<?php include_once('footer.php');?>