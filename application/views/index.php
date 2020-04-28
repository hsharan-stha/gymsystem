<html>
<?php include('link.php');?>
	<style type="text/css">
	h4{
color:white !important;
font-size:15px !important;

	}
	h3{
font-size:18px !important;
color:#72d0f4 !important;

	}
</style>
<body>
<?php include('header.php');?>
 
<!--  this content is inside picture -->

	<div class="header" style="font-size: 12px;"><!-- start header -->
	   <div class="container" >

		  <div class="header-text">
			<h1>MUSCLE FACTORY:
<a><span style="color:red"><?php  echo $this->session->flashdata('feedbackmsg');?></span></a>
			</h1>
			<h2>Best Choice For fitness:

			</h2>
			<p>
        Exercise is extremely important to staying healthy both in body and mind.
         Being active can help a person continue to do things they enjoy and be independent as they age
       </p>
			<div class="banner_btn">
				<a href="#">Read More</a>

			</div>


		  </div>
    </div>
    </div><!-- end of header -->

    <div class="menu" id="menu">
	  <div class="container" >
		 <div class="h_menu4"><!-- start h_menu4 -->
			 <ul class="nav">
			   <li class="active"><a href="#">Home</a></li>
			   <li><a href="<?php echo base_url();?>controlVideo/getVideo">videos</a></li>
			   <li><a href="<?php echo base_url();?>controlImage/getImage">images</a></li>
			   <li><a href="<?php echo base_url();?>controlExercise/getExercise">exercises</a></li>
			   <li><a href="<?php echo base_url();?>controlDiet/getDiet">diets</a></li>
			   <li><a href="<?php echo base_url();?>assets/ug/ugfile.pdf">help</a></li>
			   <li><a href="<?php echo base_url();?>controlWelcome/goToLogin" class="btn btn-success">login</a></li>
			 </ul>
		  </div><!-- end h_menu4 -->
		 <div class="clear"></div>
	  </div>
	</div>
	<!-- end menu -->


	 <div class="main"><!--  start second main -->
	 	 <div class="container-fluid" >
			<div class="row content-top" style="font-size:12px;">
				
				 <div class="col-md-4">
				   <div class="card">
				   <div class="panel panel-default">
				   	<div class="panel panel-heading" style="background: #72d0f4;">
				   		<h5 align="center" style="color:white">calculate body mass index:</h5>
				   	</div>
				   	
				   	<div class="panel panel-body" style="color: #00bff0;">
				   		
				   		<form class="form-horizontal">
				   		<div class="form-group">
				   			<label for="height" class="form-label col-sm-6">Height(in feet):</label>
				   			<div class="col-sm-6">
				   			<input type="text" class="form-control" placeholder=" (ft)" name="height" id="height" style="float:left; width:55px"/>
				   			
				   			<input type="text" class="form-control" placeholder="inch" name="heightinch" id="heightinch" style="width:55px" />
				   			</div>
				   		</div>
				   		<div class="form-group" style="margin-top:10px;">
				   			<label for="weight" class="form-label col-sm-6">weight(in kg):</label>
				   			<div class="col-sm-6">
				   			<input type="text" class="form-control "  placeholder=" enter weight" name="weight" id="weight" />
				   			</div>
				   		</div>
				   		</form>
				   		 	<div class="panel panel-footer">
				   		<button class="btn btn-success center-block" onclick="bmiCalculation()">calculate:</button>
				   	</div>
				   		<div class="form-group" style="margin-top:10px;">
				   			<label for="bmi" class="form-label col-sm-6">BMI:</label>
				   			<div class="col-sm-6">
				   			<input type="text" class="form-control "  placeholder="your BMI..." name="bmi" id="bmi" />
				   			</div>
				   		</div>
				   		
				   		</div>
				   	</div>
				  
				   </div> 


				 </div>
				 <div class="col-md-4">
				 <div class="card">
				 	<div class="panel panel-default">
				 	<div class="panel panel-heading" style="background: #72d0f4;">
				 		<h5  align="center" style="color:white">BMI Categories:</h5>
				 	</div>
				 	
				 	<div class="panel panel-body" style="color: #00bff0;">
				 		
				 		<p>
				 			<ul>
				 			<li>Underweight = 18.5</li>
							<li>Normal weight = 18.5–24.9</li> 
							<li>Overweight = 25–29.9 </li>
							<li>Obesity = BMI of 30 or greater</li>
							</ul>
							</p>
							<hr/>
							<div class="class="btn btn-link">
							<h3 align="center">
							<a href="<?php echo base_url();?>controlWelcome/goToBmiTable">BMI table:</a>
							</h3></div>
				 		</div>

				 	</div>
				 	</div>
				 </div>
				 <div class="col-lg-4">
				  <!-- <img src="<?php echo base_url();?>assets/images/pic.png" class="img-responsive" alt=""> -->
				  <div class="card">
				 	<div class="panel panel-default">
				 	<div class="panel panel-heading" style="background: #72d0f4;">
				 		<h5  align="center" style="color:white">login to get
				 		exercise schedule:</h5>
				 	</div>
				 	
				 	<div class="panel panel-body" style="color: #00bff0;">
				 		<form method="post" action="<?php echo base_url();?>controlCheck/getSchedule">
				 			<div class="panel panel-body" style="font-size: 12px;">
				 			<div class="form-group">
							<label for="mid">id:</label>
							<!-- <input type="text" id="mid" placeholder="please enter id" name="mid" required="required" class="form-control"/> -->
							  <select class="form-control" id="mid" name="mid">
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
					</div>
					<div class="panel panel-footer">
						
						  <input type="submit" name="btnsubmit" id="btnsubmit" value="submit" class="btn btn-success center-block" >
					</div>


				 		</form>



				 		</div>

				 	</div>
				 	</div>

			     </div>

            </div>
		 </div>
		 </div> <!-- end of second main -->


		<!-- end content-top -->

		
		<div class="main"> <!-- start third main -->
		<div class="container-fluid">
		    <div class="row content-top">
		      <!-- start content-middle -->
		       
		      <div class="col-lg-3">
		       <div class="card">
     	 <a href="<?php echo base_url();?>controlVideo/getVideo">
     	 <h3 class="m_2">click for Videos</h3></a></div>

	 	    	<a href="<?php echo base_url();?>controlVideo/getVideo">
	 	    		<ul class="spinning">
	 	    			<li class="live">click <span class="m_1">for more</span></li>
	 	    			<li class="room">videos</li>
	 	    			<div class="clear"></div>
	 	    		</ul>
					 <div class="view view-fifth card">
				  	   <img src="<?php echo base_url();?>assets/images/videologo.jpg" class="img-responsive" alt="">

					      <div class="mask">
	                       	<div class="info">view More</div>
			              </div>
	                  </div>
			     </a>
			 
				<div class="clear"></div>
		   </div>

		   <div class="col-lg-3">
		       <div class="card">
     	 <a href="<?php echo base_url();?>controlDiet/getDiet">
     	 <h3 class="m_2">click for Diets</h3></a></div>

	 	    	<a href="<?php echo base_url();?>controlDiet/getDiet">
	 	    		<ul class="spinning">
	 	    			<li class="live">click <span class="m_1">for more</span></li>
	 	    			<li class="room">diets</li>
	 	    			<div class="clear"></div>
	 	    		</ul>
					 <div class="view view-fifth card">
				  	   <img src="<?php echo base_url();?>assets/images/dietslogo.jpg" class="img-responsive" alt="">

					      <div class="mask">
	                       	<div class="info">view More</div>
			              </div>
	                  </div>
			     </a>
			 
				<div class="clear"></div>
		   </div>

		   <div class="col-lg-3 ">
		     	 <h3 class="m_2 card">All Classes</h3>
		     	 <div class="classes">
		     	 	<!-- <div class="cardio_list"> -->
		     	 	   <?php
					if($class->num_rows() > 0){
						foreach($class->result() as $row){
							?>
		     	 	  <div class="cardio_sublist">
		     	 	 
			     	 	<ul class="cardio">
			     	 		<li><i class="clock"> </i><span><?php echo $row->cname;?></span></li>
			     	 	</ul>
			     	
			     	 	<div class="clear"></div>
		     	
 	 </div>

		     	 	  	<?php	
						}

					}
		  ?>
		     	 	
		     	 </div>
				</div>

				<div class="col-md-3">
				  <h3 class="m_2 card">Membership Prices</h3>
				  <div class="members">
				   <h4 class="m_3">25% Discount of for all members</h4>
				   <p>Discount on services and <br>treatments at the GymBase for<br> all membership cards holders.</p>
				   <div class="btn1">
				    <a href="#">More</a>
			       </div>
				  </div>
			    </div>
			    <div class="clear"></div>
		   </div>
		 </div>
		 </div> <!-- end of third main -->
		

		 <!-- <div class="main"> start main for youtube video and fb div -->
		<!-- div class="container-fluid">
		    <div class="row content-top">

		    <div class="col-lg-6 col-lg-offset-3">
			<h3 class="m_2 card">youtube video</h3>
			<iframe  src="https://www.youtube.com/embed/24fdcMw0Bj0" frameborder="0" allowfullscreen></iframe>
			</div>

		    </div>
		    </div>
		  <!--   </div>end fb and youtube div -->



 
     <div class="main"> <!-- start fourth main -->
		<div class="container-fluid">
		    <div class="row content-top">
		    		<div class="col-lg-4"> <!-- start trainer content -->
		    		<h3 class="m_2 card">Our Trainers</h3>
		    		<div class="course_demo"> <!-- start course demo -->
		          <ul id="flexiselDemo3">
		    			   <?php
				if($trainer->num_rows()>0){
					foreach($trainer->result() as $row){
						?>
						
					<li>
					<img src="<?php echo base_url();?>assets/images/trainers/<?php echo $row->image;?>"><div class="desc">
						<h3><?php echo $row->tname;?><br><span class="m_text"><?php echo $row->address;?></span></h3>
						<p><?php echo $row->contact;?><br></p><?php echo $row->email;?></p>
						<div class="coursel_list col-lg-offset-4">
							<i class="heart1"> </i>
							<i class="like"> </i>
						</div>
				
						<div class="clear"></div>
					</div>
					</li>
					
					<?php
					}
				}
		          ?>
		          </ul>
		          </div> <!-- end course demo -->

			<div class="col-lg-12" style="margin-top:10px;"><!-- start div for fb -->
			<a href="https://www.facebook.com/muscelgym.factory/?ref=br_rs">
			<h3 class="m_2 card"> click here for facebook page of muscle factory gym</h3>
			</a>

			</div><!-- end div of fb -->

				<div class="col-lg-12"> <!-- start youtube div -->
			<h3 class="m_2 card">youtube video</h3>
			<iframe width="100%" src="https://www.youtube.com/embed/24fdcMw0Bj0" frameborder="1" allowfullscreen></iframe>
			</div> <!-- end youtube div -->

		    		</div><!-- end trainer content -->

		    		<!-- start java script for trainer div -->

				<script type="text/javascript">
			$(window).load(function() {
				$("#flexiselDemo3").flexisel({
					visibleItems: 4,
					animationSpeed: 1000,
					autoPlay: true,
					autoPlaySpeed: 3000,
					pauseOnHover: true,
					enableResponsiveBreakpoints: true,
			    	responsiveBreakpoints: {
			    		portrait: {
			    			changePoint:480,
			    			visibleItems: 1
			    		},
			    		landscape: {
			    			changePoint:640,
			    			visibleItems: 2
			    		},
			    		tablet: {
			    			changePoint:768,
			    			visibleItems: 2
			    		}
			    	}
			    });

			});
		</script>
	<!-- ............................................................ -->
		<script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery.flexisel.js"></script>
		    		<!-- end javascript for trainer div -->

     <div class="col-md-8" ><!-- start exercises -->
     <div class="card">
     	 <a href="<?php echo base_url();?>controlExercise/getExercise"><h3 class="m_2">Exercises</h3></a>
     	 </div>
     	 <div class="col-lg-6 " >
     	 	<div class="event-bottom card" style="background:#72d0f4">
	     	 	<ul class="event1">
	     	 		<img src="<?php echo base_url();?>assets/images/chest.gif" alt="" >
	     	 	</ul>
	     	 	<ul class="event1_text">
	     	 	<h4>Chest exercise</h4>
	     	<div class="btn2">
	     	 		<a href="<?php echo base_url();?>controlExercise/getChestExercise">
	     	 		view more
	     	 		</a>
	     	 		</div>
	     	 		
	     	 	</ul>
     	 		<div class="clear"></div>
     	 	</div>

     	 	<div class="event-bottom card" style="background:#72d0f4;margin-top:5px;">
	     	 	<ul class="event1">
	     	 		<!-- <h4>26 April, 2014</h4> -->
	     	 		<img src="<?php echo base_url();?>assets/images/shoulder.gif" alt="">
	     	 	</ul>
	     	 	<ul class="event1_text">
	     	 		<!-- <span class="m_5">h.12.00-h.13.00</span> -->
	     	 		<h4>Shoulder exercise</h4>
	     	 		<div class="btn2">
	     	 		<a href="<?php echo base_url();?>controlExercise/getShoulderExercise">
	     	 		view more
	     	 		</a>
	     	 		</div>
	     	 		
	     	 	</ul>
     	 		<div class="clear"></div>
     	 	</div>
     	 	<div class="event-bottom card" style="background:#72d0f4;margin-top:5px;">
	     	 	<ul class="event1">
	     	 		<!-- <h4>26 April, 2014</h4> -->
	     	 			<img src="<?php echo base_url();?>assets/images/back.gif" alt="">
	     	 	</ul>
	     	 	<ul class="event1_text">
	     	 		<!-- <span class="m_5">h.12.00-h.13.00</span> -->
	     	 		<h4>Back exercise</h4>
	     	 		<div class="btn2">
	     	 		<a href="<?php echo base_url();?>controlExercise/getBackExercise">
	     	 		view more
	     	 		</a>
	     	 		</div>
	     	 
	     	 	</ul>
     	 		<div class="clear"></div>
     	 	</div>
     	 </div>

     	  <div class="col-lg-6 ">
     	 	<div class="event-bottom card" style="background:#72d0f4">
	     	 	<ul class="event1">
	     	 		<!-- <h4>26 April, 2014</h4> -->
	     	 		<div class="card"><img src="<?php echo base_url();?>assets/images/biceps.gif" alt=""></div>
	     	 	</ul>
	     	 	<ul class="event1_text">
	     	 		<!-- <span class="m_5">h.12.00-h.13.00</span> -->
	     	 		<h4>Biceps exercise</h4>
	     	 		<div class="btn2">
	     	 		<a href="<?php echo base_url();?>controlExercise/getBicepsExercise">
	     	 		view more
	     	 		</a>
	     	 		</div>
	     	 	
	     	 	</ul>
     	 		<div class="clear"></div>
     	 	</div>
     	 	<div class="event-bottom card" style="background:#72d0f4;margin-top:5px;">
	     	 	<ul class="event1">
	     	 		<!-- <h4>26 April, 2014</h4> -->
	     	 		<img src="<?php echo base_url();?>assets/images/triceps.gif" alt="">
	     	 	</ul>
	     	 	<ul class="event1_text">
	     	 		<!-- <span class="m_5">h.12.00-h.13.00</span> -->
	     	 		<h4>Triceps exercise</h4>
	     	 		<div class="btn2">
	     	 		<a href="<?php echo base_url();?>controlExercise/getTricepsExercise">
	     	 		view more
	     	 		</a>
	     	 		</div>
	     	 	
	     	 	</ul>
     	 		<div class="clear"></div>
     	 	</div>
     	 	<div class="event-bottom card" style="background:#72d0f4;margin-top:5px;">
	     	 	<ul class="event1">
	     	 		<!-- <h4>26 April, 2014</h4> -->
	     	 		<img src="<?php echo base_url();?>assets/images/legs.gif" alt=""/>
	     	 	</ul>
	     	 	<ul class="event1_text">
	     	 		<!-- <span class="m_5">h.12.00-h.13.00</span> -->
	     	 		<h4>Legs exercise</h4>
	     	 		<div class="btn2">
	     	 		<a href="<?php echo base_url();?>controlExercise/getlegsExercise">
	     	 		view more
	     	 		</a>
	     	 		</div>
	     	 		<!-- <div class="btn2">
					   <a href="#">Reservation</a>
					</div> -->
	     	 	</ul>
     	 		<div class="clear"></div>
     	 	</div>
     	 	<div class="event-bottom card" style="background:#72d0f4;margin-top:5px;">
	     	 	<ul class="event1">
	     	 		<!-- <h4>26 April, 2014</h4> -->
	     	 		<img src="<?php echo base_url();?>assets/images/abs.gif" alt=""/>
	     	 	</ul>
	     	 	<ul class="event1_text">
	     	 		<!-- <span class="m_5">h.12.00-h.13.00</span> -->
	     	 		<h4>abs exercise</h4>
	     	 		<div class="btn2">
	     	 		<a href="<?php echo base_url();?>controlExercise/getAbsExercise">
	     	 		view more
	     	 		</a>
	     	 		</div>
	     	 		<!-- <div class="btn2">
					   <a href="#">Reservation</a>
					</div> -->
	     	 	</ul>
     	 		<div class="clear"></div>
     	 	</div>
     	 	
     	 </div>
           </div><!-- end of exercises -->
           <div class="clear"></div>
			</div>
			</div>
			</div> <!-- end fourth main -->

    


