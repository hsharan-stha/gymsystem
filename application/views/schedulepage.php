<?php
if(!isset($this->session->userdata['sess_mid'])){
	redirect('controlWelcome/index');
}
?>

<?php include_once('link.php');?>
<?php include_once('header.php');?>
<style type="text/css">
	h2{
		font-size: 15px !important;
	}
	h3{
		font-size: 13px !important;
	}
	h4{
		font-size: 12px !important;
	}

</style>
<div class="container-fluid">
<div class="panel panel-default" style="margin-top:10px">
  <div class="panel panel-heading">
<h5 class="btn btn-link">Exercise Schedule</h5>

  </div>
<div class="panel panel-body" >


  <?php
 
if($retriveschedule->num_rows() > 0)
{
	foreach ($retriveschedule->result() as $row) 
	{
		?>
		<div class="col-lg-12">
		member id:<b><?php echo $row->mid; ?></b><br/>
		member name:<b><?php echo $row->mname; ?></b><br/>
		exercise start date:<b><?php echo $row->esdate; ?></b><br/>
		exercise end date:<b><?php echo $row->eedate; ?></b>
		</div>
<div class="col-lg-12">
	

<div class="col-lg-3" >
			<div class="card">
			<h2><b>day:</b><?php echo $row->day1;?>	</h2>
			<h3><b>exercise category:</b><?php echo $row->cat1;?></h3>
			
			<h4><b>ex 1:</b><a href="<?php echo base_url();?>controlExercise/exvdoByExName?eqname=<?php echo $row->ename1cat1;?>"><?php echo $row->ename1cat1;?></a></h4>
			<h4><b>ex 2:</b><a href="<?php echo base_url();?>controlExercise/exvdoByExName?eqname=<?php echo $row->ename2cat1;?>"><?php echo $row->ename2cat1;?></a><h4>
			<h4><b>ex 3:</b><a href="<?php echo base_url();?>controlExercise/exvdoByExName?eqname=<?php echo $row->ename3cat1;?>"><?php echo $row->ename3cat1;?></a><h4>
			<h4><b>ex 4:</b><a href="<?php echo base_url();?>controlExercise/exvdoByExName?eqname=<?php echo $row->ename4cat1;?>"><?php echo $row->ename4cat1;?></a><h4>
			<h4><b>ex 5:</b><a href="<?php echo base_url();?>controlExercise/exvdoByExName?eqname=<?php echo $row->ename5cat1;?>"><?php echo $row->ename5cat1;?></a><h4>
			<h4><b>ex 6:</b><a href="<?php echo base_url();?>controlExercise/exvdoByExName?eqname=<?php echo $row->ename6cat1;?>"><?php echo $row->ename6cat1;?></a><h4>
		

			</div>
		</div>
		<div class="col-lg-3" >
			<div class="card">
			<h2><b>day:</b><?php echo $row->day2;?>	</h2>
			<h3><b>exercise category:</b><?php echo $row->cat2;?></h3>
			
			<h4><b>ex 1:</b><a href="<?php echo base_url();?>controlExercise/exvdoByExName?eqname=<?php echo $row->ename1cat2;?>"><?php echo $row->ename1cat2;?></a></h4>
			<h4><b>ex 2:</b><a href="<?php echo base_url();?>controlExercise/exvdoByExName?eqname=<?php echo $row->ename2cat2;?>"><?php echo $row->ename2cat2;?></a><h4>
			<h4><b>ex 3:</b><a href="<?php echo base_url();?>controlExercise/exvdoByExName?eqname=<?php echo $row->ename3cat2;?>"><?php echo $row->ename3cat2;?></a><h4>
			<h4><b>ex 4:</b><a href="<?php echo base_url();?>controlExercise/exvdoByExName?eqname=<?php echo $row->ename4cat2;?>"><?php echo $row->ename4cat2;?></a><h4>
			<h4><b>ex 5:</b><a href="<?php echo base_url();?>controlExercise/exvdoByExName?eqname=<?php echo $row->ename5cat2;?>"><?php echo $row->ename5cat2;?></a><h4>
			<h4><b>ex 6:</b><a href="<?php echo base_url();?>controlExercise/exvdoByExName?eqname=<?php echo $row->ename6cat2;?>"><?php echo $row->ename6cat2;?></a><h4>
		

			</div>
		</div>
		<div class="col-lg-3" >
			<div class="card">
			<h2><b>day:</b><?php echo $row->day3;?>	</h2>
			<h3><b>exercise category:</b><?php echo $row->cat3;?></h3>
			
			<h4><b>ex 1:</b><a href="<?php echo base_url();?>controlExercise/exvdoByExName?eqname=<?php echo $row->ename1cat3;?>"><?php echo $row->ename1cat3;?></a></h4>
			<h4><b>ex 2:</b><a href="<?php echo base_url();?>controlExercise/exvdoByExName?eqname=<?php echo $row->ename2cat3;?>"><?php echo $row->ename2cat3;?></a><h4>
			<h4><b>ex 3:</b><a href="<?php echo base_url();?>controlExercise/exvdoByExName?eqname=<?php echo $row->ename3cat3;?>"><?php echo $row->ename3cat3;?></a><h4>
			<h4><b>ex 4:</b><a href="<?php echo base_url();?>controlExercise/exvdoByExName?eqname=<?php echo $row->ename4cat3;?>"><?php echo $row->ename4cat3;?></a><h4>
			<h4><b>ex 5:</b><a href="<?php echo base_url();?>controlExercise/exvdoByExName?eqname=<?php echo $row->ename5cat3;?>"><?php echo $row->ename5cat3;?></a><h4>
			<h4><b>ex 6:</b><a href="<?php echo base_url();?>controlExercise/exvdoByExName?eqname=<?php echo $row->ename6cat3;?>"><?php echo $row->ename6cat3;?></a><h4>
		

			</div>
		</div>
		<div class="col-lg-3" >
			<div class="card">
			<h2><b>day:</b><?php echo $row->day4;?>	</h2>
			<h3><b>exercise category:</b><?php echo $row->cat4;?></h3>
			
			<h4><b>ex 1:</b><a href="<?php echo base_url();?>controlExercise/exvdoByExName?eqname=<?php echo $row->ename1cat4;?>"><?php echo $row->ename1cat4;?></a></h4>
			<h4><b>ex 2:</b><a href="<?php echo base_url();?>controlExercise/exvdoByExName?eqname=<?php echo $row->ename2cat4;?>"><?php echo $row->ename2cat4;?></a><h4>
			<h4><b>ex 3:</b><a href="<?php echo base_url();?>controlExercise/exvdoByExName?eqname=<?php echo $row->ename3cat4;?>"><?php echo $row->ename3cat4;?></a><h4>
			<h4><b>ex 4:</b><a href="<?php echo base_url();?>controlExercise/exvdoByExName?eqname=<?php echo $row->ename4cat4;?>"><?php echo $row->ename4cat4;?></a><h4>
			<h4><b>ex 5:</b><a href="<?php echo base_url();?>controlExercise/exvdoByExName?eqname=<?php echo $row->ename5cat4;?>"><?php echo $row->ename5cat4;?></a><h4>
			<h4><b>ex 6:</b><a href="<?php echo base_url();?>controlExercise/exvdoByExName?eqname=<?php echo $row->ename6cat4;?>"><?php echo $row->ename6cat4;?></a><h4>
		

			</div>
		</div>
		<div class="col-lg-3" >
			<div class="card">
			<h2><b>day:</b><?php echo $row->day5;?>	</h2>
			<h3><b>exercise category:</b><?php echo $row->cat5;?></h3>
			
			<h4><b>ex 1:</b><a href="<?php echo base_url();?>controlExercise/exvdoByExName?eqname=<?php echo $row->ename1cat5;?>"><?php echo $row->ename1cat5;?></a></h4>
			<h4><b>ex 2:</b><a href="<?php echo base_url();?>controlExercise/exvdoByExName?eqname=<?php echo $row->ename2cat5;?>"><?php echo $row->ename2cat5;?></a><h4>
			<h4><b>ex 3:</b><a href="<?php echo base_url();?>controlExercise/exvdoByExName?eqname=<?php echo $row->ename3cat5;?>"><?php echo $row->ename3cat5;?></a><h4>
			<h4><b>ex 4:</b><a href="<?php echo base_url();?>controlExercise/exvdoByExName?eqname=<?php echo $row->ename4cat5;?>"><?php echo $row->ename4cat5;?></a><h4>
			<h4><b>ex 5:</b><a href="<?php echo base_url();?>controlExercise/exvdoByExName?eqname=<?php echo $row->ename5cat5;?>"><?php echo $row->ename5cat5;?></a><h4>
			<h4><b>ex 6:</b><a href="<?php echo base_url();?>controlExercise/exvdoByExName?eqname=<?php echo $row->ename6cat5;?>"><?php echo $row->ename6cat5;?></a><h4>
		

			</div>
		</div>
			<div class="col-lg-3" >
			<div class="card">
			<h2><b>day:</b><?php echo $row->day6;?>	</h2>
			<h3><b>exercise category:</b><?php echo $row->cat6;?></h3>
			
			<h4><b>ex 1:</b><a href="<?php echo base_url();?>controlExercise/exvdoByExName?eqname=<?php echo $row->ename1cat6;?>"><?php echo $row->ename1cat6;?></a></h4>
			<h4><b>ex 2:</b><a href="<?php echo base_url();?>controlExercise/exvdoByExName?eqname=<?php echo $row->ename2cat6;?>"><?php echo $row->ename2cat6;?></a><h4>
			<h4><b>ex 3:</b><a href="<?php echo base_url();?>controlExercise/exvdoByExName?eqname=<?php echo $row->ename3cat6;?>"><?php echo $row->ename3cat6;?></a><h4>
			<h4><b>ex 4:</b><a href="<?php echo base_url();?>controlExercise/exvdoByExName?eqname=<?php echo $row->ename4cat6;?>"><?php echo $row->ename4cat6;?></a><h4>
			<h4><b>ex 5:</b><a href="<?php echo base_url();?>controlExercise/exvdoByExName?eqname=<?php echo $row->ename5cat6;?>"><?php echo $row->ename5cat6;?></a><h4>
			<h4><b>ex 6:</b><a href="<?php echo base_url();?>controlExercise/exvdoByExName?eqname=<?php echo $row->ename6cat6;?>"><?php echo $row->ename6cat6;?></a><h4>
		

			</div>
		</div>
		<div class="col-lg-3" >
			<div class="card">
			<h2><b>day:</b><?php echo $row->day7;?>	</h2>
			<h3><b>exercise category:</b><?php echo $row->cat7;?></h3>
			
			<h4><b>ex 1:</b><a href="<?php echo base_url();?>controlExercise/exvdoByExName?eqname=<?php echo $row->ename1cat7;?>"><?php echo $row->ename1cat7;?></a></h4>
			<h4><b>ex 2:</b><a href="<?php echo base_url();?>controlExercise/exvdoByExName?eqname=<?php echo $row->ename2cat7;?>"><?php echo $row->ename2cat7;?></a><h4>
			<h4><b>ex 3:</b><a href="<?php echo base_url();?>controlExercise/exvdoByExName?eqname=<?php echo $row->ename3cat7;?>"><?php echo $row->ename3cat7;?></a><h4>
			<h4><b>ex 4:</b><a href="<?php echo base_url();?>controlExercise/exvdoByExName?eqname=<?php echo $row->ename4cat7;?>"><?php echo $row->ename4cat7;?></a><h4>
			<h4><b>ex 5:</b><a href="<?php echo base_url();?>controlExercise/exvdoByExName?eqname=<?php echo $row->ename5cat7;?>"><?php echo $row->ename5cat7;?></a><h4>
			<h4><b>ex 6:</b><a href="<?php echo base_url();?>controlExercise/exvdoByExName?eqname=<?php echo $row->ename6cat7;?>"><?php echo $row->ename6cat7;?></a><h4>
		

			</div>
		</div>

</div>



	<?php
	}

}
else
{
?>
<tr colspan="7"><h5 align="center">data not found</h5></tr>
<?php
}
  ?>

	
</div>
</div>
</div>
<?php include_once('footer.php');?>