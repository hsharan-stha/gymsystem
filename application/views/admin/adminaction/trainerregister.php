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
<h5 align="center" class="btn btn-link">Trainer registration form:
<span style="color:red"><?php echo $this->session->flashdata('inserttrainermsg');?></span>
</h5>

  </div>
<div class="panel panel-body" style="font-size: 12px;">

<!-- < --><!-- ?php echo form_open_multipart('controlAdmin/newMember');?> 
<form action="http://localhost/muscleFactory/index.php/controlAdmin/newMember" enctype="multipart/form-data" method="post" accept-charset="utf-8"> -->
<form class="" action="<?php echo base_url();?>controlTrainer/newTrainer" method="post" name="myForm" enctype="multipart/form-data" accept-charset="utf-8">
<div class="col-lg-6" >
           <div class="form-group">
            <label for="tname">Trainer Name:</label>
            <input type="text" name="tname" class="form-control" id="tname" placeholder="please enter trainer name" required="required" >
          </div>
         <div class="form-group">
            <label for="image">trainer image:</label>
            <input type="file" id="image" name="userfile" class="form-control" placeholder="please insert image" required="required"/>
          </div>
          <div class="form-group">
           <label for="address">Trainer Address:</label>
           <input type="text"  name="address" class="form-control" id="address" placeholder="please enter member address" required="required">
         </div>
           <div class="form-group">
     <label for="contact">Trainer Contact:</label>
     <input type="number" name="contact" onchange="checkContact()" class="form-control" id="contact" placeholder="please enter member contact" required="required">
    </div>
    <div class="form-group">
          <span id="contactMessage"></span>
        </div>
         <div class="form-group">
          <label for="email">Trainer Email:</label>
          <input type="email" name="email" class="form-control" id="email" placeholder="please enter member email" required="required">
        </div>
         <div class="form-group">
          <span id="emailresult"></span>
        </div>
        <div class="form-group">
          <label for="uname">Username:</label>
          <input type="text" name="uname" class="form-control" id="uname" placeholder="please enter username" required="required">
        </div>
        <div class="form-group">
          <span id="unameresult"></span>
        </div>
       
</div>
<!-- .................................................................... -->
<div class="col-lg-6" >
    <div class="form-group">
      <label for="pword">Password:</label>
      <input type="password" name="pword" onchange="checkLength()" class="form-control" id="pword"  placeholder="please enter password" required="required">
    </div>
    <div class="form-group">
          <span id="pwordMessage"></span>
        </div>
    <div class="form-group">
      <label for="repword">Re-password:</label>
      <input type="password" name="repword" onchange="checkPassword()" class="form-control" id="repword" placeholder="please re-enter password" required="required">
    </div>
        <div class="form-group">
          <span id="pMessage"></span>
        </div>
   <div class="form-group">
          <label for="dob">Date of birth:</label>
          <input type="date" name="dob" class="form-control" id="dob" placeholder="please enter Daet of birth" required="required">
        </div>
      
      
    <div class="form-group">
     <label for="jdate">Join Date:</label>
     <input type="date" name="jdate" class="form-control" id="jdate" placeholder="please enter join date" required="required">
    </div>

    <div class="form-group">
     <label for="package">Package:</label>
     <select class="form-control" id="package" name="package">
     <?php
     if($class->num_rows()>0){
      foreach($class->result() as $row){
        ?>
     
       <option><?php echo $row->cname;?></option>
     
     <?php
      }
     }
      ?>
      </select>
     <!-- <input type="text" name="package" class="form-control" id="package" placeholder="please enter package" required="required"> -->
    </div>
     
    <div class="panel panel-footer">
    <input type="submit" name="btnsubmit" id="btnsubmit" value="submit" onclick="return confirm('Do you want to register trainer?')" class="btn btn-success center-block" >
    </div>
</div>
</form>
</div>
</div>
</div>
<?php $this->load->view('footer');?>

<script type="text/javascript">
  
    var emailresult=$('#emailresult');
    $(document).ready(function(){
      $('#email').change(function(){

          var email=$('#email').val();
          if(!email==''){

            $.ajax({
              url:"<?php echo base_url();?>controlCheck/checkTrainerEmailAvailability",
              type:"POST",
              data:{email:email},
              success:function(data){
                
                emailresult.css({
            'color':'red'
              });

                emailresult.html(data);
                //this is to again focus on email if email is already register
                if(emailresult.html()=='email already register' || emailresult.html()=='invalid email' ){
                 document.getElementById('email').focus();
             }
              },

            });

          }

          
      });
    });
</script>

<script type="text/javascript">
   var unameresult=$('#unameresult');
    $(document).ready(function(){
      $('#uname').change(function(){
          var uname=$('#uname').val();
         
          if(!uname==''){
            $.ajax({
              url:"<?php echo base_url();?>controlCheck/checkTrainerUnameAvailability",
              type:"POST",
              data:{uname:uname},
              success:function(data){
                
                unameresult.css({
            'color':'red'
              });

                unameresult.html(data);
                //this is to again focus on uname if uname is already register
                if(unameresult.html()=='uname already register'){
                 document.getElementById('uname').focus();
             }
              },

            });

          }

          
      });
    });

</script>

<script type="text/javascript">
    function checkLength(){

          var pword=document.forms["myForm"]["pword"].value;
          var pwordMessage=$('#pwordMessage');//this variable is for css
          

          if(pword.length<9){
        document.getElementById('pword').focus();
        pwordMessage.css({
            'color':'red'
          });
         document.getElementById('pwordMessage').innerHTML='please enter password greater than 8 letter';
                  $(document).ready(function(){
                      $('#btnsubmit').fadeOut();
                  });
        }else{
          document.getElementById('pwordMessage').innerHTML='';
        }

    }

  function checkPassword() {

          var pword=document.forms["myForm"]["pword"].value;
          var pwordMessage=$('#pwordMessage');//this variable is for css
          var pMessage=$('#pMessage');// css for password matching message

          if(pword.length<9){
        document.getElementById('pword').focus();
        pwordMessage.css({
            'color':'red'
          });
         document.getElementById('pwordMessage').innerHTML='please enter password greater than 8 letter';
                  $(document).ready(function(){
                      $('#btnsubmit').fadeOut();
                  });
        }else{
          document.getElementById('pwordMessage').innerHTML='';
        }




    if(document.getElementById('pword').value === document.getElementById('repword').value && pword.length>8) {
       pMessage.css({
        'color':'blue'
      });
        document.getElementById('pMessage').innerHTML = "password match";
        // alert('password match');
         $(document).ready(function(){
   
        $("#btnsubmit").fadeIn()
    });
    } else {
      pMessage.css({
        'color':'red'
      });
        document.getElementById('pMessage').innerHTML = "password is not matching";
        // alert('password is not matching');
        $(document).ready(function(){
   
        $("#btnsubmit").fadeOut()
    });
        document.getElementById('pword').focus();
    }
}

function checkContact(){

 var contact=document.forms["myForm"]["contact"].value;
 var contactMessage=$('#contactMessage');
 if(contact.length < 10){

  document.getElementById('contact').focus();
             contactMessage.css({
            'color':'red'
          });
document.getElementById('contactMessage').innerHTML='please enter valid mobile number';
 $(document).ready(function(){
   
        $("#btnsubmit").fadeOut()
    });
 } else{
          document.getElementById('contactMessage').innerHTML='';

            $(document).ready(function(){
   
        $("#btnsubmit").fadeIn()
    });
        }


}


</script>
