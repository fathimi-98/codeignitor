<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Exam1 extends CI_Controller {

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
    public function reg_comp()
    {
        $this->load->view('exam_view');
    }
    public function view()
	{
		$this->load->library('form_validation');
		$this->load->model('model1');
		$this->form_validation->set_rules("subject","subject",'required');
		$this->form_validation->set_rules("complaint","complaint",'required');
		if($this->form_validation->run())
		{
			$a=array("subject"=>$this->input->post("subject"),
			"complaint"=>$this->input->post("complaint")
			);
			$this->model1->comp($d);
			redirect("Exam1/reg_comp",'refresh');
		}
	}
}