<?php include_once('link.php');?>
<?php include_once('header.php');?>

	<div class="panel panel-default">
	<div class="panel panel-heading">
		<b class="btn btn-link" style="float:left">images</b>
		<form method="post" action="<?php echo base_url();?>controlImage/searchImage">
		<input type="text" name="forsearch" placeholder="search..." class="form-control" style="width:500px;float:left;margin-left: 80px;"/>
		<input type="submit" class="btn btn-success" name="btnsearch" value="search" style="margin-left: 20px;"/>
		</form>
	</div>
	
<div class="panel panel-body" style="font-size: 12px;">
	


	<?php
if($eximages->num_rows() > 0){
	foreach($eximages->result() as $row){
	?>
	<div class="col-lg-4 card" style="margin-top:15px;">

     	 	<div class="col-lg-12">
	     	 	<img src="<?php echo base_url();?>assets/images/<?php echo $row->image?>" alt="" class="img-responsive">
	     	 		<!--  <div class="view view-fifth">
				  	  	<video  width="auto" height="450" controls>
							  <source src="<?php echo base_url();?>assets/images/<?php echo $row->image;?>" type="video/mp4">
							  <source src="<?php echo base_url();?>assets/videos/video.ogg" type="video/ogg">
							  <source src="<?php echo base_url();?>assets/videos/video.webm" type="video/webm">
							  <object data="<?php echo base_url();?>assets/videos/video.mp4"  height="350">
							    <embed src="<?php echo base_url();?>assets/videos/video.swf"  height="350">
							  </object> 
							  Your browser does not support the video tag.
							</video>
					      
	                  </div> -->
	     	 </div>
	     	 <div class="col-lg-12">
	  
	     	 		<b>image name:</b>
	     	 		<p><?php echo $row->iname;?></p>
	     	 		
	     	 		<b>image Category:</b>
	     	 		<p><?php echo $row->icat;?></p>
	     	 
	     	 		</div>
	     	 		<!-- <div class="col-lg-12">
	     	 		<h4>Exercise details:</h4>
	     	 		<p><?php echo $row->eqdetails;?></p>
	     	 		</div> -->
	     	 		
	     	 	
     	 		<div class="clear"></div>
 
    
     </div>
      	 	<?php	
}
}
	?>



     </div>
     

</div>


<?php include_once('footer.php');?>