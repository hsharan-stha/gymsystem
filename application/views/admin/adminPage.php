
<?php

if(!isset($this->session->userdata['sess_id'])) {

  redirect('controlWelcome/goToLogin');
}

?>
<html>
<?php $this->load->view("link"); ?>


<body>




<!-- <div style="background: url(<?php echo base_url();?>assets/images/admin.jpg)no-repeat center top;">
   <div class="container">
    <div class="header-text">
    <h1>MUSCLE FACTORY</h1>
    <h2>Best Choice For fitness</h2>
    <p>
      Exercise is extremely important to staying healthy both in body and mind.
       Being active can help a person continue to do things they enjoy and be independent as they age
     </p>
    <div class="banner_btn">
       <a href="#menu" class="class scroll">drop down
          </a>
    </div>
    </div>
  </div>
  </div> -->

          <div class="menu" >
          <div class="container">
          
                   
                     <a href="<?php echo base_url();?>controlWelcome/goToAdmin">
              <div class="header-bottom_left">
                <img src="<?php echo base_url();?>assets/images/logo/logo.png" alt"" class="img-responsive" width="100"/>
              </div>
              </a>
           <div class="h_menu4"><!-- start h_menu4 -->
         
             <ul class="nav"  > 
               <li class="active"><a data-toggle="pill" href="#home">DASHBOARD</a></li>
               <li><a data-toggle="pill" href="#menu1">MEMBERS LIST</a></li>
               <li><a data-toggle="pill" href="#menu2">EXERCISE LIST</a></li>
               <li><a data-toggle="pill" href="#menu3">TRAINER LIST</a></li>
                <li><a data-toggle="pill" href="#menu4">IMAGES LIST</a></li>
                 <li><a data-toggle="pill" href="#menu5">VIDEOS LIST</a></li>
                   
                   
              
                    <li><a href="<?php echo base_url();?>controlCheck/destroySession">LOGOUT</a></li>
                    <li><a href="<?php echo base_url();?>controlWelcome/goToChangePassword"><i class="glyphicon glyphicon-asterisk"></i></a></li>
                
                 
               
             </ul>
               
             <script type="text/javascript" src="<?php echo base_url();?>assets/js/nav.js"></script>
           </div><!-- end h_menu4 -->

           <div class="clear"></div>

           </div>
           </div>
           <div class="col-lg-12">
             <h3 align="center" style="color:red; font-size:15px;">
                  <?php 
                  
                  echo $this->session->flashdata('delete_message');
                  echo $this->session->flashdata('delexmsg');
                  echo $this->session->flashdata('image_update');
                  echo $this->session->flashdata('video_update');
                  echo $this->session->flashdata('exercise_update');
                  
                   echo $this->session->flashdata('delete_trainer_message');
                    echo $this->session->flashdata('edit_trainer_message');
                 
                      echo $this->session->flashdata('tblimage_update');
                       echo $this->session->flashdata('delimgmsg');
                       echo $this->session->flashdata('delvdomsg');
                         echo $this->session->flashdata('video_dtl_update');
                       echo $this->session->flashdata('image_dtl_update');
                     
                  // if(isset($_GET['id'])){
                  //   // echo "<script type='text/javascript'>alert('$delete_message');</script>";
                  //   echo $delete_message;
                  // } else if(isset($_POST['btnsubmitedit'])){
                  //   // echo "<script type='text/javascript'>alert('$update_message');</script>";
                  //   echo $update_message;
                  // } else if(isset($_POST['btnsubmitimage'])){
                  //   echo $image_update;
                  // } else if(isset($_POST['btnexercisesubmit'])){
                  //   echo $exerciseSaveMsg;
                  // } else if(isset($_POST['btnequipmentsubmit'])){
                  //   echo $eqinsertmsg;
                  // } 
                   

                   ?></h3>
                   </div>
             <div class="tab-content main" id="menu">
               <div id="home" class="tab-pane fade in active">
                 <?php
                 $this->load->view('admin/adminheaderlist/dashboard');
                 ?>
               </div>

               <script type="text/javascript">
            $(document).ready(function(){
                $("#memberlistcontent").load("<?php echo base_url();?>controlAdmin/getMember");
            })
            </script>

               <div id="menu1" class="tab-pane fade">
              <div id="memberlistcontent"></div>
               </div>

               <script type="text/javascript">
            $(document).ready(function(){
                $("#exerciselistcontent").load("<?php echo base_url();?>controlExercise/getExerciseList");
            })
            </script>
               <div id="menu2" class="tab-pane fade">
               <div id="exerciselistcontent"></div>
               </div>


                <script type="text/javascript">
            $(document).ready(function(){
                $("#trainerlistcontent").load("<?php echo base_url();?>controlTrainer/getTrainerList");
            })
            </script>
               <div id="menu3" class="tab-pane fade">
                 <div id="trainerlistcontent"></div>
               </div>

                  <script type="text/javascript">
            $(document).ready(function(){
                $("#imageslistcontent").load("<?php echo base_url();?>controlImage/getImageList");
            })
            </script>
               <div id="menu4" class="tab-pane fade">
                <div id="imageslistcontent"></div>

               </div>

               <script type="text/javascript">
            $(document).ready(function(){
                $("#videoslistcontent").load("<?php echo base_url();?>controlvideo/getVideoList");
            })
            </script>
               <div id="menu5" class="tab-pane fade">
              <div id="videoslistcontent"></div>
               </div>


             </div>



<div>
  
  <?php
$this->load->view("footer");
  ?>
</div>

<body>
</html>
