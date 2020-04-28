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
<h5 align="center" class="btn btn-link">Schedule form:
 <span style="color:red"><?php     echo $this->session->flashdata('updschtmsg');?></span>
</h5>

  </div>

<?php
if($retriveSchByMid->num_rows() > 0){
  foreach($retriveSchByMid->result() as $schrow){
    ?>


<form id="myForm" action="<?php echo base_url();?>controlSchedule/updateEditedSchedule" method="post" enctype="multipart/form-data">
  <div class="panel panel-body" style="font-size: 12px;">
<input type="hidden" id="id" name="id" value="<?php echo $schrow->id;?>"/>
  <div class="col-lg-2">
   <div class="form-group">
    <label for="mid">Member id:</label>
    <input type="text" id="mid" name="mid" value="<?php echo $schrow->mid;?>"/>
  </div>
<div id="memname"></div>
<div class="form-group">
  <label for="mname">Member name:</label>
  <input type="text" name="mname" class="form-control" value="<?php echo $schrow->mname;?>" id="mname" required="required" placeholder="please enter member name">
</div>
<div class="form-group">
  <label for="esdate">exericse start date:</label>
  <input type="date" name="esdate" class="form-control" value="<?php echo $schrow->esdate;?>" id="esdate" required="required" placeholder="please enter start date">
</div>
<div class="form-group">
  <label for="eedate">Exercise end date:</label>
  <input type="date" name="eedate" class="form-control" value="<?php echo $schrow->eedate;?>" id="eedate" required="required" placeholder="please enter exercise end date">
</div>
</div>

<div class="col-lg-10" id="menu">
<!-- =========================================== -->
  <div class="panel panel-default col-lg-3">
  
    <div class="panel-heading">
      <h4 class="panel-title">
        
          <div class="form-group">

   <label for="day1">day:</label>
    <select class="form-control" id="day1" name="day1">
    <option><?php echo $schrow->day1;?></option>
    <option>please select day</option>
    <option>sunday</option>
     <option>monday</option>
      <option>tuesday</option>
       <option>wednesday</option>
        <option>thursday</option>
         <option>friday</option>
</select>
 </div>

      
      </h4>
    </div>
      <div class="panel-body">
      <div class="form-group">

   <label for="cat1">Exercise category:</label><br/>
   current category:<b><?php echo $schrow->cat1;?></b>
    <select class="form-control" id="cat1" name="cat1" onchange="fetch_select(this.value);">
<option><?php echo $schrow->cat1;?></option>
    <option>please select category</option>
   <?php
if($cat->num_rows() > 0){
foreach($cat->result() as $row){

  ?>
  
  <option><?php echo $row->catname; ?></option>
  
    <?php
}
}
?>
</select>
 </div>

 
 <div class="form-group">
    <div class="col-lg-12"><label for="ename">Exercise name:</label></div>
    <div class="col-lg-12">
    current exercise:<b><?php echo $schrow->ename1cat1;?></b>
    <select class="form-control" id="new_select1" name="ename1cat1">
<option><?php echo $schrow->ename1cat1;?></option>
    <option>please select exercise</option>
    <option></option>
    
</select>
current exercise:<b><?php echo $schrow->ename2cat1;?></b>
 <select class="form-control" id="new_select2" name="ename2cat1">
<option><?php echo $schrow->ename2cat1;?></option>
    <option>please select exercise</option>
    <option></option>
    
</select>
current exercise:<b><?php echo $schrow->ename3cat1;?></b>
 <select class="form-control" id="new_select3" name="ename3cat1">
<option><?php echo $schrow->ename3cat1;?></option>
    <option>please select exercise</option>
    <option></option>
    
</select>
current exercise:<b><?php echo $schrow->ename4cat1;?></b>
 <select class="form-control" id="new_select4" name="ename4cat1">
<option><?php echo $schrow->ename4cat1;?></option>
    <option>please select exercise</option>
    <option></option>
    
</select>
current exercise:<b><?php echo $schrow->ename5cat1;?></b>
 <select class="form-control" id="new_select5" name="ename5cat1">
<option><?php echo $schrow->ename5cat1;?></option>
    <option>please select exercise</option>
    <option></option>
    
</select>
current exercise:<b><?php echo $schrow->ename6cat1;?></b>
 <select class="form-control" id="new_select6" name="ename6cat1">
<option><?php echo $schrow->ename6cat1;?></option>
    <option>please select exercise</option>
    <option></option>
    
</select>
       </div>
  </div>
      </div>
      </div>
   
<!-- .......................................................................................... -->
    <div class="panel panel-default col-lg-3">
  
    <div class="panel-heading">
      <h4 class="panel-title">
        
          <div class="form-group">

   <label for="day2">day:</label>
    <select class="form-control" id="day2" name="day2">
    <option><?php echo $schrow->day2;?></option>
    <option>please select day</option>
    <option>sunday</option>
     <option>monday</option>
      <option>tuesday</option>
       <option>wednesday</option>
        <option>thursday</option>
         <option>friday</option>
</select>
 </div>

      
      </h4>
    </div>
      <div class="panel-body">
      <div class="form-group">

   <label for="cat2">Exercise category:</label><br/>
   current category:<b><?php echo $schrow->cat2;?></b>
    <select class="form-control" id="cat2" name="cat2" onchange="fetch_select2(this.value);">
<option><?php echo $schrow->cat2;?></option>
    <option>please select category</option>
   <?php
if($cat->num_rows() > 0){
foreach($cat->result() as $row){

  ?>
  
  <option><?php echo $row->catname; ?></option>
  
    <?php
}
}
?>
</select>
 </div>

 
 <div class="form-group">
    <div class="col-lg-12"><label for="ename">Exercise name:</label></div>
    <div class="col-lg-12">
    current exercise:<b><?php echo $schrow->ename1cat2;?></b>
    <select class="form-control" id="new_select12" name="ename1cat2">
<option><?php echo $schrow->ename1cat2;?></option>
    <option>please select exercise</option>
    <option></option>
    
</select>
current exercise:<b><?php echo $schrow->ename2cat2;?></b>
 <select class="form-control" id="new_select22" name="ename2cat2">
<option><?php echo $schrow->ename2cat2;?></option>
    <option>please select exercise</option>
    <option></option>
    
</select>
current exercise:<b><?php echo $schrow->ename3cat2;?></b>
 <select class="form-control" id="new_select32" name="ename3cat2">
<option><?php echo $schrow->ename3cat2;?></option>
    <option>please select exercise</option>
    <option></option>
    
</select>
current exercise:<b><?php echo $schrow->ename4cat2;?></b>
 <select class="form-control" id="new_select42" name="ename4cat2">
<option><?php echo $schrow->ename4cat2;?></option>
    <option>please select exercise</option>
    <option></option>
    
</select>
current exercise:<b><?php echo $schrow->ename5cat2;?></b>
 <select class="form-control" id="new_select52" name="ename5cat2">
<option><?php echo $schrow->ename5cat2;?></option>
    <option>please select exercise</option>
    <option></option>
    
</select>
current exercise:<b><?php echo $schrow->ename6cat2;?></b>
 <select class="form-control" id="new_select62" name="ename6cat2">
<option><?php echo $schrow->ename6cat2;?></option>
    <option>please select exercise</option>
    <option></option>
    
</select>
       </div>
  </div>

      </div>
  </div>
<!-- .......................................................................................... -->
    <div class="panel panel-default col-lg-3">
  
    <div class="panel-heading">
      <h4 class="panel-title">
        
          <div class="form-group">

   <label for="day3">day:</label>
    <select class="form-control" id="day3" name="day3">
<option><?php echo $schrow->day3;?></option>
    <option>please select day</option>
    <option>sunday</option>
     <option>monday</option>
      <option>tuesday</option>
       <option>wednesday</option>
        <option>thursday</option>
         <option>friday</option>
</select>
 </div>

      
      </h4>
    </div>
      <div class="panel-body">
      <div class="form-group">

   <label for="cat3">Exercise category:</label><br/>
   current category:<b><?php echo $schrow->cat3;?></b>
    <select class="form-control" id="cat3" name="cat3" onchange="fetch_select3(this.value);">
<option><?php echo $schrow->cat3;?></option>
    <option>please select category</option>
   <?php
if($cat->num_rows() > 0){
foreach($cat->result() as $row){

  ?>
  
  <option><?php echo $row->catname; ?></option>
  
    <?php
}
}
?>
</select>
 </div>

 
 <div class="form-group">
    <div class="col-lg-12"><label for="ename">Exercise name:</label></div>
    <div class="col-lg-12">
    current exercise:<b><?php echo $schrow->ename1cat3;?></b>
    <select class="form-control" id="new_select123" name="ename1cat3">
<option><?php echo $schrow->ename1cat3;?></option>
    <option>please select exercise</option>
    <option></option>
    
</select>
current exercise:<b><?php echo $schrow->ename2cat3;?></b>
 <select class="form-control" id="new_select223" name="ename2cat3">
<option><?php echo $schrow->ename2cat3;?></option>
    <option>please select exercise</option>
    <option></option>
    
</select>
current exercise:<b><?php echo $schrow->ename3cat3;?></b>
 <select class="form-control" id="new_select323" name="ename3cat3">
<option><?php echo $schrow->ename3cat3;?></option>
    <option>please select exercise</option>
    <option></option>
    
</select>
current exercise:<b><?php echo $schrow->ename4cat3;?></b>
 <select class="form-control" id="new_select423" name="ename4cat3">
<option><?php echo $schrow->ename4cat3;?></option>
    <option>please select exercise</option>
    <option></option>
    
</select>
current exercise:<b><?php echo $schrow->ename5cat3;?></b>
 <select class="form-control" id="new_select523" name="ename5cat3">
<option><?php echo $schrow->ename5cat3;?></option>
    <option>please select exercise</option>
    <option></option>
    
</select>
current exercise:<b><?php echo $schrow->ename6cat3;?></b>
 <select class="form-control" id="new_select623" name="ename6cat3">
<option><?php echo $schrow->ename6cat3;?></option>
    <option>please select exercise</option>
    <option></option>
    
</select>
       </div>
  </div>

      </div>
  </div>
<!-- .......................................................................................... -->
 <div class="panel panel-default col-lg-3">
  
    <div class="panel-heading">
      <h4 class="panel-title">
        
          <div class="form-group">

   <label for="day4">day:</label>
    <select class="form-control" id="day4" name="day4">
<option><?php echo $schrow->day4;?></option>
    <option>please select day</option>
    <option>sunday</option>
     <option>monday</option>
      <option>tuesday</option>
       <option>wednesday</option>
        <option>thursday</option>
         <option>friday</option>
</select>
 </div>

      
      </h4>
    </div>
      <div class="panel-body">
      <div class="form-group">

   <label for="cat4">Exercise category:</label><br/>
   current catgory:<b><?php echo $schrow->cat4;?></b>
    <select class="form-control" id="cat4" name="cat4" onchange="fetch_select4(this.value);">
<option><?php echo $schrow->cat4;?></option>
    <option>please select category</option>
   <?php
if($cat->num_rows() > 0){
foreach($cat->result() as $row){

  ?>
  
  <option><?php echo $row->catname; ?></option>
  
    <?php
}
}
?>
</select>
 </div>

 
 <div class="form-group">
    <div class="col-lg-12"><label for="ename">Exercise name:</label></div>
    <div class="col-lg-12">
    current exercise:<b><?php echo $schrow->ename1cat4;?></b>
    <select class="form-control" id="new_select1234" name="ename1cat4">
<option><?php echo $schrow->ename1cat4;?></option>
    <option>please select exercise</option>
    <option></option>
    
</select>
current exercise:<b><?php echo $schrow->ename2cat4;?></b>
 <select class="form-control" id="new_select2234" name="ename2cat4">
<option><?php echo $schrow->ename2cat4;?></option>
    <option>please select exercise</option>
    <option></option>
    
</select>
current exercise:<b><?php echo $schrow->ename3cat4;?></b>
 <select class="form-control" id="new_select3234" name="ename3cat4">
<option><?php echo $schrow->ename3cat4;?></option>
    <option>please select exercise</option>
    <option></option>
    
</select>
current exercise:<b><?php echo $schrow->ename4cat4;?></b>
 <select class="form-control" id="new_select4234" name="ename4cat4">
<option><?php echo $schrow->ename4cat4;?></option>
    <option>please select exercise</option>
    <option></option>
    
</select>
current exercise:<b><?php echo $schrow->ename5cat4;?></b>
 <select class="form-control" id="new_select5234" name="ename5cat4">
<option><?php echo $schrow->ename5cat4;?></option>
    <option>please select exercise</option>
    <option></option>
    
</select>
current exercise:<b><?php echo $schrow->ename6cat4;?></b>
 <select class="form-control" id="new_select6234" name="ename6cat4">
<option><?php echo $schrow->ename6cat4;?></option>
    <option>please select exercise</option>
    <option></option>
    
</select>
       </div>
  </div>

      </div>
  </div>
<!-- .......................................................................................... -->
 <div class="panel panel-default col-lg-3">
  
    <div class="panel-heading">
      <h4 class="panel-title">
        
          <div class="form-group">

   <label for="day5">day:</label>
    <select class="form-control" id="day5" name="day5">
<option><?php echo $schrow->day5;?></option>
    <option>please select day</option>
    <option>sunday</option>
     <option>monday</option>
      <option>tuesday</option>
       <option>wednesday</option>
        <option>thursday</option>
         <option>friday</option>
</select>
 </div>

      
      </h4>
    </div>
      <div class="panel-body">
      <div class="form-group">

   <label for="cat5">Exercise category:</label><br/>
   current category:<b><?php echo $schrow->cat5;?></b>
    <select class="form-control" id="cat5" name="cat5" onchange="fetch_select5(this.value);">
<option><?php echo $schrow->cat5;?></option>
    <option>please select category</option>
   <?php
if($cat->num_rows() > 0){
foreach($cat->result() as $row){

  ?>
  
  <option><?php echo $row->catname; ?></option>
  
    <?php
}
}
?>
</select>
 </div>

 
 <div class="form-group">
    <div class="col-lg-12"><label for="ename">Exercise name:</label></div>
    <div class="col-lg-12">
    current exercise:<b><?php echo $schrow->ename1cat5;?></b>
    <select class="form-control" id="new_select12345" name="ename1cat5">
<option><?php echo $schrow->ename1cat5;?></option>
    <option>please select exercise</option>
    <option></option>
    
</select>
  current exercise:<b><?php echo $schrow->ename2cat5;?></b>
 <select class="form-control" id="new_select22345" name="ename2cat5">
<option><?php echo $schrow->ename2cat5;?></option>
    <option>please select exercise</option>
    <option></option>
    
</select>
  current exercise:<b><?php echo $schrow->ename3cat5;?></b>
 <select class="form-control" id="new_select32345" name="ename3cat5">
<option><?php echo $schrow->ename3cat5;?></option>
    <option>please select exercise</option>
    <option></option>
    
</select>
  current exercise:<b><?php echo $schrow->ename4cat5;?></b>
 <select class="form-control" id="new_select42345" name="ename4cat5">
<option><?php echo $schrow->ename4cat5;?></option>
    <option>please select exercise</option>
    <option></option>
    
</select>
  current exercise:<b><?php echo $schrow->ename5cat5;?></b>
 <select class="form-control" id="new_select52345" name="ename5cat5">
<option><?php echo $schrow->ename5cat5;?></option>
    <option>please select exercise</option>
    <option></option>
    
</select>

  current exercise:<b><?php echo $schrow->ename6cat5;?></b>
 <select class="form-control" id="new_select62345" name="ename6cat5">
<option><?php echo $schrow->ename6cat5;?></option>
    <option>please select exercise</option>
    <option></option>
    
</select>
       </div>
  </div>

      </div>
  </div>
<!-- .......................................................................................... -->
 <div class="panel panel-default col-lg-3">
  
    <div class="panel-heading">
      <h4 class="panel-title">
        
          <div class="form-group">

   <label for="day6">day:</label>
    <select class="form-control" id="day6" name="day6">
<option><?php echo $schrow->day6;?></option>
    <option>please select day</option>
    <option>sunday</option>
     <option>monday</option>
      <option>tuesday</option>
       <option>wednesday</option>
        <option>thursday</option>
         <option>friday</option>
</select>
 </div>

      
      </h4>
    </div>
      <div class="panel-body">
      <div class="form-group">

   <label for="cat6">Exercise category:</label><br/>
     current category:<b><?php echo $schrow->cat6;?></b>
    <select class="form-control" id="cat6" name="cat6" onchange="fetch_select6(this.value);">
<option><?php echo $schrow->cat6;?></option>
    <option>please select category</option>
   <?php
if($cat->num_rows() > 0){
foreach($cat->result() as $row){

  ?>
  
  <option><?php echo $row->catname; ?></option>
  
    <?php
}
}
?>
</select>
 </div>

 
 <div class="form-group">
    <div class="col-lg-12"><label for="ename">Exercise name:</label></div>
    <div class="col-lg-12">
      current exercise:<b><?php echo $schrow->ename1cat6;?></b>
    <select class="form-control" id="new_select123456" name="ename1cat6">
<option><?php echo $schrow->ename1cat6;?></option>
    <option>please select exercise</option>
    <option></option>
    
</select>
 current exercise:<b><?php echo $schrow->ename2cat6;?></b>
 <select class="form-control" id="new_select223456" name="ename2cat6">
<option><?php echo $schrow->ename2cat6;?></option>
    <option>please select exercise</option>
    <option></option>
    
</select>
 current exercise:<b><?php echo $schrow->ename3cat6;?></b>
 <select class="form-control" id="new_select323456" name="ename3cat6">
<option><?php echo $schrow->ename3cat6;?></option>
    <option>please select exercise</option>
    <option></option>
    
</select>
 current exercise:<b><?php echo $schrow->ename4cat6;?></b>
 <select class="form-control" id="new_select423456" name="ename4cat6">
<option><?php echo $schrow->ename4cat6;?></option>
    <option>please select exercise</option>
    <option></option>
    
</select>
 current exercise:<b><?php echo $schrow->ename5cat6;?></b>
 <select class="form-control" id="new_select523456" name="ename5cat6">
<option><?php echo $schrow->ename5cat6;?></option>
    <option>please select exercise</option>
    <option></option>
    
</select>
 current exercise:<b><?php echo $schrow->ename6cat6;?></b>
 <select class="form-control" id="new_select623456" name="ename6cat6">
<option><?php echo $schrow->ename6cat6;?></option>
    <option>please select exercise</option>
    <option></option>
    
</select>
       </div>
  </div>

      </div>
  </div>
<!-- .......................................................................................... -->
<div class="panel panel-default col-lg-3">
  
    <div class="panel-heading">
      <h4 class="panel-title">
        
          <div class="form-group">

   <label for="day7">day:</label>
    <select class="form-control" id="day7" name="day7">
<option><?php echo $schrow->day7;?></option>
    <option>please select day</option>
    <option>all day</option>
    <option>sunday</option>
     <option>monday</option>
      <option>tuesday</option>
       <option>wednesday</option>
        <option>thursday</option>
         <option>friday</option>
</select>
 </div>

      
      </h4>
    </div>
      <div class="panel-body">
      <div class="form-group">

   <label for="cat7">Exercise category:</label><br/>
     current category:<b><?php echo $schrow->cat7;?></b>
    <select class="form-control" id="cat7" name="cat7" onchange="fetch_select7(this.value);">
<option><?php echo $schrow->cat7;?></option>
    <option>please select category</option>
   <?php
if($cat->num_rows() > 0){
foreach($cat->result() as $row){

  ?>
  
  <option><?php echo $row->catname; ?></option>
  
    <?php
}
}
?>
</select>
 </div>

 
 <div class="form-group">
    <div class="col-lg-12"><label for="ename">Exercise name:</label></div>
    <div class="col-lg-12">
      current exercise:<b><?php echo $schrow->ename1cat7;?></b>
    <select class="form-control" id="new_select1234567" name="ename1cat7">
<option><?php echo $schrow->ename1cat7;?></option>
    <option>please select exercise</option>
    <option></option>
    
</select>
 current exercise:<b><?php echo $schrow->ename2cat7;?></b>
 <select class="form-control" id="new_select2234567" name="ename2cat7">
<option><?php echo $schrow->ename2cat7;?></option>
    <option>please select exercise</option>
    <option></option>
    
</select>
 current exercise:<b><?php echo $schrow->ename3cat7;?></b>
 <select class="form-control" id="new_select3234567" name="ename3cat7">
<option><?php echo $schrow->ename3cat7;?></option>
    <option>please select exercise</option>
    <option></option>
    
</select>
 current exercise:<b><?php echo $schrow->ename4cat7;?></b>
 <select class="form-control" id="new_select4234567" name="ename4cat7">
<option><?php echo $schrow->ename4cat7;?></option>
    <option>please select exercise</option>
    <option></option>
    
</select>
 current exercise:<b><?php echo $schrow->ename5cat7;?></b>
 <select class="form-control" id="new_select5234567" name="ename5cat7">
<option><?php echo $schrow->ename5cat7;?></option>
    <option>please select exercise</option>
    <option></option>
    
</select>
 current exercise:<b><?php echo $schrow->ename6cat7;?></b>
 <select class="form-control" id="new_select6234567" name="ename6cat7">
<option><?php echo $schrow->ename6cat7;?></option>
    <option>please select exercise</option>
    <option></option>
    
</select>
       </div>
  </div>

      </div>
  </div>
<!-- .......................................................................................... -->
      </div>
  <div class="panel panel-footer">
<input type="submit" name="btnschsubmit" value="submit" class="btn btn-success center-block" >
</div>
</form>
  <?php
  }
}
  ?>
