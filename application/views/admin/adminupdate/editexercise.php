
<?php
if(!isset($this->session->userdata['sess_id']) && !isset($this->session->userdata['sess_id_for_trainer'])){

  redirect('controlWelcome/goToLogin');
}
?>
<?php $this->load->view('link');?>
<?php $this->load->view('admin/adminheader');?>
<div class="container-fluid">
<div class="panel panel-default" style="margin-top:10px">
  <div class="panel panel-heading">
<h5 align="center" class="btn btn-link">edit exercise form:
<span style="color:red"><?php  echo $this->session->flashdata('exercise_update');?></span>
</h5>

  </div>
<div class="panel panel-body" id="menu" style="font-size: 12px;">
<?php
if($retriveexerciselist->num_rows() > 0){
  foreach($retriveexerciselist->result() as $row){
?>

<form name="myForm" action="<?php echo base_url();?>controlExercise/updateEditedExercise" method="post">
<div class="col-lg-6">
<div class="form-group">
    <input type="hidden" name="id" class="form-control" id="id" required="required" value="<?php echo $row->id; ?>">
  </div>
 <div class="form-group">
    <label for="eqname">Exercise Name:</label>
    <input type="text" name="eqname" class="form-control" id="eqname" value="<?php echo $row->eqname;?>" placeholder="please enter equipment name" required="required">
  </div>


  <div class="form-group">

   <label for="eqcat">Exercise category:</label>
    <select class="form-control" id="eqcat" name="eqcat" onchange="checkCat()">

    <option><?php echo $row->eqcat;?></option>
    <option>select other to change category</option>
   <?php
if($eqclass->num_rows() > 0){
foreach($eqclass->result() as $rowcat){

  ?>
  
  <option><?php echo $rowcat->catname; ?></option>
  
    <?php
}
}
?>
</select>
 </div>
 <div class="form-group">
          <span id="eqcatMessage"></span>
        </div>
 <div class="form-group">
  <div class="col-lg-12">
    <label for="eqimage">Exercise image:</label>
    </div>
    <div class="col-lg-6">
    <img src="<?php echo base_url();?>assets/images/exercises/<?php echo $row->eqimage;?>" alt="" class="img-responsive"  style="height:200px;">
    </div>
  </div>
</div>

<div class="col-lg-6">
  <div class="form-group">
  <div class="col-lg-12">
    <label for="eqvideo">Exercise video:</label>
    </div>
                <div class="col-lg-6 card"/>
                <video  width="auto" height="" controls>
                <source src="<?php echo base_url();?>assets/images/exercises/<?php echo $row->eqvideo;?>" type="video/mp4">
                <!-- <source src="<?php echo base_url();?>assets/videos/video.ogg" type="video/ogg">
                <source src="<?php echo base_url();?>assets/videos/video.webm" type="video/webm">
                <object data="<?php echo base_url();?>assets/videos/video.mp4"  height="350">
                  <embed src="<?php echo base_url();?>assets/videos/video.swf"  height="350">
                </object>  -->
                Your browser does not support the video tag.
              </video>
              </div>
            
  </div>
  <div class="clear"></div>
   <div class="form-group" style="margin-top: 10px">
    <label for="eqdetails">Exercise details:</label>
    <textarea type="text" name="eqdetails" onchange="checkDetails()"  class="form-control" id="eqdetails" placeholder="please describe about exercise" required="required" style="height:100px;"><?php echo $row->eqdetails;?></textarea>
  </div>
  <div class="form-group">
          <span id="eqdetailsMessage"></span>
        </div>
<div class="panel panel-footer">
<input type="submit" id="btnsubmit" name="btnequipmentsubmit" onmouseover="checkCat()" value="submit" class="btn btn-success" >
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

          var eqcat=document.forms["myForm"]["eqcat"].value;
          var eqcatMessage=$('#eqcatMessage');//this variable is for css
          

          if(eqcat=='select other to change category'){
        document.getElementById('eqcat').focus();
        eqcatMessage.css({
            'color':'red'
          });
         document.getElementById('eqcatMessage').innerHTML='please select category';
                  $(document).ready(function(){
                      $('#btnsubmit').fadeOut();
                  });
        }else{
           $(document).ready(function(){
                      $('#btnsubmit').fadeIn();
                  });
          document.getElementById('eqcatMessage').innerHTML='';
        }

    }

       function checkDetails(){

          var eqdetails=document.forms["myForm"]["eqdetails"].value;
          var eqdetailsMessage=$('#eqdetailsMessage');//this variable is for css
          

        
          if(eqdetails.length>500){
        document.getElementById('eqdetails').focus();
        eqdetailsMessage.css({
            'color':'red'
          });
         document.getElementById('eqdetailsMessage').innerHTML='limit exceed';
                  $(document).ready(function(){
                      $('#btnsubmit').fadeOut();
                  });
        }else{
          document.getElementById('eqdetailsMessage').innerHTML='';
          $(document).ready(function(){
                      $('#btnsubmit').fadeIn();
                  });
        }

    }
    </script>
