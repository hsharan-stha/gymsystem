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
 <span style="color:red"><?php  echo $this->session->flashdata('schinsert');?></span>
 
</h5>

  </div>


<form id="myForm" action="<?php echo base_url();?>controlSchedule/newSchedule" method="post" enctype="multipart/form-data">
  <div class="panel panel-body" style="font-size: 12px;">
  <div class="col-lg-2">
   <div class="form-group">
    <label for="mid">Member id:</label>
   <select class="form-control" id="mid" name="mid" onchange="getMember()">
     <option>please select member ID</option>
   <?php
if($mid->num_rows() > 0){
foreach($mid->result() as $row){

  ?>
  
  <option><?php echo $row->id; ?></option>
  
    <?php
}
}
?>
   </select>
  </div>
<div id="memname"></div>
<div class="form-group">
  <label for="mname">Member name:</label>
  <input type="text" name="mname" class="form-control" id="mname" required="required" placeholder="please enter member name">
</div>
<div class="form-group">
  <label for="esdate">exericse start date:</label>
  <input type="date" name="esdate" class="form-control" id="esdate" required="required" placeholder="please enter start date">
</div>
<div class="form-group">
  <label for="eedate">Exercise end date:</label>
  <input type="date" name="eedate" class="form-control" id="eedate" required="required" placeholder="please enter exercise end date">
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

   <label for="cat1">Exercise category:</label>
    <select class="form-control" id="cat1" name="cat1" onchange="fetch_select(this.value);">

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
    <select class="form-control" id="new_select1" name="ename1cat1">

    <option>please select exercise</option>
    <option></option>
    
</select>

 <select class="form-control" id="new_select2" name="ename2cat1">

    <option>please select exercise</option>
    <option></option>
    
</select>

 <select class="form-control" id="new_select3" name="ename3cat1">

    <option>please select exercise</option>
    <option></option>
    
</select>

 <select class="form-control" id="new_select4" name="ename4cat1">

    <option>please select exercise</option>
    <option></option>
    
</select>

 <select class="form-control" id="new_select5" name="ename5cat1">

    <option>please select exercise</option>
    <option></option>
    
</select>

 <select class="form-control" id="new_select6" name="ename6cat1">

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

   <label for="cat2">Exercise category:</label>
    <select class="form-control" id="cat2" name="cat2" onchange="fetch_select2(this.value);">

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
    <select class="form-control" id="new_select12" name="ename1cat2">

    <option>please select exercise</option>
    <option></option>
    
</select>

 <select class="form-control" id="new_select22" name="ename2cat2">

    <option>please select exercise</option>
    <option></option>
    
</select>

 <select class="form-control" id="new_select32" name="ename3cat2">

    <option>please select exercise</option>
    <option></option>
    
</select>

 <select class="form-control" id="new_select42" name="ename4cat2">

    <option>please select exercise</option>
    <option></option>
    
</select>

 <select class="form-control" id="new_select52" name="ename5cat2">

    <option>please select exercise</option>
    <option></option>
    
</select>

 <select class="form-control" id="new_select62" name="ename6cat2">

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

   <label for="cat3">Exercise category:</label>
    <select class="form-control" id="cat3" name="cat3" onchange="fetch_select3(this.value);">

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
    <select class="form-control" id="new_select123" name="ename1cat3">

    <option>please select exercise</option>
    <option></option>
    
</select>

 <select class="form-control" id="new_select223" name="ename2cat3">

    <option>please select exercise</option>
    <option></option>
    
</select>

 <select class="form-control" id="new_select323" name="ename3cat3">

    <option>please select exercise</option>
    <option></option>
    
</select>

 <select class="form-control" id="new_select423" name="ename4cat3">

    <option>please select exercise</option>
    <option></option>
    
</select>

 <select class="form-control" id="new_select523" name="ename5cat3">

    <option>please select exercise</option>
    <option></option>
    
</select>

 <select class="form-control" id="new_select623" name="ename6cat3">

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

   <label for="cat4">Exercise category:</label>
    <select class="form-control" id="cat4" name="cat4" onchange="fetch_select4(this.value);">

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
    <select class="form-control" id="new_select1234" name="ename1cat4">

    <option>please select exercise</option>
    <option></option>
    