</div>


</div>

<?php $this->load->view('footer');?>


<script>

 function fetch_select(val)
{
 $.ajax({
 type: 'post',
 url: '<?php echo base_url();?>controlCheck/checkCategoryName',
 data: {
  get_option:val
 },
 success: function (data) {
    document.getElementById("new_select1").innerHTML=data; 
    document.getElementById("new_select2").innerHTML=data;
    document.getElementById("new_select3").innerHTML=data; 
    document.getElementById("new_select4").innerHTML=data;
    document.getElementById("new_select5").innerHTML=data; 
    document.getElementById("new_select6").innerHTML=data; 
 }
 });
}

 function fetch_select2(val2)
{
 $.ajax({
 type: 'post',
 url: '<?php echo base_url();?>controlCheck/checkCategoryName',
 data: {
  get_option:val2
 },
 success: function (data) {
    document.getElementById("new_select12").innerHTML=data; 
    document.getElementById("new_select22").innerHTML=data;
    document.getElementById("new_select32").innerHTML=data; 
    document.getElementById("new_select42").innerHTML=data;
    document.getElementById("new_select52").innerHTML=data; 
    document.getElementById("new_select62").innerHTML=data; 
 }
 });
}

 function fetch_select3(val3)
{
 $.ajax({
 type: 'post',
 url: '<?php echo base_url();?>controlCheck/checkCategoryName',
 data: {
  get_option:val3
 },
 success: function (data) {
    document.getElementById("new_select123").innerHTML=data; 
    document.getElementById("new_select223").innerHTML=data;
    document.getElementById("new_select323").innerHTML=data; 
    document.getElementById("new_select423").innerHTML=data;
    document.getElementById("new_select523").innerHTML=data; 
    document.getElementById("new_select623").innerHTML=data; 
 }
 });
}

 function fetch_select4(val4)
{
 $.ajax({
 type: 'post',
 url: '<?php echo base_url();?>controlCheck/checkCategoryName',
 data: {
  get_option:val4
 },
 success: function (data) {
    document.getElementById("new_select1234").innerHTML=data; 
    document.getElementById("new_select2234").innerHTML=data;
    document.getElementById("new_select3234").innerHTML=data; 
    document.getElementById("new_select4234").innerHTML=data;
    document.getElementById("new_select5234").innerHTML=data; 
    document.getElementById("new_select6234").innerHTML=data; 
 }
 });
}

 function fetch_select5(val5)
{
 $.ajax({
 type: 'post',
 url: '<?php echo base_url();?>controlCheck/checkCategoryName',
 data: {
  get_option:val5
 },
 success: function (data) {
    document.getElementById("new_select12345").innerHTML=data; 
    document.getElementById("new_select22345").innerHTML=data;
    document.getElementById("new_select32345").innerHTML=data; 
    document.getElementById("new_select42345").innerHTML=data;
    document.getElementById("new_select52345").innerHTML=data; 
    document.getElementById("new_select62345").innerHTML=data; 
 }
 });
}
 function fetch_select6(val6)
{
 $.ajax({
 type: 'post',
 url: '<?php echo base_url();?>controlCheck/checkCategoryName',
 data: {
  get_option:val6
 },
 success: function (data) {
    document.getElementById("new_select123456").innerHTML=data; 
    document.getElementById("new_select223456").innerHTML=data;
    document.getElementById("new_select323456").innerHTML=data; 
    document.getElementById("new_select423456").innerHTML=data;
    document.getElementById("new_select523456").innerHTML=data; 
    document.getElementById("new_select623456").innerHTML=data; 
 }
 });
}
 function fetch_select7(val7)
{
 $.ajax({
 type: 'post',
 url: '<?php echo base_url();?>controlCheck/checkCategoryName',
 data: {
  get_option:val7
 },
 success: function (data) {
    document.getElementById("new_select1234567").innerHTML=data; 
    document.getElementById("new_select2234567").innerHTML=data;
    document.getElementById("new_select3234567").innerHTML=data; 
    document.getElementById("new_select4234567").innerHTML=data;
    document.getElementById("new_select5234567").innerHTML=data; 
    document.getElementById("new_select6234567").innerHTML=data; 
 }
 });
}
</script>




