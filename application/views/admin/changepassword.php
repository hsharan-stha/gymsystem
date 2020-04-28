<?php

if(!isset($this->session->userdata['sess_id'])) {

  redirect('controlWelcome/goToLogin');
}

?>
<?php $this->load->view('link');?>
<?php $this->load->view('admin/adminheader');?>
		<div class="container">
			<div class="row">
			<div class="col-lg-4 col-lg-offset-4">
			<div class="panel panel-default" style="margin-top:50px;">
					<div class="panel panel-heading">
						<h5 align="center" class="btn btn-link">change password</h5>
						<h5 align="center" style="color:red">
							<?php echo $this->session->flashDAta('changemsg');?>

						</h5>
					</div>
					<form class="" action="<?php echo base_url();?>controlCheck/changePassword" method="post" name="myForm">
					<div class="panel panel-body" style="font-size: 12px;">
						<div class="form-group">
							<label for="cuname">current username:</label>
							<input type="text" id="cuname" placehplder="please enter username" name="cuname" required="required" class="form-control"/>
						</div>
						<div class="form-group">
					          <span id="cunameresult"></span>
					        </div>
						<div class="form-group">
							<label for="cpword">current password:</label>
							<input type="password" id="cpword" name="cpword" required="required" placehplder="please enter password" class="form-control"/>
						</div>
						<div class="form-group">
					          <span id="cpwordresult"></span>
					        </div>
						<div class="form-group">
							<label for="uname"> new username:</label>
							<input type="text" id="uname" placehplder="please enter username" name="uname" required="required" class="form-control"/>
						</div>
						<div class="form-group">
							<label for="pword">new password:</label>
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




<?php $this->load->view('footer');?>

<script type="text/javascript">
   var cunameresult=$('#cunameresult');
    $(document).ready(function(){
      $('#cuname').change(function(){
          var cuname=$('#cuname').val();
         
          if(!cuname==''){
            $.ajax({
              url:"<?php echo base_url();?>controlCheck/checkUnameAvailabilityFromTblAdmin",
              type:"POST",
              data:{cuname:cuname},
              success:function(data){
                
                cunameresult.css({
            'color':'red'
              });

                cunameresult.html(data);
                //this is to again focus on uname if uname is not match
			                if(cunameresult.html()=='uname not match'){
			                 document.getElementById('cuname').focus();
			                 $(document).ready(function(){
			                      $('#btnsubmit').fadeOut();
			                  });
			             } else{
			             	 $(document).ready(function(){
			                      $('#btnsubmit').fadeIn();
			                  });
			             }
              },

            });

          }

          
      });
    });

</script>

<script type="text/javascript">
   var cpwordresult=$('#cpwordresult');
    $(document).ready(function(){
      $('#cpword').change(function(){
          var cpword=$('#cpword').val();
         
          if(!cpword==''){
            $.ajax({
              url:"<?php echo base_url();?>controlCheck/checkPwordAvailabilityFromTblAdmin",
              type:"POST",
              data:{cpword:cpword},
              success:function(data){
                
                cpwordresult.css({
            'color':'red'
              });

                cpwordresult.html(data);
                //this is to again focus on uname if uname is already register
                if(cpwordresult.html()=='password not match'){
                 document.getElementById('cpword').focus();
                 $(document).ready(function(){
                      $('#btnsubmit').fadeOut();
                  });
             }else{
             	$(document).ready(function(){
                      $('#btnsubmit').fadeIn();
                  });
             }
              },

            });

          }

          
      });
    });

</script>