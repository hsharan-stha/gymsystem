
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
<h5 align="center" class="btn btn-link">edit video details form:
<span style="color:red"><?php  echo $this->session->flashdata('video_dtl_update');?></span>
</h5>

  </div>
<div class="panel panel-body" id="menu" style="font-size: 12px;">
<?php
if($retrivevideolist->num_rows() > 0){
  foreach($retrivevideolist->result() as $row){
?>

<form name="myForm" action="<?php echo base_url();?>controlVideo/updateEditedVideoDetails" method="post">

<div class="form-group">
    <input type="hidden" name="id" class="form-control" id="id" required="required" value="<?php echo $row->id; ?>">
  </div>
  <div class="col-lg-6">
 <div class="form-group">
    <label for="vname">Video Name:</label>
    <input type="text" name="vname" class="form-control" id="vname" value="<?php echo $row->vname;?>" placeholder="please enter video name" required="required">
  </div>


  <div class="form-group">

   <label for="vcat">Video category:</label>
    <select class="form-control" id="vcat" name="vcat" onchange="checkCat()">

    <option><?php echo $row->vcat;?></option>
    <option>select other to change category</option>
   <?php
if($vclass->num_rows() > 0){
foreach($vclass->result() as $rowcat){

  ?>
  
  <option><?php echo $rowcat->catname; ?></option>
  
    <?php
}
}
?>
</select>
 </div>
<div class="form-group">
  <div id="vcatMessage"></div>
</div>

</div>
<div class="col-lg-6">
<div class="form-group">
<div class="col-lg-12">
    <label for="image">Video:</label>
    </div>
    <div class="col-lg-12">
       <div class="view view-fifth">
                <video  width="auto" height="450" controls>
                <source src="<?php echo base_url();?>assets/videos/<?php echo $row->video;?>" type="video/mp4">
                <!-- <source src="<?php echo base_url();?>assets/videos/video.ogg" type="video/ogg">
                <source src="<?php echo base_url();?>assets/videos/video.webm" type="video/webm">
                <object data="<?php echo base_url();?>assets/videos/video.mp4"  height="350">
                  <embed src="<?php echo base_url();?>assets/videos/video.swf"  height="350">
                </object>  -->
                Your browser does not support the video tag.
              </video>
                
                    </div>
</div>
</div>

  <div class="clear"></div>
  
<div class="panel panel-footer">
<input type="submit" id="btnsubmit" name="btnvideosubmit" value="submit" class="btn btn-success" >
</div>
</div>
</form>
</div>

<?php
  }
}
?>

</div>
</div>
<div><?php $this->load->view('footer');?></div>
<script type="text/javascript">
  function checkCat(){

          var vcat=document.forms["myForm"]["vcat"].value;
          var vcatMessage=$('#vcatMessage');//this variable is for css
          

          if(vcat=='select other to change category'){
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

