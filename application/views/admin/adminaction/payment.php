<?php

if(!isset($this->session->userdata['sess_id'])) {

  redirect('controlWelcome/goToLogin');
}

?>
<?php $this->load->view('link');?>
<?php $this->load->view('admin/adminheader');?>
<div class="container-fluid">
<div class="panel panel-default" style="margin-top:10px">
<div class="col-lg-6 col-lg-offset-3">
  <div class="panel panel-heading">
<h5 align="center" class="btn btn-link">payment record Form:
<span style="color:red"><?php  echo $this->session->flashdata('payment');?></span>
</h5>

  </div>
<div class="panel panel-body" style="font-size: 12px;">

<form name="myForm" action="<?php echo base_url();?>controlPayment/newPayment" method="post"  enctype="multipart/form-data">
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
    <label for="pdate">payment date:</label>
    <input type="text" name="pdate" readonly="readonly" value="<?php echo date("Y/m/d"); ?> " class="form-control" id="pdate" placeholder="please enter entry date" required="required">
  </div>
 <div class="form-group">
    <label for="repdate">re- payment date:</label>
    <input type="date" name="repdate" onchange="printInvoice()" class="form-control" id="repdate" placeholder="please enter entry time" required="required">
  </div>

<div class="panel panel-footer">
<input type="submit" id="btnpsubmit" onclick="return confirm('are you sure?this member has clear payment?')" name="btnpsubmit" value="submit" class="btn btn-success" onmouseover="checkId()" />
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
                      $('#btnpsubmit').fadeOut();
                    
                  });
        }else{
           $(document).ready(function(){
                      $('#btnpsubmit').fadeIn();
                   
                  });
          document.getElementById('midMessage').innerHTML='';
        }


    }

function  printInvoice(){
  window.print();
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

