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
<h5 class="btn btn-link">Member who clear payment list:

</h5>

  </div>
<div class="panel panel-body" >
<div class="table-responsive">
<table class="table" style="font-size: 12px;">
  <tr>
    <th>Member ID</th><th>Member name</th><th>Member payment date</th><th>Member re payment date</th>
    <th>actions</th>
  </tr>
  <?php
 
if($paymentlist->num_rows() > 0)
{
	foreach ($paymentlist->result() as $row) 
	{
		?>
		<tr>
			<td><?php echo $row->mid; ?></td>
			<td><?php echo $row->mname; ?></td>
			<td><?php echo $row->pdate; ?></td>
			<td><?php echo $row->repdate; ?></td>
			
		
			<td><a onclick="return confirm('Do you want to delete?')" href="<?php echo base_url();?>controlPayment/removePayment?id=<?php echo $row->id; ?> && pdate=<?php echo $row->pdate;?>">delete</a></td>
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