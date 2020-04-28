<div class="container-fluid">
<div class="panel panel-default" style="margin-top:10px">
  <div class="panel panel-heading">
<h5 class="btn btn-link">Videos list</h5>

  </div>
<div class="panel panel-body" style="font-size: 12px;">
	
	<?php
if($videolist->num_rows() > 0){
	foreach($videolist->result() as $row){
	?>
	<div class="col-lg-4 card" style="margin-top:15px;height:400px;">

     	 <!-- <div class="events"> -->
     	 <div class="col-lg-12">
     	 	
	     	 		
	     	 		 <div class="view view-fifth">
				  	  	<video  width="auto" height="450" controls>
							  <source src="<?php echo base_url();?>assets/videos/<?php echo $row->video;?>" type="video/mp4">
							  <!-- <source src="<?php echo base_url();?>assets/videos/video.ogg" type="video/ogg">
							  <source src="<?php echo base_url();?>assets/videos/video.webm" type="video/webm">
							  <object data="<?php echo base_url();?>assets/videos/video.mp4"  height="350">
							    <embed src="<?php echo base_url();?>assets/videos/video.swf"  height="350">
							  </object>  -->
							  Your browser does not support the video tag.
							</video>
					      
	                  </div>
	     	 		 <form class="" action="<?php echo base_url();?>controlVideo/editVideo" method="post" id="myForm" name="myForm" enctype="multipart/form-data" accept-charset="utf-8">
			        <input type="hidden" name="id" value="<?php echo $row->id;?>"/>
			        <input type="file" name="video" id="video" required="required" class="form-control"/>

			        <input type="submit" value="clik to change video" name="btnsubmitvideodetail" class="btn btn-link form-control" />
			       
			        </form>
	     	 	
	     	
			</div>
			<div class="col-lg-6" style="margin-top:10px;">
	     	
	     
	     	 
	     	 		<b>image name:</b>
	     	 		<p><?php echo $row->vname;?></p>
	     	 		
	     	 		<b>image Category:</b>
	     	 		<p><?php echo $row->vcat;?></p>
	
	     	 		</div>
			<div class="col-lg-6 btn2" style="margin-top:70px;">
		
					    <a onclick="return confirm('Do you want to delete?')" href="<?php echo base_url();?>controlVideo/removeVideo?id=<?php echo $row->id; ?>">delete</a>
			<a href="<?php echo base_url();?>controlVideo/editVideoDetails?id=<?php echo $row->id;?>">edit</a>
		
					</div>
			
	     	 	 
     	 		<div class="clear"></div>
     	 

     	 <!-- </div> -->
    
    
     </div>
      	 	<?php	
}
}
else{
?>
<h4 align="center">no data found</h4>
<?php
}
	?>



     </div>

</div>
</div>
