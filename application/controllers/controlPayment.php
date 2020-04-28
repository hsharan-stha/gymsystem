<?php
class ControlPayment extends CI_Controller{
	public function goToMemberPayment(){

	$this->load->model('modelPayment');
		$result=$this->modelPayment->retriveMember();

		$data['mid']=$result;
		$this->load->view('admin/adminaction/payment',$data);

	}

	public function newPayment(){
		
		$mid=$this->input->post('mid');
		$mname=$this->input->post('mname');
		$pdate=$this->input->post('pdate');
		$repdate=$this->input->post('repdate');

		$this->load->model('modelPayment');
		$this->modelPayment->savePayment($mid,$mname,$pdate,$repdate);

		$this->session->set_flashData('payment','payment is done');
		redirect('ControlPayment/goToMemberPayment');
	

	}

	public function retrivePaymentMembers(){
		$date=$this->input->get('date');

		$this->load->model('modelPayment');
		$result=$this->modelPayment->retrivePaymentByDate($date);

		$data['paymentlist']=$result;
		$this->load->view('admin/paymentlist',$data);
	}

	public function getPayment(){
$this->load->model('modelPayment');
		$result=$this->modelPayment->retrivePayment();

		$data['paymentlist']=$result;
		$this->load->view('admin/paymentlist',$data);
	}

	public function removePayment(){
		$id=$this->input->get('id');
		$pdate=$this->input->get('pdate');
		$this->load->model('modelPayment');
		$this->modelPayment->deletePayment($id);

		$this->session->set_flashData('paymentdelete','delete sucessfull');
		redirect('controlWelcome/goToAdmin');
	}

}