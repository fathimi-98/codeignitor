<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Program extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
        $this->load->view('view');
    }
    public function reg()
	{
        $this->load->view('register');
	}
	public function table()
	{
		$this->load->model('Mainmodel');
		$data['n']=$this->Mainmodel->view1();
		$this->load->view('table',$data);
		
	}
	
	public function regist()
	{
		$this->load->library('form_validation');
		$this->load->model('Mainmodel');
		$this->form_validation->set_rules("name","user_name",'required');
		$this->form_validation->set_rules("address","user_address",'required');
		$this->form_validation->set_rules("gender","user_gender",'required');
		$this->form_validation->set_rules("age","user_age",'required');
		$this->form_validation->set_rules("email","email_id",'required');
		$this->form_validation->set_rules("password","user_password",'required');
		if($this->form_validation->run())
		  {
			$pass=$this->input->post("password");
			$encpass=$this->Mainmodel->encpass($pass);
			
			  $a=array("sname"=>$this->input->post("name"),"address"=>$this->input->post("address"),"gender"=>$this->input->post("gender"),
			  "age"=>$this->input->post("age"),"email"=>$this->input->post("email"),"password"=>$encpass);
			  $this->Mainmodel->regtr($a);
			  redirect(base_url().'Program/data');

		  }
	}
	public function update()
	{
		$a=array("sname"=>$this->input->post("name"),
		"address"=>$this->input->post("address"),
		"gender"=>$this->input->post("gender"),
		"age"=>$this->input->post("age"),
		"email"=>$this->input->post("email"));
		$id=$this->uri->segment(3);
        $this->load->model('Mainmodel');
		$data['d']=$this->Mainmodel->singledetails($id);
		$this->Mainmodel->singledata();
		$this->load->view('table',$data);
		if($this->input->post("update"))
 			{
     		$this->Mainmodel->update($a,$this->input->post("id"));
     		redirect('Program/table','refresh');
 			}
	}
	public function delete()
	{
		$this->load->model('Mainmodel');
		$id=$this->uri->segment(3);
		$this->Mainmodel->delete($id);
		redirect('program/table','refresh');

	}
	public function data()
	{
		$this->load->model('Mainmodel');
		$data['n']=$this->Mainmodel->view1();
		$this->load->view('data',$data);
		
	}
	public function approve()
	{
		$this->load->model('Mainmodel');
		$id=$this->uri->segment(3);
		$this->Mainmodel->approve1($id);
		redirect(base_url().'program/submit');
	}
	public function reject()
	{
		$this->load->model('Mainmodel');
		$id=$this->uri->segment(3);
		$this->Mainmodel->reject1($id);
		redirect(base_url().'program/data');
	}
	public function submit()
	{
		$this->load->view('login');
		
	}
	public function pass()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules("emailid","email_id",'required');
		$this->form_validation->set_rules("password","password",'required');
		if($this->form_validation->run())
		  {
			$this->load->model('Mainmodel');
			$email=$this->input->post("emailid");
			$password=$this->input->post("password");
			$result=$this->Mainmodel->selectpass($email,$password);
			if($result)
			{
				$id=$this->Mainmodel->getuserid($email);
				$user=$this->Mainmodel->getuser($id);
				$this->load->library(array('session'));
				$this->session->set_userdata(array('id'=>(int)$user->sid,'status'=>$user->status));
				if($_SESSION['status']=='1')
				 {
					 redirect(base_url().'program/table');
				 }
				 else{
					 echo "waiting for approval";
				 }
			}
			else{
				echo "invalid user";
			}
		  }
		else{
			redirect(base_url().'program/submit');
		}
	}
	public function regform()
	{
		$this->load->view('register_form');
		
	}
	public function reg1()
	{
		$this->load->library('form_validation');
		$this->load->model('Mainmodel');
		$this->form_validation->set_rules("first_name","firstname",'required');	
		$this->form_validation->set_rules("last_name","lastname",'required');	
		$this->form_validation->set_rules("address","address",'required');	
		$this->form_validation->set_rules("district","district",'required');
		$this->form_validation->set_rules("pincode","pincode",'required');	
		$this->form_validation->set_rules("phoneno","phoneno",'required');	
		$this->form_validation->set_rules("dob","dob",'required');
		$this->form_validation->set_rules("gender","gender",'required');
		$this->form_validation->set_rules("education","education",'required');	
		$this->form_validation->set_rules("email","email",'required');
		$this->form_validation->set_rules("password","password",'required');
		if($this->form_validation->run())
		  {
			$pass=$this->input->post("password");
			$encpass2=$this->Mainmodel->encpass($pass);
			
			  $a=array("first_name"=>$this->input->post("first_name"),
			  "last_name"=>$this->input->post("last_name"),
			  "address"=>$this->input->post("address"),
			  "district"=>$this->input->post("district"),
			  "pincode"=>$this->input->post("pincode"),
			  "phoneno"=>$this->input->post("phoneno"),
			  "dob"=>$this->input->post("dob"),
			  "gender"=>$this->input->post("gender"),
			  "education"=>$this->input->post("education"));
		
			  $b=array("email"=>$this->input->post("email"),
			 "password"=>$encpass2,"usertype"=>'1');
				 
			     $this->Mainmodel->regt($a,$b);
			     redirect(base_url().'Program/regform');

		  }
	}
	public function table1()
	{
		$this->load->model('Mainmodel');
		$data['n']=$this->Mainmodel->view2();
		$this->load->view('reg_table',$data);
	}
	
	
	public function approve2()
	{
		$this->load->model('Mainmodel');
		$id=$this->uri->segment(3);
		$this->Mainmodel->approve2($id);
		redirect('Program/table1','refresh');
	}
	public function reject2()
	{
		$this->load->model('Mainmodel');
		$id=$this->uri->segment(3);
		$this->Mainmodel->reject2($id);
		redirect('Program/table1','refresh');
	}
	public function regform1()
	{
		$this->load->view('reg_teacher');
	}
	public function reg2()
	{
		$this->load->library('form_validation');
		$this->load->model('Mainmodel');
		$this->form_validation->set_rules("name","name",'required');		
		$this->form_validation->set_rules("address","address",'required');	
		$this->form_validation->set_rules("district","district",'required');
		$this->form_validation->set_rules("pincode","pincode",'required');	
		$this->form_validation->set_rules("phoneno","phoneno",'required');	
		$this->form_validation->set_rules("gender","gender",'required');
		$this->form_validation->set_rules("age","age",'required');
		$this->form_validation->set_rules("subject","subject",'required');	
		$this->form_validation->set_rules("email","email",'required');
		$this->form_validation->set_rules("password","password",'required');
		if($this->form_validation->run())
		  {
			$pass=$this->input->post("password");
			$encpass3=$this->Mainmodel->encpass3($pass);
			
			  $a=array("name"=>$this->input->post("name"),
			  "address"=>$this->input->post("address"),
			  "district"=>$this->input->post("district"),
			  "pincode"=>$this->input->post("pincode"),
			  "phoneno"=>$this->input->post("phoneno"),
			  "gender"=>$this->input->post("gender"),
			  "age"=>$this->input->post("age"),
			  "subject"=>$this->input->post("subject"));
		
			  $b=array("email"=>$this->input->post("email"),"password"=>$encpass3,"status"=>'1',"usertype"=>'0');
				 
			     $this->Mainmodel->regt1($a,$b);
			     redirect(base_url().'Program/page_view');

		  }
		}
		public function submit1()
		{
			$this->load->view('login_form');
			
		}
		public function pass1()
		{
			$this->load->library('form_validation');
			$this->form_validation->set_rules("email","email",'required');
			$this->form_validation->set_rules("password","password",'required');
			if($this->form_validation->run())
			  {
				$this->load->model('Mainmodel');
				$email=$this->input->post("email");
				$password=$this->input->post("password");
				$result=$this->Mainmodel->selectpass1($email,$password);
				//echo"$result";exit;
				if($result)
				{
					$id=$this->Mainmodel->getuserid1($email);
					$user=$this->Mainmodel->getuser1($id);
					$this->load->library(array('session'));
					$this->session->set_userdata(array('loginid'=>(int)$user->loginid,'status'=>$user->status,
														'usertype'=>$user->usertype));
					if($_SESSION['status']=='1' && $_SESSION['usertype']=='0')
					 {
						redirect('Program/tr_home','refresh');
					 }
					 else if($_SESSION['status']=='1' && $_SESSION['usertype']=='1')
					 {
                         redirect('Program/stud_home','refresh');
					 }
					 else
					 {
						 echo "waiting for approval";
					 }
				}
				else
				{
					echo "invalid user";
				}
			}
			
			else
			{
				redirect(base_url().'program/submit1');
			}
		}
	
	public function view4()
	{
	 $this->load->model('Mainmodel');
	 $id=$this->session->loginid;
	 //echo $id;
	 $data['d']=$this->Mainmodel->view4($id);
	 $this->load->view("reg_update",$data);
	}
	
	public function update1()
	{
		$a=array("first_name"=>$this->input->post("fname"),
		"last_name"=>$this->input->post("lname"),
		"address"=>$this->input->post("address"),
		"district"=>$this->input->post("district"),
		"pincode"=>$this->input->post("pincode"),
		"phoneno"=>$this->input->post("phoneno"),
		"dob"=>$this->input->post("dob"),
		"gender"=>$this->input->post("gender"),
		"education"=>$this->input->post("education"));
		$b=array("email"=>$this->input->post("email"));
		$id=$this->session->loginid;
		$this->load->model('Mainmodel');
		if($this->input->post('update'))
 			{
     		$this->Mainmodel->updation($a,$b,$id);
     		redirect('Program/stud_home','refresh');
 			}
	}
	public function not()
		{
			$this->load->view('reg_notification');
			
		}
	public function reg3()
		{
			
			$this->load->model('Mainmodel');
			$this->load->library('form_validation');
			$this->form_validation->set_rules("notification","not",'required');
			if($this->form_validation->run())
			  {
				$id=$this->session->loginid;
				$this->load->model('Mainmodel');
				$a=array("notification"=>$this->input->post("notification"),
				"currentdate"=>date('y-m-d'),
				"loginid"=>$id);
				$this->Mainmodel->regt3($a,$id);
			    redirect(base_url().'Program/delete1');

			  }
			}
	
	public function reg4()
	{
	 $this->load->model('Mainmodel');
	 $data['n']=$this->Mainmodel->view5();
	 $this->load->view("not_table",$data);
	} 
	public function delete1()
	{
		$this->load->model('Mainmodel');
		$id=$this->uri->segment(3);
		$this->Mainmodel->delete1($id);
		redirect('program/reg4','refresh');

	}   
	public function page_view()
		{
			$this->load->view('viewpage');
			
		}
		public function stud_home()
		{
			$this->load->view('stud_home');
			
		}
		public function tr_home()
		{
			$this->load->view('tr_home');
			
		}
}