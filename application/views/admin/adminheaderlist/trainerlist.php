<div class="container-fluid">
<div class="panel panel-default" style="margin-top:10px">
  <div class="panel panel-heading">
<h5 class="btn btn-link">Member list</h5>

  </div>
<div class="panel panel-body" >
<div class="table-responsive">
<table class="table" style="font-size: 12px;">
  <tr>
    <th>Trainer ID</th><th>Trainer name</th><th>Trainer picture</th><th>Trainer address</th><th>Trainer email</th>
    <th>Trainer username</th><th>Trainer password</th><th>Trainer contact</th><th>date of birth</th><th>joinDate</th><th>package ID</th><th>actions</th>
  </tr>
  <?php
 
if($trainerlist->num_rows() > 0)
{
	foreach ($trainerlist->result() as $row) 
	{
		?>
		<tr>
			<td><?php echo $row->id; ?></td>
			<td><?php echo $row->tname; ?></td>
			<td><img src="<?php echo base_url();?>assets/images/trainers/<?php echo $row->image;?>" style="height:100px;"/>
				 <form class="" action="<?php echo base_url();?>controlTrainer/editPicture" method="post" id="myForm" name="myForm" enctype="multipart/form-data" accept-charset="utf-8">
        <input type="hidden" name="id" value="<?php echo $row->id;?>"/>
        <input type="file" name="userfile" id="image" required="required" class="form-control" style="width:150px"/>

        <input type="submit" value="click to change image" name="btnsubmitimage" class="btn btn-link form-control" />
       
        </form>

			</td>
			<td><?php echo $row->address; ?></td>
			<td><?php echo $row->email; ?></td>
			<td><?php echo $row->uname; ?></td>
			<td><?php echo $row->pword; ?></td>
			<td><?php echo $row->contact; ?></td>
			<td><?php echo $row->dob; ?></td>
			<td><?php echo $row->jdate; ?></td>
			<td><?php echo $row->package; ?></td>
			<td><a onclick="return confirm('Do you want to delete?')" href="<?php echo base_url();?>controlTrainer/removeTrainer?id=<?php echo $row->id; ?>">delete</a></td>
			<td><a href="<?php echo base_url();?>controlTrainer/editTrainer?id=<?php echo $row->id;?>">edit</a></td>
			</td>

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
