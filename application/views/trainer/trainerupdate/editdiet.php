<?php
if(!isset($this->session->userdata['sess_id_for_trainer'])){
  redirect('controlWelcome/goToLogin');
}
?>
<html>

<?php $this->load->view("link"); ?>
<?php $this->load->view('trainer/trainerheader');?>
<div class="container-fluid">
<div class="panel panel-default" style="margin-top:10px">
  <div class="panel panel-heading">
<h5 align="center" class="btn btn-link">Diet edit registration form:
<span style="color:red"><?php     echo $this->session->flashdata('diet_update');?></span>
</h5>

  </div>
<div class="panel panel-body" style="font-size: 12px;">
<?php
if($retrivediet->num_rows()>0){
  foreach($retrivediet->result() as $row){
    ?>
<form name="myForm" action="<?php echo base_url();?>controlDiet/updateEditedDiet" method="post" enctype="multipart/form-data" >
<input id="id" type="hidden" name="id" value="<?php echo $row->id;?>"/>
<div class="col-lg-6">
   <div class="form-group">
    <label for="dname">Diet Name:</label>
    <input type="text" name="dname" value="<?php echo $row->dname;?>" class="form-control" id="dname" placeholder="please enter diet name" required="required">
  </div>


  <div class="form-group">

   <label for="eqcat">Diet category:</label>
 
<select class="form-control" id="dcat" name="dcat" onchange="checkCat()">
<option><?php echo $row->dcat;?></option>
    <option>please select category</option>
    <option>gain weight</option>
    <option>to maintain fit</option>
    <option>loose weight</option>
</select>
 </div>
  <div class="form-group">
   <div id="dcatMessage"></div>
 </div>
  <div class="form-group">
  <div class="col-lg-12">
    <label for="dimage">diet image:</label>
    </div>
    <div class="col-lg-6">
    <img src="<?php echo base_url();?>assets/images/diets/<?php echo $row->dimage;?>" alt="" class="img-responsive"  style="height:200px;">
    </div>
  </div>
  </div>

  <div class="col-lg-6">
   <div class="form-group">
  <div class="col-lg-12">
    <label for="eqvideo">diet video:</label>
    </div>
                <div class="col-lg-6 card"/>
                <video  width="auto" height="" controls>
                <source src="<?php echo base_url();?>assets/images/diets/<?php echo $row->dvideo;?>" type="video/mp4">
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
    <label for="ddetails">diet details:</label>
    <textarea onchange="checkDetails()" type="text" name="ddetails"  class="form-control" id="ddetails" placeholder="please describe about exercise" required="required" style="height:100px;"><?php echo $row->ddetails;?></textarea>
  </div>
   <div class="form-group">
   <div id="ddetailsMessage"></div>
 </div>
<div class="panel panel-footer">
<input type="submit" id="btnsubmit" name="btntdietsubmit" value="submit" class="btn btn-success" >
</div>
</div>
</form>
  <?php
  }
}
  ?>
</div>
</div>
</div>
<?php $this->load->view('footer');?>
<script type="text/javascript">
    function checkCat(){

          var dcat=document.forms["myForm"]["dcat"].value;
          var dcatMessage=$('#dcatMessage');//this variable is for css
          

          if(dcat=='please select category'){
        document.getElementById('dcat').focus();
        dcatMessage.css({
            'color':'red'
          });
         document.getElementById('dcatMessage').innerHTML='please select category';
                  $(document).ready(function(){
                      $('#btnsubmit').fadeOut();
                  });
        }else{
           $(document).ready(function(){
                      $('#btnsubmit').fadeIn();
                  });
          document.getElementById('dcatMessage').innerHTML='';
        }

    }

       function checkDetails(){

          var ddetails=document.forms["myForm"]["ddetails"].value;
          var ddetailsMessage=$('#ddetailsMessage');//this variable is for css
          

        
          if(ddetails.length>500){
        document.getElementById('ddetails').focus();
        ddetailsMessage.css({
            'color':'red'
          });
         document.getElementById('ddetailsMessage').innerHTML='limit exceed';
                  $(document).ready(function(){
                      $('#btnsubmit').fadeOut();
                  });
        }else{
          document.getElementById('ddetailsMessage').innerHTML='';
           $(document).ready(function(){
                      $('#btnsubmit').fadeIn();
                  });
        }

    }
    </script>