<!--      ...................... -->
<div class="main"><!-- start for gallery -->
<div class="container">
      <div class="row about">
		 <div class="col-md-12">
		     	 <div class="card">
     	 <a href="<?php echo base_url();?>controlImage/getImage">
     	 <h3 class="m_2">Gallery</h3></a></div>
		     	 <div id="ca-container" class="ca-container card" style="height:180px;">
				    <div class="ca-wrapper">
				    		
		         
				    <?php
				    if($image->num_rows()>0){
				    	foreach($image->result() as $row){
				    		?>

				         <div class="ca-item ca-item-1">
						   <div class="ca-item-main">
								<img src="<?php echo base_url();?>assets/images/<?php echo $row->image?>" alt="" class="img-responsive">
								<!-- <div> <img src="<?php echo base_url();?>assets/images/triceps.gif" alt=""></div> -->
							</div>
						  </div>
						  	<?php
				    	}
				    }
				    	?>
				    	
			    </div>
			 </div>
				    <script type="text/javascript">
						$('#ca-container').contentcarousel();
					</script>
		   </div>
	       <div class="clear"></div>
	      </div>
	      </div>
	      </div><!-- end gallary -->
	    


	    <div class="map">
			<iframe width="100%"" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d890.6848520817929!2d85.38122652065766!3d27.733506226300843!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xc36ad09f0b34fe12!2sNepal+Medical+College+and+Teaching+Hospital!5e1!3m2!1sen!2snp!4v1499316205785" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe><br><small><a href="http://maps.google.com/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=United+Kingdom&amp;aq=0&amp;oq=un&amp;sll=37.0625,-95.677068&amp;sspn=48.956293,107.138672&amp;ie=UTF8&amp;hq=&amp;hnear=United+Kingdom&amp;ll=55.378051,-3.435973&amp;spn=135.795411,68.554687&amp;t=m&amp;z=2" style="color:#666;font-size:12px;text-align:left"> </a></small>
			<div class="opening_hours">
			 <ul class="times">
			 	<h3>Opening <span class="opening">Hours</span></h3>
			 	<li><i class="calender"> </i><span class="week">Monday</span><div class="hours">h.6:00-h.24:00</div>  <div class="clear"></div></li>
			 	<li><i class="calender"> </i><span class="week">Tuesday</span><div class="hours">h.6:00-h.24:00</div>  <div class="clear"></div></li>
			 	<li><i class="calender"> </i><span class="week">Wednesday</span><div class="hours">h.6:00-h.24:00</div>  <div class="clear"></div></li>
			 	<li><i class="calender"> </i><span class="week">Thrusday</span><div class="hours">h.6:00-h.24:00</div>  <div class="clear"></div></li>
			 	<li><i class="calender"> </i><span class="week">Friday</span><div class="hours">h.6:00-h.24:00</div>  <div class="clear"></div></li>
			 	<li><i class="calender"> </i><span class="week">Saturday</span><div class="hours">h.6:00-h.24:00</div>  <div class="clear"></div></li>
			 	<li><i class="calender"> </i><span class="week">Sunday</span><div class="hours">h.6:00-h.24:00</div>  <div class="clear"></div></li>
			 	<h4>Enjoy it!</h4>
			 </ul>
		    </div>
		 </div>

		
<?php include('footer.php'); ?>
</body></html>

<script type="text/javascript">
	function bmiCalculation(){
		
		var height=document.getElementById('height').value;	
		var heightinch=document.getElementById('heightinch').value;
		var ftheight=(height*0.3084)+(heightinch*0.0254);
		var weight=document.getElementById('weight').value;

		var bmi=weight/(ftheight*ftheight);
		document.getElementById('bmi').value=bmi;
		// note:.value is normally use for form/input
		// .innerhtml is used fo div/span
	}

</script>
