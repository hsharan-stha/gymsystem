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
<h5 align="center" class="btn btn-link">edit user registration form:
<span style="color:red"><?php  echo $this->session->flashdata('update_message');?></span>
</h5>

  </div>
<div class="panel panel-body" id="menu" style="font-size: 12px;">
<?php
if($memberdetails->num_rows() > 0){
  foreach($memberdetails->result() as $row){
?>

<form class="" action="<?php echo base_url();?>controlAdmin/updateEditedMember" method="post" name="myForm">

<div class="form-group">
    
    <input type="hidden" name="id" class="form-control" id="id" required="required" value="<?php echo $row->id; ?>">
  </div>
<div class="col-lg-6">
   <div class="form-group">
    <label for="mname">Member Name:</label>
    <input type="text" name="mname" class="form-control" id="mname" placeholder="please enter member name" value="<?php echo $row->mname; ?>" required="required">
  </div>
  <div class="form-group">
   <label for="address">Member Address:</label>
   <input type="text"  name="address" class="form-control" id="address" value="<?php echo $row->address; ?>" placeholder="please enter member address"  required="required">
 </div>

 <div class="form-group">
  <label for="email">Member Email:</label>
  <input type="text" name="email" class="form-control" id="email" value="<?php echo $row->email; ?>" placeholder="please enter member email" required="required">
</div>
        <div class="form-group">
          <span id="emailresult"></span>
        </div>
 <div class="form-group">
          <label for="uname">Username:</label>
          <input type="text" name="uname" class="form-control" id="uname" placeholder="please enter username" required="required"
          value="<?php echo $row->uname;?>">

        </div>
        <div class="form-group">
          <span id="unameresult"></span>
        </div>

         <div class="form-group">
      <label for="pword">Password:</label>
      <input type="password" name="pword" class="form-control" onchange="checkLength()" id="pword"  placeholder="please enter password" required="required" value="<?php echo $row->pword;?>">
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
          <label for="dob">Date of Birth:</label>
          <input type="date" value="<?php echo $row->dob;?>" name="dob" class="form-control" id="dob" placeholder="please enter date of birth" required="required">
        </div>

</div>
<div class="col-lg-6">

        <div class="form-group">
          <label for="weight">weight(in kg):</label>
          <input type="number" value="<?php echo $row->weight;?>" onchange="checkWeight()" onmouseout="bmiCalculation()" name="weight" class="form-control" id="weight" placeholder="please enter member weight" required="required">
        </div>
        <div class="form-group">
          <span id="weightMessage"></span>
        </div>
        <div class="form-group">
          <label for="ftheight">height(feet):</label>
          <input type="number" name="ftheight" onchange="checkftHeight()" onmouseout="bmiCalculation()"  value="<?php echo $row->ftheight;?>" class="form-control" id="ftheight" placeholder="please enter feet" required="required">
        </div>
        <div class="form-group">
          <span id="ftheightMessage"></span>
        </div>
         <div class="form-group">
          <label for="heightinch">height(inch):</label>
          <input type="number" name="heightinch"  value="<?php echo $row->heightinch;?>" class="form-control" id="heightinch" placeholder="please enter inch" onchange="checkHeightinch()" onmouseout="bmiCalculation()" required="required">
        </div>
         <div class="form-group">
          <span id="heightinchMessage"></span>
        </div>
        
<div class="form-group">
 <label for="contact">Member Contact:</label>
 <input type="number" name="contact" class="form-control" onchange="checkContact()" id="contact" value="<?php echo $row->contact; ?>" placeholder="please enter member contact" required="required">
</div>
<div class="form-group">
          <span id="contactMessage"></span>
        </div>
<div class="form-group">
 <label for="jdate">Join Date:</label>
 <input type="date" name="jdate" class="form-control" id="jdate" value="<?php echo $row->jdate; ?>" placeholder="please enter join date" required="required">
</div>

<div class="form-group">
 <label for="package">Package:</label>
 <!-- <input type="text" name="package" class="form-control" id="package" value="<?php echo $row->package; ?>" placeholder="please enter package" required="required"> -->
 <select class="form-control" id="package" name="package" onchange="checkPackage()">
 <option><?php echo $row->package;?></option>
 <<option>please select package</option>
     <?php
     if($class->num_rows()>0){
      foreach($class->result() as $rowclass){
        ?>
     
       <option><?php echo $rowclass->cname;?></option>
     
     <?php
      }
     }
      ?>
      </select>
</div>
<div class="form-group">
          <span id="pacMessage"></span>
        </div>
<div class="form-group">
     <label for="bmi">BMI:</label>
     <input type="text" name="bmi" value="<?php echo $row->bmi;?>" class="form-control" id="bmi" placeholder="please enter body mass index" required="required">
  </div>

<div class="panel panel-footer">
<input type="submit" id="btnsubmit" name="btnsubmitedit" value="submit" class="btn btn-success" >
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
<!-- <script type="text/javascript">
  function bmiCalculation(){
    
    var ftheight=document.getElementById('ftheight').value; 
    var heightinch=document.getElementById('heightinch').value;
    var ans=(ftheight*0.3084)+(heightinch*0.0254);
    var weight=document.getElementById('weight').value;

    var bmi=weight/(ans*ans);
    document.getElementById('bmi').value=bmi;
    // note:.value is normally use for form/input
    // .innerhtml is used fo div/span
  }

</script>
 -->

<script type="text/javascript">
   var unameresult=$('#unameresult');
    $(document).ready(function(){
      $('#uname').change(function(){
          var uname=$('#uname').val();
         
          if(!uname==''){
            $.ajax({
              url:"<?php echo base_url();?>controlCheck/checkUnameAvailability",
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
  
    var emailresult=$('#emailresult');
    $(document).ready(function(){
      $('#email').change(function(){

          var email=$('#email').val();
          if(!email==''){

            $.ajax({
              url:"<?php echo base_url();?>controlCheck/checkEmailAvailability",
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
  function bmiCalculation(){
    
    var ftheight=document.getElementById('ftheight').value; 
    var heightinch=document.getElementById('heightinch').value;
    var ans=(ftheight*0.3084)+(heightinch*0.0254);
    var weight=document.getElementById('weight').value;

    var bmi=weight/(ans*ans);
    document.getElementById('bmi').value=bmi;
    // note:.value is normally use for form/input
    // .innerhtml is used fo div/span
  }


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

function checkWeight(){

 var weight=document.forms["myForm"]["weight"].value;
 var weightMessage=$('#weightMessage');//this variable is for css
          if(weight <= 40){
            
            document.getElementById('weight').focus();
            weightMessage.css({
            'color':'red'
          });
            document.getElementById('weightMessage').innerHTML='please enter weight greater than 40kg';
             $(document).ready(function(){
   
        $("#btnsubmit").fadeOut()
    });

        }
        else{
          document.getElementById('weightMessage').innerHTML='';
            $(document).ready(function(){
   
        $("#btnsubmit").fadeIn()
    });
        }

}

function checkftHeight(){

 var ftheight=document.forms["myForm"]["ftheight"].value;
 var ftheightMessage=$('#ftheightMessage');//this variable is for css
          if(ftheight <= 4){
            
            document.getElementById('ftheight').focus();
             ftheightMessage.css({
            'color':'red'
          });
            document.getElementById('ftheightMessage').innerHTML='please enter height greater than 4 feet';
             $(document).ready(function(){
   
        $("#btnsubmit").fadeOut()
    });

        }
        else{
          document.getElementById('ftheightMessage').innerHTML='';

            $(document).ready(function(){
   
        $("#btnsubmit").fadeIn()
    });
        }

}

function checkHeightinch(){
 var heightinch=document.forms["myForm"]["heightinch"].value;
 var heightinchMessage=$('#heightinchMessage');//this variable is for css
          if(heightinch > 12){
            
            document.getElementById('heightinch').focus();
             heightinchMessage.css({
            'color':'red'
          });
            document.getElementById('heightinchMessage').innerHTML='please enter height less than 12 inch';
             $(document).ready(function(){
   
        $("#btnsubmit").fadeOut()
    });

        }
        else{
          document.getElementById('heightinchMessage').innerHTML='';

            $(document).ready(function(){
   
        $("#btnsubmit").fadeIn()
    });
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

 function checkPackage(){

          var package=document.forms["myForm"]["package"].value;
          var pacMessage=$('#pacMessage');//this variable is for css
          

          if(package=='please select package'){
        document.getElementById('package').focus();
        pacMessage.css({
            'color':'red'
          });
         document.getElementById('pacMessage').innerHTML='please select category';
                  $(document).ready(function(){
                      $('#btnsubmit').fadeOut();
                  });
        }else{
           $(document).ready(function(){
                      $('#btnsubmit').fadeIn();
                  });
          document.getElementById('pacMessage').innerHTML='';
        }

    }
</script>