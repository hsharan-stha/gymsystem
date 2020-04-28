<?php include_once('link.php');?>
<?php include_once('header.php');?>

	<div class="panel panel-default">
	<div class="panel panel-heading">
		<b class="btn btn-link" style="float:left">Exercises with its picture, its category and details</b>
		<form method="post" action="<?php echo base_url();?>controlExercise/searchExercise">
		<input type="text" name="forsearch" placeholder="search..." class="form-control" style="width:500px;float:left;margin-left: 80px;"/>
		<input type="submit" class="btn btn-success" name="btnsearch" value="search" style="margin-left: 20px;"/>
		</form>
	</div>
	
<div class="panel panel-body" style="font-size: 12px;">
	


	<?php
if($exercise->num_rows() > 0){
	foreach($exercise->result() as $row){
	?>
	<div class="col-lg-4 card" style="margin-top:15px;height:450px;">

     <!-- 	 <div class="events"> -->
     	 	<div class="col-lg-8">
	     	 	
	     	 		<!-- <h4>26 April, 2014</h4> -->
	     	 		
	     	 		<img src="<?php echo base_url();?>assets/images/exercises/<?php echo $row->eqimage;?>" alt="" class="img-responsive" >
	     	 			<div class="btn2">
					   <a href="<?php echo base_url();?>controlExercise/getExerciseVideo?id=<?php echo $row->id;?>">click for video</a>
					</div>
	     	 		
	     	 </div>
	     	 <div class="col-lg-4">
	     	<!--  	<ul class="event1_text"> -->
	     	 		<!-- <span class="m_5">h.12.00-h.13.00</span> -->
	     	 		<b>Exercise name:</b>
	     	 		<p><?php echo $row->eqname;?></p>
	     	 	
	     	 		<b>Exercise Category:</b>
	     	 		<p><?php echo $row->eqcat;?></p>
	     	 		
	     	 		</div>
	     	 		<div class="col-lg-12" style="word-wrap: break-word;">
	     	 		<h4>Exercise details:</h4>
	     	 		<textarea readonly="readonly" style="height:200px;width:100%"><?php echo $row->eqdetails;?></textarea>
	     	 		</div>
	     	 		<!-- <div class="btn2">
					   <a href="#">Reservation</a>
					</div> -->
	     	 	<!-- </ul> -->
	     	 	
     	 		<div class="clear"></div>
     	 
     	 	<!-- <div class="event-bottom">
	     	 	<ul class="event1">
	     	 		<!-- <h4>26 April, 2014</h4> -->
	     	 	<!-- 	<img src="<?php echo base_url();?>assets/images/arnoldpress.jpg" alt="">
	     	 	</ul>
	     	 	<ul class="event1_text">
	     	 		<span class="m_5">h.12.00-h.13.00</span>
	     	 		<h4>Arnold press</h4>
	     	 		<p>This exercise is for shoulder</p> -->
	     	 		<!-- <div class="btn2">
					   <a href="#">Reservation</a>
					</div> -->
	     	 <!-- 	</ul>
     	 		<div class="clear"></div>
     	 	</div> --> 
     <!-- 	 </div> -->
    
    
     </div>
      	 	<?php	
}
}
	?>



     </div>
     

</div>


<?php include_once('footer.php');?>