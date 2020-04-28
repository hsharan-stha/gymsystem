<?php

if(!isset($this->session->userdata['sess_id'])) {

  redirect('controlWelcome/goToLogin');
}

?>
<?php $this->load->view('link');?>
<?php $this->load->view('admin/adminheader');?>
<div class="container-fluid">
<div class="panel panel-default" style="margin-top:10px">
<div class="col-lg-6">
  <div class="panel panel-heading">
<h5 align="center" class="btn btn-link">member entry record Form:
<span style="color:red"><?php  echo $this->session->flashdata('entry');?></span>
</h5>

  </div>
<div class="panel panel-body" style="font-size: 12px;">

<form name="myForm" action="<?php echo base_url();?>controlEntry/newEntry" method="post"  enctype="multipart/form-data">
<div class="form-group">
  <label for="mid">member id</label>
   <select class="form-control" name="mid" id="mid" onchange="checkId()">
   <option>please select member id</option>
   <?php
if($mid->num_rows() > 0){
  foreach($mid->result() as $row){
    ?>

   <option><?php echo $row->id;?></option>
     <?php
  }
}
   ?>
   </select>

</div>
<div class="form-group">
  <div id="midMessage"></div>
</div>
   <div class="form-group">
    <label for="mname">member Name:</label>
    <input type="text" name="mname" readonly="readonly" class="form-control" id="mname" placeholder="please get member name" required="required">
  </div>
<div class="form-group">
    <label for="edate">entry date:</label>
    <input type="text" name="edate" readonly="readonly" value="<?php echo date("Y/m/d"); ?> " class="form-control" id="edate" placeholder="please enter entry date" required="required">
  </div>
 <div class="form-group">
    <label for="etime">entry time:</label>
    <input type="text" readonly="readonly"  name="etime" class="form-control" id="etime" placeholder="please enter entry time" required="required">
  </div>

<div class="panel panel-footer">
<input type="submit" id="btnentrysubmit" name="btnentrysubmit" value="submit" class="btn btn-success" onmouseover="checkId()" />
</div>
</form>
</div>
</div>


<div class="col-lg-6">
  <div class="panel panel-heading">
<h5 align="center" class="btn btn-link">member left record Form:
<span style="color:red"><?php  echo $this->session->flashdata('left');?></span>
</h5>

  </div>
<div class="panel panel-body" style="font-size: 12px;">

<form name="myleftForm" action="<?php echo base_url();?>controlEntry/getLeftTimeOfNewEntry" method="post"  enctype="multipart/form-data">
 <div class="form-group">
  <label for="leftmid">member id</label>
   <select class="form-control" name="leftmid" id="leftmid" onchange="checkLeftId()">
   <option>please select member id</option>
   <?php
if($mid->num_rows() > 0){
  foreach($mid->result() as $row){
    ?>

   <option><?php echo $row->id;?></option>
     <?php
  }
}
   ?>
   </select>

</div>
<div class="form-group">
  <div id="leftmidMessage"></div>
</div>
<!-- this hidden date is require to update left date of same member in next days -->
<input type="hidden" name="ldate" readonly="readonly" value="<?php echo date("Y/m/d"); ?> " class="form-control" id="ldate" placeholder="please enter entry date" required="required">

 <div class="form-group">
    <label for="ltime">left time:</label>
    <input type="text" readonly="readonly" name="ltime" class="form-control" id="ltime" placeholder="please enter left time" required="required" >
  </div>
<div class="panel panel-footer">
<input type="submit" id="btnleftsubmit" name="btleftsubmit" value="submit" class="btn btn-success" onmouseover="checkLeftId()" onmousemove="gettime()"/>
</div>
</form>
</div>
</div>
</div>
</div>
<?php $this->load->view('footer');?>


<script type="text/javascript">
  function checkId(){

          var mid=document.forms["myForm"]["mid"].value;
          var midMessage=$('#midMessage');//this variable is for css
          

          if(mid=='please select member id'){

        document.getElementById('mid').focus();
        midMessage.css({
            'color':'red'
          });
         document.getElementById('midMessage').innerHTML='please select id';
                  $(document).ready(function(){
                      $('#btnentrysubmit').fadeOut();
                      $('#btnleftsubmit').fadeOut();
                  });
        }else{
           $(document).ready(function(){
                      $('#btnentrysubmit').fadeIn();
                      $('#btnleftsubmit').fadeIn();
                  });
          document.getElementById('midMessage').innerHTML='';
        }

        var d = new Date();
    var h=d.getHours(); 
    var m=d.getMinutes(); 
    var s=d.getSeconds()
   var time=h +':'+ m +':'+s;
  document.getElementById('etime').value=time;

    }


  function checkLeftId(){

          var leftmid=document.forms["myleftForm"]["leftmid"].value;
          var leftmidMessage=$('#leftmidMessage');//this variable is for css
          

          if(leftmid=='please select member id'){

        document.getElementById('leftmid').focus();
        leftmidMessage.css({
            'color':'red'
          });
         document.getElementById('leftmidMessage').innerHTML='please select id';
                  $(document).ready(function(){
                      $('#btnentrysubmit').fadeOut();
                      $('#btnleftsubmit').fadeOut();
                  });
        }else{
           $(document).ready(function(){
                      $('#btnentrysubmit').fadeIn();
                      $('#btnleftsubmit').fadeIn();
                  });
          document.getElementById('leftmidMessage').innerHTML='';
        }

    }


  function gettime(){
    var d = new Date();
    var h=d.getHours(); 
    var m=d.getMinutes(); 
    var s=d.getSeconds()
   var time=h +':'+ m +':'+s;
  document.getElementById('ltime').value=time;
  }

</script>
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

