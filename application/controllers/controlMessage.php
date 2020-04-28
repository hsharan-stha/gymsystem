<?php
class ControlMessage extends CI_Controller{

   public function removeMessage(){
      $this->load->model('modelMessage');
      $id=$this->input->get('id');
     $this->modelMessage->deleteMessage($id);

     redirect('ControlMessage/getMessage');
   }

   public function getMessage(){

      $this->load->model('modelMessage');
      $result=$this->modelMessage->retriveMessage();

      $data['feedbackmsg']=$result;
      $this->load->view('admin/feedback',$data);
   }
	
public function newMessage(){
	    $msg=$this->input->post('msg');

		$this->load->model('modelMessage');
		$this->modelMessage->saveMessage($msg);

		$this->session->set_flashData('feedbackmsg','feedback successfull !!!');
		redirect('controlWelcome/index');


// 	$config = Array(
//   'protocol' => 'smtp',
//   'smtp_host' => 'smtp.mailtrap.io',
//   'smtp_port' => 465,
//   'smtp_user' => '0cd428dfe19ef1',
//   'smtp_pass' => 'b53be7d729fb42',
//   'crlf' => "\r\n",
//   'newline' => "\r\n"
// );

// 	$this->load->library('email',$config);
// 	$this->email->from('sharan.softwarica@gmail.com');
// 	$this->email->to('sharan.softwarica@gmail.com');
// 	$this->email->subject('email test');
// 	$this->email->message('testing the email class');
// 	$this->email->set_newline('\r\n');

// 	$result=$this->email->send();
// 	print_r($this->email->print_debugger());
	  // $config = array();
   //              $config['useragent']           = "CodeIgniter";
   //              $config['mailpath']            = "/usr/bin/sendmail"; // or "/usr/sbin/sendmail"
   //              $config['protocol']            = "starttls";
   //              $config['smtp_host']           = "ssl://smtp.googlemail.com";
   //              $config['smtp_port']           = "587";
   //              $config['mailtype'] = 'html';
   //              $config['charset']  = 'utf-8';
   //              $config['newline']  = "\r\n";
   //              $config['wordwrap'] = TRUE;

   //              $this->load->library('email');

   //              $this->email->initialize($config);

   //              $this->email->from('sharan.softwarica@gmail.com', 'admin');
   //              $this->email->to('hsharanstha123@gmail.com');
   //              // $this->email->cc('xxx@gmail.com'); 
   //              $this->email->bcc($this->input->post('email')); 
   //              $this->email->subject('Registration Verification: Continuous Imapression');
   //              $msg = "Thanks for signing up!
   //          Your account has been created, 
   //          ";

   //          $this->email->message($msg);   
   //          //$this->email->message($this->load->view('email/'.$type.'-html', $data, TRUE));

   //          $this->email->send();
           
}
}

?>