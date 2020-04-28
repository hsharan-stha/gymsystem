<?php include_once('link.php');?>
<?php include_once('header.php');?>

	<?php
if($exvideos->num_rows() > 0){
	foreach($exvideos->result() as $row){
	?>
	<div class="panel panel-default">
	<div class="panel panel-heading">
		<h4 class="btn btn-link center-block"><?php echo $row->eqname; ?></h4>
	</div>
	
<div class="panel panel-body card">
	


	<div class="col-md-6 col-lg-offset-3 " id="menu">

					 <div class="view view-fifth">
				  	  	<video  width="auto" height="450" controls>
							  <source src="<?php echo base_url();?>assets/images/exercises/<?php echo $row->eqvideo;?>" type="video/mp4">
							  <!-- <source src="<?php echo base_url();?>assets/videos/video.ogg" type="video/ogg">
							  <source src="<?php echo base_url();?>assets/videos/video.webm" type="video/webm">
							  <object data="<?php echo base_url();?>assets/videos/video.mp4"  height="350">
							    <embed src="<?php echo base_url();?>assets/videos/video.swf"  height="350">
							  </object>  -->
							  Your browser does not support the video tag.
							</video>
					      
	                  </div>
			     </div>
      	 	<?php	
}
}
	?>



     </div>
     

</div>


<?php include_once('footer.php');?>