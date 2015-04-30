<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Control extends CI_Controller {

	function __construct(){
		parent::__construct();
	}

	public function index()
	{
		$this->admin_model->AccessLevel();
		$row=rowArray($this->common_model->getTable('sip_webdetail'));
		$data['title']=$row['WD_Title'].'nvkhotel system(Main)';
		$data['content_view']="content/main";
		$this->load->view('index_page',$data);
	}
	public function website_setting()
	{
		$this->admin_model->AccessLevel(array('0'));
		$data['title']='Website Setting';

		if(get_inpost('bt_submit')!=''){
			
		}else{
			$data['site']=rowArray($this->common_model->getTable('sip_webdetail'));
			$data['content_view']="content/webset";
		}

		$this->load->view('index_page',$data);
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */