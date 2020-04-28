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
<h5 align="center" class="btn btn-link">images Uploading Form:
<span style="color:red"><?php     echo $this->session->flashdata('imginsertmsg');?></span>
</h5>

  </div>
<div class="panel panel-body" style="font-size: 12px;">

<form name="myForm" action="<?php echo base_url();?>controlImage/newImage" method="post"  enctype="multipart/form-data">
   <div class="form-group">
    <label for="iname">image Name:</label>
    <input type="text" name="iname" class="form-control" id="iname" placeholder="please enter image name" required="required">
  </div>

  <div class="form-group">
   <label for="icat">image Category</label>
   <select class="form-control" name="icat" id="icat" onchange="checkCat()">
   <option>please select category</option>
   <?php
if($iclass->num_rows() > 0){
  foreach($iclass->result() as $row){
    ?>

   <option><?php echo $row->catname;?></option>
     <?php
  }
}
   ?>
   </select>
 </div>
 <div class="form-group">
   <div id="icatMessage"></div>
 </div>
<div class="form-group">
   <label for="image">image</label>
   <input type="file"  name="image" class="form-control" id="image"  required="required">
 </div>
<div class="panel panel-footer">
<input type="submit" id="btnsubmit" name="btnimagesubmit" value="submit" class="btn btn-success" onmouseover="checkCat()">
</div>
</form>
</div>
</div>
</div>
<?php $this->load->view('footer');?>
<script type="text/javascript">
  function checkCat(){

          var icat=document.forms["myForm"]["icat"].value;
          var icatMessage=$('#icatMessage');//this variable is for css
          

          if(icat=='please select category'){
        document.getElementById('icat').focus();
        icatMessage.css({
            'color':'red'
          });
         document.getElementById('icatMessage').innerHTML='please select category';
                  $(document).ready(function(){
                      $('#btnsubmit').fadeOut();
                  });
        }else{
           $(document).ready(function(){
                      $('#btnsubmit').fadeIn();
                  });
          document.getElementById('icatMessage').innerHTML='';
        }

    }

    </script>