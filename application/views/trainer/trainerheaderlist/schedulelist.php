<div class="container-fluid">
<div class="panel panel-default" style="margin-top:10px">
  <div class="panel panel-heading">
<h5 class="btn btn-link">Schedule list</h5>

  </div>
<div class="panel panel-body" >
<div class="table-responsive">
<table class="table table-striped" style="font-size: 12px;">
  <tr>
    <th>Member ID</th><th>Member name</th><th>Exercise start date</th><th>Exercise end date</th>
    <th>day</th><th>exercise</th><th>day</th><th>exercise</th><th>day</th><th>exercise</th>
    <th>day</th><th>exercise</th><th>day</th><th>exercise</th><th>day</th><th>exercise</th>

    <th>actions</th>
  </tr>
  <?php
 
if($schedulelist->num_rows() > 0)
{
	foreach ($schedulelist->result() as $row) 
	{
		?>
		<tr>
			<td><?php echo $row->mid; ?></td>
			 <td><?php echo $row->mname; ?></td> 
			<td><?php echo $row->esdate; ?></td>
			<td><?php echo $row->eedate; ?></td>
			<td><?php echo $row->day1; ?></td>
			<td><?php echo $row->cat1; ?></td>

			<td><?php echo $row->day2; ?></td>
			<td><?php echo $row->cat2; ?></td>

			<td><?php echo $row->day3; ?></td>
			<td><?php echo $row->cat3; ?></td>

			<td><?php echo $row->day4; ?></td>
			<td><?php echo $row->cat4; ?></td>

			<td><?php echo $row->day5; ?></td>
			<td><?php echo $row->cat5; ?></td>

			<td><?php echo $row->day6; ?></td>
			<td><?php echo $row->cat6; ?></td>
			<td><a onclick="return confirm('Do you want to delete?')" href="<?php echo base_url();?>controlSchedule/removeSchedule?id=<?php echo $row->mid; ?>">delete</a></td>
			<td><a href="<?php echo base_url();?>controlSchedule/editSchedule?id=<?php echo $row->mid; ?>">edit</a></td>

		</tr>
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


</table>
</div>

</div>
</div>
</div>
