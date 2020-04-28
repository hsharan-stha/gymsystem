<div class="container-fluid">
<div class="panel panel-default" style="margin-top:10px">
  <div class="panel panel-heading">
<h5 class="btn btn-link">Images list</h5>

  </div>
<div class="panel panel-body" style="font-size: 12px;">
	
	<?php
if($imagelist->num_rows() > 0){
	foreach($imagelist->result() as $row){
	?>
	<div class="col-lg-4 card" style="margin-top:15px;height:400px;">

     	 <!-- <div class="events"> -->
     	 <div class="col-lg-12">
     	 	
	     	 		
	     	 		<img src="<?php echo base_url();?>assets/images/<?php echo $row->image;?>" alt="" class="img-responsive"/>
	     	 		 <form class="" action="<?php echo base_url();?>controlImage/editPicture" method="post" id="myForm" name="myForm" enctype="multipart/form-data" accept-charset="utf-8">
			        <input type="hidden" name="id" value="<?php echo $row->id;?>"/>
			        <input type="file" name="userfile" id="image" required="required" class="form-control"/>

			        <input type="submit" value="change image" name="btnsubmitimage" class="btn btn-link form-control" />
			       
			        </form>
	     	 	
	     	
			</div>
			<div class="col-lg-6" style="margin-top:10px;">
	     	
	     
	     	 
	     	 		<b>image name:</b>
	     	 		<p><?php echo $row->iname;?></p>
	     	 		
	     	 		<b>image Category:</b>
	     	 		<p><?php echo $row->icat;?></p>
	
	     	 		</div>
			<div class="col-lg-6 btn2" style="margin-top:70px;">
		
					    <a onclick="return confirm('Do you want to delete?')" href="<?php echo base_url();?>controlImage/removeImage?id=<?php echo $row->id; ?>">delete</a>
			<a href="<?php echo base_url();?>controlImage/editImageDetails?id=<?php echo $row->id;?>">edit</a>
		
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
