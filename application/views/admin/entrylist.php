<?php

if(!isset($this->session->userdata['sess_id'])) {

  redirect('controlWelcome/goToLogin');
}

?>
<?php $this->load->view('link');?>
<?php $this->load->view('admin/adminheader');?>
<div class="container-fluid">
<div class="panel panel-default" style="margin-top:10px">
  <div class="panel panel-heading">
<h5 class="btn btn-link">Member entry list:

</h5>

  </div>
<div class="panel panel-body" >
<div class="table-responsive">
<table class="table" style="font-size: 12px;">
  <tr>
    <th>Member ID</th><th>Member name</th><th>Member entry date</th><th>Member entry time</th>
    <th>Member left time</th><th>actions</th>
  </tr>
  <?php
 
if($entrylist->num_rows() > 0)
{
	foreach ($entrylist->result() as $row) 
	{
		?>
		<tr>
			<td><?php echo $row->mid; ?></td>
			<td><?php echo $row->mname; ?></td>
			<td><?php echo $row->edate; ?></td>
			<td><?php echo $row->etime; ?></td>
			<td><?php echo $row->ltime; ?></td>
		
			<td><a onclick="return confirm('Do you want to delete?')" href="<?php echo base_url();?>controlEntry/removeEntry?id=<?php echo $row->id; ?> && edate=<?php echo $row->edate;?>">delete</a></td>
			<td><a href="<?php echo base_url();?>controlAdmin/viewDetails?id=<?php echo $row->mid; ?>">view details</a></td>
			

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
<?php $this->load->view('footer');?>