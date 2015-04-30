<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Member_access extends CI_Controller {
	function __construct()
	{
		parent::__construct();
	}
	public function index()
	{
		$this->isLogin();
	}

	public function isLogin(){
		if($this->session->userdata('account_id')!=""){		
			redirect('control','refresh');
		} else {
			$row=rowArray($this->common_model->getTable('sip_webdetail'));
			$data['title']=$row['WD_Name'].'(Login)';
			$this->load->view('login',$data);
		}
	}

	public function login(){
		$row=rowArray($this->admin_model->getLogin($this->input->post('user_id'),$this->input->post('user_pass'))); //login data
		if(isset($row['id'])){
			$row1=rowArray($this->common_model->get_where_custom('sip_accounts','id',$row['account'])); //acount data
			//$row2=rowArray($this->common_model->get_where_custom('sip_status','id',$row1['status'])); //status data
			if((@$row1['status']=='1'&&@$row1['isactive']!='2')||$row['account']=='0'){
				$this->session->set_userdata('user_id',$row['id']);
				$this->session->set_userdata('user',$row['user']);

				if($row['account']=='0'){
					$this->session->set_userdata('account_id','0');
					$this->session->set_userdata('account_name',"ดูแลระบบ");
				}else{
					$this->session->set_userdata('account_id',$row1['id']);
					$this->session->set_userdata('account_name',$row1['name']);
				}
			}else{
				print("<script language='javascript'>alert('Please Contact Support!'); history.back();</script>");
				exit();
			}
		}else{
			print("<script language='javascript'>alert('Username or Password Invalid!'); history.back();</script>");
			exit();
		}
		redirect('member_access','refresh');
		//die(print_r($this->session->all_userdata()));
	}

	public function logout(){
		$this->session->sess_destroy();
		redirect('member_access','refresh');
	}

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */