<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {
    public function __construct() {
        parent::__construct();
		$this->load->helper( array('url', 'form'));
		$this->load->library('session');
		$this->load->library('form_validation');
		
    }

    public function index_orginal(){
		$data['title'] = 'Eduface';
		$data['enroll'] = $this->load->view('enroll_form');
		$this->template->write_view('content','home',$data);
		$this->template->render();
    }
	
	 public function index(){
		$data['title'] = 'Bharathiar university spot admission, UG/ PG courses | Eduface Academy for advanced studies';
		$this->template->write_view('content','home',$data);
		$this->template->render();
    }
	public function aboutus(){
		$data['title'] = 'About us | Eduface';
		$this->template->write_view('content','aboutus',$data);
		$this->template->render();
    }
	public function courses(){
		$data['title'] = 'Courses we offer | Eduface';
		$this->template->write_view('content','courses',$data);
		$this->template->render();
    }
	public function contactus(){
		$data['title'] = 'Contact us | Eduface';
		$this->template->write_view('content','contactus',$data);
		$this->template->render();
    }
	public function departments(){
		$data['title'] = 'Departments | Eduface';
		$this->template->write_view('content','departments',$data);
		$this->template->render();
    }
	
	public function enroll_mailer(){
		
		if($this->input->post()){
			
			$name=$this->input->post('name');
			$phone=$this->input->post('phone');
			$email=$this->input->post('email');
			$course=$this->input->post('course');
			$specialization=$this->input->post('specialization');
			
			$emailid=$email;
			$namep=$name;
			
			$name= "Name: $name<br><br>";
			$phone= "Phone: $phone<br><br>";
			$email= "Email: $email<br><br>";
			$course= "Course: $course<br><br>";
			$specialization= "specialization: $specialization<br><br>";
			
			$body= "$name $phone $email $course $specialization";
		
			$this->load->library('email');
		    $this->email->from($emailid, $namep); 
		    $this->email->to('office@eduface.in');
		    $this->email->subject('Course Registration');
		    $this->email->message($body);
		    if ($this->email->send())
		    {
			  echo 'true';
			  
			  $data['name']=$namep;
			  $data['email']=$emailid;
			  
			  $this->acknowledgement($data); 
		    }
		    else
		    {
			   echo 'false';
		    }

		}
	
	}
	
	public function contact_maileroff(){//PHP Mailer - working - Put in to OFF
		
		if($this->input->post()){
			
			$name=$this->input->post('name');
			$phone=$this->input->post('phone');
			$email=$this->input->post('email');
			$message=$this->input->post('message');
			
			//if($email==''){
			///	$email='-';
		//	}
			
			$name= "Name: $name<br><br>";
			$phone= "Phone: $phone<br><br>";
			$email= "Email: $email<br><br>";
			$message= "Message: $message<br><br>";
			
			$body= "$name $phone $email $message";
			
			echo $body;
			
			$this->load->library('email');
		    $this->email->from('info@eduface.in', $name); 
		    $this->email->to('aneeskader209@gmail.com');
		    $this->email->subject('Visitor Message');
		    $this->email->message($body);
		    if ($this->email->send())
		    {
			  echo 'true';
		    }
		    else
		    {
			   echo 'false';
		    }

		}
	
	}
	public function contact_mailer(){//PHP mail();
		
		if($this->input->post()){
			
			$name=$this->input->post('name');
			$phone=$this->input->post('phone');
			$email=$this->input->post('email');
			$message=$this->input->post('message');
			
			$namep=$name;
			$emailid=$email;
			
			$name= "Name: $name<br><br>";
			$phone= "Phone: $phone<br><br>";
			$email= "Email: $email<br><br>";
			$message= "Message: $message<br><br>";
			
			$body= $name.$phone.$email.$message;
			
			$headers= "From: $namep <office@eduface.in>\r\n";
			$headers.= "MIME-Version: 1.0\r\n";
			$headers.= "Content-Type: text/html; charset=UTF-8\r\n";
			if(mail('office@eduface.in', 'Visitor Message', $body, $headers)){
				echo 'true';
			}else echo 'false';
		
		}
	}
	public function acknowledgement($data){
		
			$name=$data['name'];
			$email=$data['email'];
			
			$headers= "From: $namep <office@eduface.in>\r\n";
			$headers.= "MIME-Version: 1.0\r\n";
			$headers.= "Content-Type: text/html; charset=UTF-8\r\n";
			
			$body="<div class='parent' style='width:100%;'>
				<p style='text-align:justify; color:#172634; font-size:16px;'>Dear <strong>$name</strong>, your application for enrolling the course is received successfully. We will contact you soon. For more queries visit our Office. Thank you.</p>
				
			</div>";
			
			if(mail($email, 'Acknowledgement', $body, $headers)){
			}
			
	}
}

/* End of file Home.php */
/* Location: ./application/controllers/Home.php */