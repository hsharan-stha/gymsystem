<?php

if(!isset($this->session->userdata['sess_id'])) {

  redirect('controlWelcome/goToLogin');
}

?>
<?php $this->load->view('link');?>
<?php $this->load->view('admin/adminheader');?>
<div class="container-fluid">
<div class="panel panel-default" style="margin-top:10px">
  <div class="panel panel-heading">
<h5 align="center" class="btn btn-link">Videos Uploading Form:
<span style="color:red"><?php  echo $this->session->flashdata('vdoinsertmsg');?></span>
</h5>

  </div>
<div class="panel panel-body" style="font-size: 12px;">

<form name="myForm" action="<?php echo base_url();?>controlVideo/newVideo" method="post"  enctype="multipart/form-data">
   <div class="form-group">
    <label for="vname">Video Name:</label>
    <input type="text" name="vname" class="form-control" id="vname" placeholder="please enter equipment name" required="required">
  </div>

  <div class="form-group">
   <label for="vcat">video Category</label>
   <select class="form-control" name="vcat" id="vcat" onchange="checkCat()">
   <option>please select category</option>
   <?php
if($vdclass->num_rows() > 0){
  foreach($vdclass->result() as $row){
    ?>

   <option><?php echo $row->catname;?></option>
     <?php
  }
}
   ?>
   </select>
 </div>
 <div class="form-group">
   <div id="vcatMessage"></div>
 </div>
<div class="form-group">
   <label for="video">video</label>
   <input type="file"  name="video" class="form-control" id="video"  required="required">
 </div>
<div class="panel panel-footer">
<input type="submit" id="btnsubmit" name="btnvideosubmit" value="submit" class="btn btn-success" onmouseover="checkCat()"/>
</div>
</form>
</div>
</div>
</div>
<?php $this->load->view('footer');?>

<script type="text/javascript">
  function checkCat(){

          var vcat=document.forms["myForm"]["vcat"].value;
          var vcatMessage=$('#vcatMessage');//this variable is for css
          

          if(vcat=='please select category'){
        document.getElementById('vcat').focus();
        vcatMessage.css({
            'color':'red'
          });
         document.getElementById('vcatMessage').innerHTML='please select category';
                  $(document).ready(function(){
                      $('#btnsubmit').fadeOut();
                  });
        }else{
           $(document).ready(function(){
                      $('#btnsubmit').fadeIn();
                  });
          document.getElementById('vcatMessage').innerHTML='';
        }

    }

    </script>