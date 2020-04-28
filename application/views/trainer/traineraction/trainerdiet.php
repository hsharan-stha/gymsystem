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
<h5 align="center" class="btn btn-link">Diet registration form:
<span style="color:red"><?php     echo $this->session->flashdata('dietinsertmsg');?></span>
</h5>

  </div>
<div class="panel panel-body" style="font-size: 12px;">

<form name="myForm" action="<?php echo base_url();?>controlDiet/newDiet" method="post" enctype="multipart/form-data" >
   <div class="form-group">
    <label for="dname">Diet Name:</label>
    <input type="text" name="dname" class="form-control" id="dname" placeholder="please enter diet name" required="required">
  </div>


  <div class="form-group">

   <label for="eqcat">Diet category:</label>
 
<select class="form-control" id="dcat" name="dcat" onclick="checkCat()">
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
    <label for="dimage">diet image:</label>
    <input type="file" name="dimage" class="form-control" id="dimage" required="required">
  </div>
  <div class="form-group">
    <label for="dvideo">diet video:</label>
    <input type="file" name="dvideo" class="form-control" id="dvideo" required="required">
  </div>
   <div class="form-group">
    <label for="ddetails">diet details:</label>
    <textarea onchange="checkDetails()" type="text" name="ddetails" class="form-control" id="ddetails" placeholder="please describe about exercise" required="required" style="height:100px;"></textarea>
  </div>
  <div class="form-group">
   <div id="ddetailsMessage"></div>
 </div>
<div class="panel panel-footer">
<input type="submit" id="btnsubmit" name="btntdietsubmit" value="submit" class="btn btn-success" onmouseover="checkCat()" >
</div>
</form>
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
