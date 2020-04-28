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
<h5 align="center" class="btn btn-link">Exercise registration form:
<span style="color:red"><?php     echo $this->session->flashdata('eqinsertmsg');?></span>
</h5>

  </div>
<div class="panel panel-body" style="font-size: 12px;">

<form name="myForm" action="<?php echo base_url();?>controlExercise/newExercise" method="post" enctype="multipart/form-data" >
   <div class="form-group">
    <label for="eqname">Exercise Name:</label>
    <input type="text" name="eqname" class="form-control" id="eqname" placeholder="please enter exercise name" required="required">
  </div>


  <div class="form-group">

   <label for="eqcat">Exercise category:</label>
    <select class="form-control" id="eqcat" name="eqcat" onchange="checkCat()">

    <option>please select category</option>
   <?php
if($eqclass->num_rows() > 0){
foreach($eqclass->result() as $row){

	?>
  
  <option><?php echo $row->catname; ?></option>
  
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
    <label for="eqimage">Exercise image:</label>
    <input type="file" name="eqimage" class="form-control" id="eqimage" required="required">
  </div>
  <div class="form-group">
    <label for="eqvideo">Exercise video:</label>
    <input type="file" name="eqvideo" class="form-control" id="eqvideo" required="required">
  </div>
   <div class="form-group">
    <label for="eqdetails">Exercise details:</label>
    <textarea onchange="checkDetails()" type="text" name="eqdetails" class="form-control" id="eqdetails" placeholder="please describe about exercise" required="required" style="height:100px;"></textarea>
  </div>
     <div class="form-group">
          <span id="eqdetailsMessage"></span>
        </div>
<div class="panel panel-footer">
<input type="submit" id="btnsubmit" name="btntreqsubmit" onmouseover="checkCat()" value="submit" class="btn btn-success" >
</div>
</form>
</div>
</div>
</div>
<?php $this->load->view('footer');?>

<script type="text/javascript">
    function checkCat(){

          var eqcat=document.forms["myForm"]["eqcat"].value;
          var eqcatMessage=$('#eqcatMessage');//this variable is for css
          

          if(eqcat=='please select category'){
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