</select>

 <select class="form-control" id="new_select2234" name="ename2cat4">

    <option>please select exercise</option>
    <option></option>
    
</select>

 <select class="form-control" id="new_select3234" name="ename3cat4">

    <option>please select exercise</option>
    <option></option>
    
</select>

 <select class="form-control" id="new_select4234" name="ename4cat4">

    <option>please select exercise</option>
    <option></option>
    
</select>

 <select class="form-control" id="new_select5234" name="ename5cat4">

    <option>please select exercise</option>
    <option></option>
    
</select>

 <select class="form-control" id="new_select6234" name="ename6cat4">

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

   <label for="cat5">Exercise category:</label>
    <select class="form-control" id="cat5" name="cat5" onchange="fetch_select5(this.value);">

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
    <select class="form-control" id="new_select12345" name="ename1cat5">

    <option>please select exercise</option>
    <option></option>
    
</select>

 <select class="form-control" id="new_select22345" name="ename2cat5">

    <option>please select exercise</option>
    <option></option>
    
</select>

 <select class="form-control" id="new_select32345" name="ename3cat5">

    <option>please select exercise</option>
    <option></option>
    
</select>

 <select class="form-control" id="new_select42345" name="ename4cat5">

    <option>please select exercise</option>
    <option></option>
    
</select>

 <select class="form-control" id="new_select52345" name="ename5cat5">

    <option>please select exercise</option>
    <option></option>
    
</select>

 <select class="form-control" id="new_select62345" name="ename6cat5">

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

   <label for="cat6">Exercise category:</label>
    <select class="form-control" id="cat6" name="cat6" onchange="fetch_select6(this.value);">

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
    <select class="form-control" id="new_select123456" name="ename1cat6">

    <option>please select exercise</option>
    <option></option>
    
</select>

 <select class="form-control" id="new_select223456" name="ename2cat6">

    <option>please select exercise</option>
    <option></option>
    
</select>

 <select class="form-control" id="new_select323456" name="ename3cat6">

    <option>please select exercise</option>
    <option></option>
    
</select>

 <select class="form-control" id="new_select423456" name="ename4cat6">

    <option>please select exercise</option>
    <option></option>
    
</select>

 <select class="form-control" id="new_select523456" name="ename5cat6">

    <option>please select exercise</option>
    <option></option>
    
</select>

 <select class="form-control" id="new_select623456" name="ename6cat6">

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

   <label for="cat7">Exercise category:</label>
    <select class="form-control" id="cat7" name="cat7" onchange="fetch_select7(this.value);">

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
    <select class="form-control" id="new_select1234567" name="ename1cat7">

    <option>please select exercise</option>
    <option></option>
    
</select>

 <select class="form-control" id="new_select2234567" name="ename2cat7">

    <option>please select exercise</option>
    <option></option>
    
</select>

 <select class="form-control" id="new_select3234567" name="ename3cat7">

    <option>please select exercise</option>
    <option></option>
    
</select>

 <select class="form-control" id="new_select4234567" name="ename4cat7">

    <option>please select exercise</option>
    <option></option>
    
</select>

 <select class="form-control" id="new_select5234567" name="ename5cat7">

    <option>please select exercise</option>
    <option></option>
    
</select>

 <select class="form-control" id="new_select6234567" name="ename6cat7">

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

</div>


</div>

<?php $this->load->view('footer');?>


<script>
 
    $(document).ready(function(){
      $('#mid').click(function(){
          var mid=$('#mid').val();
          
          if(mid!="please select member ID"){
           
            $.ajax({
              url:"<?php echo base_url();?>controlCheck/checkMemberName",
              type:"POST",
              data:{mid:mid},
              success:function(data){
                $('#mname').val(data);
              }

            });
          }
      });
    });
 

</script>


<script> 
    // $(document).ready(function(){
    //   $('#cat1').click(function(){
    //       var cat1=$('#cat1').val();
          
    //       if(cat1!="please select category"){
           
    //         $.ajax({
    //           url:"<?php echo base_url();?>controlCheck/checkCategoryName",
    //           type:"POST",
    //           data:{cat1:cat1},
    //           success:function(data){
    //              document.getElementById("new_select").innerHTML=data;
    //           }

    //         });
    //       }
    //   });
    // });
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




