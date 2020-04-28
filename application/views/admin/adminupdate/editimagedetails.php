
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
<h5 align="center" class="btn btn-link">edit Image details form:
<span style="color:red"><?php  echo $this->session->flashdata('image_dtl_update');?></span>
</h5>

  </div>
<div class="panel panel-body" id="menu" style="font-size: 12px;">
<?php
if($retriveimagelist->num_rows() > 0){
  foreach($retriveimagelist->result() as $row){
?>

<form name="myForm" action="<?php echo base_url();?>controlImage/updateEditedImageDetails" method="post">

<div class="form-group">
    <input type="hidden" name="id" class="form-control" id="id" required="required" value="<?php echo $row->id; ?>">
  </div>
 <div class="form-group">
    <label for="iname">Image Name:</label>
    <input type="text" name="iname" class="form-control" id="iname" value="<?php echo $row->iname;?>" placeholder="please enter image name" required="required">
  </div>


  <div class="form-group">

   <label for="icat">Image category:</label>
    <select class="form-control" id="icat" name="icat" onchange="checkCat()">

    <option><?php echo $row->icat;?></option>
    <option>select other to change category</option>
   <?php
if($iclass->num_rows() > 0){
foreach($iclass->result() as $rowcat){

  ?>
  
  <option><?php echo $rowcat->catname; ?></option>
  
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
<div class="col-lg-12">
    <label for="image">image:</label>
    </div>
    <div class="col-lg-6">
    <img src="<?php echo base_url();?>assets/images/<?php echo $row->image;?>" style="height:200px;"/>
</div>
</div>

  <div class="clear"></div>
  
<div class="panel panel-footer">
<input type="submit" id="btnsubmit" name="btnequipmentsubmit" value="submit" class="btn btn-success" >
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

          var icat=document.forms["myForm"]["icat"].value;
          var icatMessage=$('#icatMessage');//this variable is for css
          

          if(icat=='select other to change category'){
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

