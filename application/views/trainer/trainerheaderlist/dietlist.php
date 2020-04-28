<div class="container-fluid">
<div class="panel panel-default" style="margin-top:10px">
  <div class="panel panel-heading">
<h5 class="btn btn-link">Diet list</h5>

  </div>
<div class="panel panel-body" style="font-size: 12px;">
	


	<?php
if($dietlist->num_rows() > 0){
	foreach($dietlist->result() as $row){
	?>
	<div class="col-lg-6 card" style="margin-top:15px;height:500px;">

     	 <!-- <div class="events"> -->
     	 <div class="col-lg-12">
     	 	<div class="col-lg-6">
	     	 	
	     	 		<!-- <h4>26 April, 2014</h4> -->
	     	 		
	     	 		<img src="<?php echo base_url();?>assets/images/diets/<?php echo $row->dimage;?>" alt="" class="img-responsive" style="height:150px;" >
	     	 		 <form class="" action="<?php echo base_url();?>controlDiet/editPicture" method="post" id="myForm" name="myForm" enctype="multipart/form-data" accept-charset="utf-8">
			        <input type="hidden" name="id" value="<?php echo $row->id;?>"/>
			        <input type="file" name="userfile" id="image" required="required" class="form-control"/>

			        <input type="submit" value="change image" name="btnsubmitimage" class="btn btn-link form-control" />
			       
			        </form>
	     	 		
	     	 </div>
	     	 <div class="col-lg-6">
	     	 				<video  width="auto" height="500" controls>
							  <source src="<?php echo base_url();?>assets/images/diets/<?php echo $row->dvideo;?>" type="video/mp4">
							  <!-- <source src="<?php echo base_url();?>assets/videos/video.ogg" type="video/ogg">
							  <source src="<?php echo base_url();?>assets/videos/video.webm" type="video/webm">
							  <object data="<?php echo base_url();?>assets/videos/video.mp4"  height="350">
							    <embed src="<?php echo base_url();?>assets/videos/video.swf"  height="350">
							  </object>  -->
							  Your browser does not support the video tag.
							</video>
							<form class="" action="<?php echo base_url();?>controlDiet/editVideo" method="post" id="myForm" name="myForm" enctype="multipart/form-data" accept-charset="utf-8">
			        <input type="hidden" name="id" value="<?php echo $row->id;?>"/>
			        <input type="file" name="video" id="video" required="required" class="form-control"/>

			        <input type="submit" value="change video" name="btnsubmitvideo" class="btn btn-link form-control" />
			       
			        </form>
	     	 		</div>
			</div>

			<div class="col-lg-12 btn2">
		
					    <a onclick="return confirm('Do you want to delete?')" href="<?php echo base_url();?>controlDiet/removeDiet?id=<?php echo $row->id; ?>">delete</a>
			<a href="<?php echo base_url();?>controlDiet/editDiet?id=<?php echo $row->id;?>">edit</a>
		
					</div>
			<div class="col-lg-12" style="margin-top:10px;">
	     	 <div class="col-lg-3">
	     
	     	 
	     	 		<b>Diet name:</b>
	     	 		<p><?php echo $row->dname;?></p>
	     	 		
	     	 		<b>Diet Category:</b>
	     	 		<p><?php echo $row->dcat;?></p>
	     	 		
	     	 		</div>
	     	 		<div class="col-lg-9">
	     	 		<b>Diet details:</b>
	     	 		<textarea readonly="readonly" style="height:200px;width:100%"><?php echo $row->ddetails;?></textarea>
	     	 		</div>
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
