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
<h5 class="btn btn-link">Members feedback:

</h5>

  </div>
<div class="panel panel-body" >
<div class="table-responsive">
<table class="table" style="font-size: 12px;">
  <tr>
    <th>feedback no</th><th>Mesasge</th>
  </tr>
  <?php
 
if($feedbackmsg->num_rows() > 0)
{
	foreach ($feedbackmsg->result() as $row) 
	{
		?>
		<tr>
			<td><?php echo $row->id; ?></td>
			<td><?php echo $row->msg; ?></td>
			<td><a onclick="return confirm('Do you want to delete?')" href="<?php echo base_url();?>controlMessage/removeMessage?id=<?php echo $row->id; ?>">delete</a></td>
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