<?php include_once('link.php');?>
<?php include_once('header.php');?>

  <div class="panel panel-default">
    <div class="panel panel-heading">
    <b class="btn btn-link" style="float:left">diets</b>
    <form method="post" action="<?php echo base_url();?>controlDiet/searchDiet">
    <input type="text" name="forsearch" placeholder="search..." class="form-control" style="width:500px;float:left;margin-left: 80px;"/>
    <input type="submit" class="btn btn-success" name="btnsearch" value="search" style="margin-left: 20px;"/>
    </form>
  </div>
  
<div class="panel panel-body" style="font-size: 12px;">
  


  <?php
if($diets->num_rows() > 0){
  foreach($diets->result() as $row){
  ?>
  <div class="col-lg-6 card" style="margin-top:15px; height:450px;">
        <div class="col-lg-6 card">
          
            <img src="<?php echo base_url();?>assets/images/diets/<?php echo $row->dimage;?>" alt="" class="img-responsive" >

        </div>

        <div class="col-lg-6">
          
             <div class="view view-fifth">
                <video  width="auto" height="450" controls>
                <source src="<?php echo base_url();?>assets/images/diets/<?php echo $row->dvideo;?>" type="video/mp4">
                <!-- <source src="<?php echo base_url();?>assets/videos/video.ogg" type="video/ogg">
                <source src="<?php echo base_url();?>assets/videos/video.webm" type="video/webm">
                <object data="<?php echo base_url();?>assets/videos/video.mp4"  height="350">
                  <embed src="<?php echo base_url();?>assets/videos/video.swf"  height="350">
                </object>  -->
                Your browser does not support the video tag.
              </video>
                
                    </div>
         </div>
         <div class="col-lg-4">
    
            <b>diet name:</b>
            <p><?php echo $row->dname;?></p>
            
            <b>diet Category:</b>
            <p><?php echo $row->dcat;?></p>
          
            </div>
            <div class="col-lg-8">
            <b>diet details:</b>
           <textarea style="height:200px;width:100%"><?php echo $row->ddetails;?></textarea>
            </div>
            
          
          <div class="clear"></div>
 
    
     </div>
          <?php 
}
}
  ?>



     </div>
     

</div>


<?php include_once('footer.php');?>