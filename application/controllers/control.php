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
		if(get_inpost('bt_submit')==''){
			$data['title']="Website Setting";
			$data['site']=rowArray($this->common_model->getTable('sip_webdetail'));
			$data['content_view']="content/webset";
			$this->load->view('index_page',$data);		
		}else if(get_inpost('bt_submit')!=''){
			$this->load->library('form_validation');
			$frm=$this->form_validation;
			$arr=array(
					array('field'=>'WD_BGcolor',
						  'label'=>'Background Color',
						  'rules'=>'trim',
					),
					array('field'=>'WD_Name',
						  'label'=>'Website Name',
						  'rules'=>'trim',
					),
					array('field'=>'WD_NameCompany',
						  'label'=>'Company Name',
						  'rules'=>'trim',
					),					   
					array('field'=>'WD_Address',
						  'label'=>'Address',
						  'rules'=>'trim',
					),	
					array('field'=>'WD_Email',
						  'label'=>'Email',
						  'rules'=>'required|valid_email',
					),	
					array('field'=>'WD_Tel',
						  'label'=>'Tel',
						  'rules'=>'trim',
					),	
					array('field'=>'WD_Fax',
						  'label'=>'Fax',
						  'rules'=>'trim',
					),	
					array('field'=>'WD_Title',
						  'label'=>'Title/Paragraph',
						  'rules'=>'trim',
					),	
					array('field'=>'WD_Descrip',
						  'label'=>'Description',
						  'rules'=>'trim',
					),					
					array('field'=>'WD_Keyword',
						  'label'=>'Keyword',
						  'rules'=>'trim',
					),
					array('field'=>'WD_Stats',
						  'label'=>'Stats Code',
						  'rules'=>'trim',
					),
					array('field'=>'WD_FbFanpage',
						  'label'=>'FbFanpage Url',
						  'rules'=>'trim',
					),
					array('field'=>'WD_EmbedVDO',
						  'label'=>'EmbedVDO Code',
						  'rules'=>'trim',
					),
					array('field'=>'WD_Latitude',
						  'label'=>'Latitude',
						  'rules'=>'trim',
					),
					array('field'=>'WD_Longjitude',
						  'label'=>'Longjitude',
						  'rules'=>'trim',
					),
			);
			$frm->set_rules($arr);
			$frm->set_message("valid_email","รูปแบบอีเมล์ต้องถูกต้อง");
			if($frm->run()){
					$data=array(
						'WD_BGcolor'=>trim(get_inpost('WD_BGcolor')),
						'WD_Name'=>trim(get_inpost('WD_Name')),
						'WD_NameCompany'=>trim(get_inpost('WD_NameCompany')),
						'WD_Address'=>trim(get_inpost('WD_Address')),
						'WD_Email'=>trim(get_inpost('WD_Email')),
						'WD_Tel'=>trim(get_inpost('WD_Tel')),
						'WD_Fax'=>trim(get_inpost('WD_Fax')),
						'WD_Title'=>trim(get_inpost('WD_Title')),
						'WD_Descrip'=>trim(get_inpost('WD_Descrip')),
						'WD_Keyword'=>trim(get_inpost('WD_Keyword')),
						'WD_Stats'=>trim(get_inpost('WD_Stats')),
						'WD_FbFanpage'=>trim(get_inpost('WD_FbFanpage')),
						'WD_EmbedVDO'=>trim(get_inpost('WD_EmbedVDO')),
						'WD_Latitude'=>trim(get_inpost('WD_Latitude')),
						'WD_Longjitude'=>trim(get_inpost('WD_Longjitude')),
					);
					$old_data=rowArray($this->common_model->getTable("sip_webdetail"));
					
					if($_FILES['WD_Logo']['name']!=''){

						$config['upload_path'] ="./assets/img/";
						$config['allowed_types'] = 'gif|jpg|png';
						$config['file_name'] = RandomNameFileEncode();

						$this->upload->initialize($config);
						if($this->upload->do_upload('WD_Logo'))
						{
						    $path="./assets/img/{$old_data['WD_Logo']}";
						    @unlink($path);
						    $data_upload = $this->upload->data();
						    $data['WD_Logo']=$data_upload['file_name'];
						}
					}
					if($_FILES['WD_Icon']['name']!=''){

						$config['upload_path'] ="./assets/img/";
						$config['allowed_types'] = 'gif|jpg|png';
						$config['file_name'] = RandomNameFileEncode();

						$this->upload->initialize($config);
						if($this->upload->do_upload('WD_Icon'))
						{
						    $path="./assets/img/{$old_data['WD_Icon']}";
						    @unlink($path);
						    $data_upload = $this->upload->data();
						    $data['WD_Icon']=$data_upload['file_name'];
						}
					}					
					if($_FILES['WD_Background']['name']!=''){

						$config['upload_path'] ="./assets/img/";
						$config['allowed_types'] = 'gif|jpg|png';
						$config['file_name'] = RandomNameFileEncode();

						$this->upload->initialize($config);
						if($this->upload->do_upload('WD_Background'))
						{
						    $path="./assets/img/{$old_data['WD_Background']}";
						    @unlink($path);
						    $data_upload = $this->upload->data();
						    $data['WD_Background']=$data_upload['file_name'];
						}
					}						
					if($_FILES['WD_TitleImgLogin']['name']!=''){

						$config['upload_path'] ="./assets/img/";
						$config['allowed_types'] = 'gif|jpg|png';
						$config['file_name'] = RandomNameFileEncode();

						$this->upload->initialize($config);
						if($this->upload->do_upload('WD_TitleImgLogin'))
						{
						    $path="./assets/img/{$old_data['WD_TitleImgLogin']}";
						    @unlink($path);
						    $data_upload = $this->upload->data();
						    $data['WD_TitleImgLogin']=$data_upload['file_name'];
						}
					}						
					if($_FILES['WD_TitleImgLogin']['name']!=''){

						$config['upload_path'] ="./assets/img/";
						$config['allowed_types'] = 'gif|jpg|png';
						$config['file_name'] = RandomNameFileEncode();

						$this->upload->initialize($config);
						if($this->upload->do_upload('WD_TitleImgLogin'))
						{
						    $path="./assets/img/{$old_data['WD_TitleImgLogin']}";
						    @unlink($path);
						    $data_upload = $this->upload->data();
						    $data['WD_TitleImgLogin']=$data_upload['file_name'];
						}
					}					
					if($_FILES['WD_ImgMap']['name']!=''){

						$config['upload_path'] ="./assets/img/";
						$config['allowed_types'] = 'gif|jpg|png';
						$config['file_name'] = RandomNameFileEncode();

						$this->upload->initialize($config);
						if($this->upload->do_upload('WD_ImgMap'))
						{
						    $path="./assets/img/{$old_data['WD_TitWD_ImgMapleImgLogin']}";
						    @unlink($path);
						    $data_upload = $this->upload->data();
						    $data['WD_ImgMap']=$data_upload['file_name'];
						}
					}
					$this->common_model->update('sip_webdetail', $data,array('WD_ID'=>'1'));
					redirect('control/website_setting','refresh');					
			}else{
					$old_data=rowArray($this->common_model->getTable("sip_webdetail"));
					$data=array(
						'WD_BGcolor'=>trim(set_value('WD_BGcolor')),
						'WD_Name'=>trim(set_value('WD_Name')),
						'WD_NameCompany'=>trim(set_value('WD_NameCompany')),
						'WD_Address'=>trim(set_value('WD_Address')),
						'WD_Email'=>trim(set_value('WD_Email')),
						'WD_Tel'=>trim(set_value('WD_Tel')),
						'WD_Fax'=>trim(set_value('WD_Fax')),
						'WD_Title'=>trim(set_value('WD_Title')),
						'WD_Descrip'=>trim(set_value('WD_Descrip')),
						'WD_Keyword'=>trim(set_value('WD_Keyword')),
						'WD_Stats'=>trim(set_value('WD_Stats')),
						'WD_FbFanpage'=>trim(set_value('WD_FbFanpage')),
						'WD_EmbedVDO'=>trim(set_value('WD_EmbedVDO')),
						'WD_Latitude'=>trim(set_value('WD_Latitude')),
						'WD_Longjitude'=>trim(set_value('WD_Longjitude')),
					);
					
					$data['WD_Logo']=$old_data['WD_Logo'];
					$data['WD_Icon']=$old_data['WD_Icon'];
					$data['WD_Background']=$old_data['WD_Background'];
					$data['WD_TitleImgLogin']=$old_data['WD_TitleImgLogin'];
					$data['WD_ImgMap']=$old_data['WD_ImgMap'];

					$data['title']='Fail Update! Website Setting';
					$data['site']=$data;
					$data['content_view']="content/webset";
					$this->load->view('index_page',$data);	
			}
		}
	}
	public function package_info()
	{
		$this->admin_model->AccessLevel(array('0'));
		if(uri_seg(3)==''){
			$data['title']='Package Info';
			$data['packages']=$this->package_model->getAllpackage();
			$data['content_view']="content/package";
			$this->load->view('index_page',$data);
		}else if(uri_seg(3)=='add' && get_inpost('bt_submit')==''){
			$data=array(
					'name'=>'',
					'detail'=>'',
					'amount'=>'',
					'status'=>'1',
			);
			$data['title']='Add Package Info';
			$data['package']=$data;
			$data['content_view']="content/package";
			$this->load->view('index_page',$data);	
		}else if(uri_seg(3)=='add' && get_inpost('bt_submit')!=''){
			$this->load->library('form_validation');
			$frm=$this->form_validation;
			$arr=array(
					array('field'=>'name',
						  'label'=>'package Name',
						  'rules'=>'required',
					),
					array('field'=>'detail',
						  'label'=>'Detail',
						  'rules'=>'trim',
					),				   
					array('field'=>'amount',
						  'label'=>'Amount',
						  'rules'=>'numeric',
					),
					array('field'=>'status',
						  'label'=>'Status',
						  'rules'=>'required',
					),		
			);
			$frm->set_rules($arr);
			
			$frm->set_message("required","กรุณากรอกข้อมูล %s");
			$frm->set_message("numeric","%s กรุณาป้อนข้อมูลที่เป็นเลข");
			
			if($frm->run()){
					$data=array(
						'name'=>trim(get_inpost('name')),
						'detail'=>trim(get_inpost('detail')),
						'user_add'=>get_session('user_id'),
						'amount'=>trim(get_inpost('amount')),
						'status'=>trim(get_inpost('status')),
					);
					$this->common_model->insert('sip_packages',$data);
					redirect('control/package_info','refresh');					
			}else{
					$data=array(
						'name'=>trim(set_value('name')),
						'detail'=>trim(set_value('detail')),
						'amount'=>trim(set_value('amount')),
						'status'=>trim(set_value('status')),
					);
					
					$data['title']='Error! Add Package Info';
					$data['package']=$data;
					$data['content_view']="content/package";
					$this->load->view('index_page',$data);	
			}
		}else if(uri_seg(3)=='edit' && get_inpost('bt_submit')==''){
			$data['title']='Edit Package Info';
			$data['package']=$this->package_model->getOncepackage(uri_seg(3));
			if(count($data['package'])<1)
				redirect('control/package_info','refresh');
				
			$data['content_view']="content/package";
			$this->load->view('index_page',$data);	
		}else if(uri_seg(3)=='edit' && get_inpost('bt_submit')!=''){
			
			$this->load->library('form_validation');
			$frm=$this->form_validation;
			$arr=array(
					array('field'=>'name',
						  'label'=>'package Name',
						  'rules'=>'required',
					),
					array('field'=>'detail',
						  'label'=>'Detail',
						  'rules'=>'trim',
					),				   
					array('field'=>'amount',
						  'label'=>'Amount',
						  'rules'=>'numeric',
					),
					array('field'=>'status',
						  'label'=>'Status',
						  'rules'=>'required',
					),		
			);
			$frm->set_rules($arr);
			
			$frm->set_message("required","กรุณากรอกข้อมูล %s");
			$frm->set_message("numeric","%s กรุณาป้อนข้อมูลที่เป็นเลข");
			
			if($frm->run()){
					$data=array(
						'name'=>trim(get_inpost('name')),
						'detail'=>trim(get_inpost('detail')),
						'user_add'=>get_session('user_id'),
						'amount'=>trim(get_inpost('amount')),
						'status'=>trim(get_inpost('status')),
					);
					$this->common_model->update('sip_packages',$data,array("id"=>uri_seg(4)));
					redirect('control/package_info','refresh');					
			}else{
					$data=array(
						'name'=>trim(set_value('name')),
						'detail'=>trim(set_value('detail')),
						'amount'=>trim(set_value('amount')),
						'status'=>trim(set_value('status')),						
					);
					
					$data['title']='Error! Edit Package Info';
					$data['package']=$data;
					$data['content_view']="content/package";
					$this->load->view('index_page',$data);
			}
		}else if(uri_seg(3)=='del' && uri_seg(4)!=''){
			$this->common_model->update('sip_packages',array('status'=>'3'),array('id'=>uri_seg(4)));
			redirect('control/package_info','refresh');
		}
	}
	
	public function account_info()
	{
		$this->admin_model->AccessLevel(array('0'));
		if(uri_seg(3)==''){
			$data['title']='Account Info';
			$data['accounts']=$this->account_model->getAllaccount();
			$data['content_view']="content/account";
			$this->load->view('index_page',$data);
		}else if(uri_seg(3)=='add' && get_inpost('bt_submit')==''){
			$data=array(
					'ref'=>'',
					'name'=>'',
					'address'=>'',
					'tel'=>'',
					'web'=>'',
					'callcenter'=>'',
					'latitude'=>'',
					'longitude'=>'',
					'package'=>'',
					'sipserver'=>'',
					'user'=>'',
					'password'=>'',
					'email'=>'',
					'status'=>'1',
					'isactive'=>'1',		
			);
			$data['title']='Add Account Info';
			$data['account']=$data;
			$data['content_view']="content/account";
			$this->load->view('index_page',$data);	
		}else if(uri_seg(3)=='add' && get_inpost('bt_submit')!=''){
			$this->load->library('form_validation');
			$frm=$this->form_validation;
			
			$arr=array(
					array('field'=>'ref',
						  'label'=>'Ref',
						  'rules'=>'trim',
					),
					array('field'=>'name',
						  'label'=>'Account Name',
						  'rules'=>'required',
					),
					array('field'=>'address',
						  'label'=>'Address',
						  'rules'=>'trim',
					),				   
					array('field'=>'tel',
						  'label'=>'Tel',
						  'rules'=>'trim',
					),
					array('field'=>'web',
						  'label'=>'Web',
						  'rules'=>'trim',
					),
					array('field'=>'callcenter',
						  'label'=>'Callcenter',
						  'rules'=>'trim',
					),
					array('field'=>'latitude',
						  'label'=>'Latitude',
						  'rules'=>'trim',
					),
					array('field'=>'longitude',
						  'label'=>'Longitude',
						  'rules'=>'trim',
					),
					array('field'=>'package',
						  'label'=>'Package',
						  'rules'=>'required',
					),
					array('field'=>'sipserver',
						  'label'=>'Sipserver',
						  'rules'=>'required',
					),
					array('field'=>'user',
						  'label'=>'Username',
						  'rules'=>'required|callback_check_duplicate_user',
					),
					array('field'=>'password',
						  'label'=>'Password',
						  'rules'=>'required',
					),
					array('field'=>'email',
						  'label'=>'Email',
						  'rules'=>'required|valid_email',
					),
					array('field'=>'status',
						  'label'=>'Status',
						  'rules'=>'required',
					),	
					array('field'=>'isactive',
						  'label'=>'Isactive',
						  'rules'=>'required',
					),		
			);
			$frm->set_rules($arr);
			$frm->set_message("required","กรุณากรอกข้อมูล %s");
			$frm->set_message("numeric","%s กรุณาป้อนข้อมูลที่เป็นเลข");
			$frm->set_message("check_duplicate_user","เกิดข้อผิดพลาด! Username นี้มีอยู่แล้ว");
			$frm->set_message("valid_email","รูปแบบอีเมล์ต้องถูกต้อง");
			
			if($frm->run()){
				$this->db->trans_strict(true);
				$this->db->trans_begin();
		
					$data=array(
						'ref'=>trim(get_inpost('ref')),
						'name'=>trim(get_inpost('name')),
						'address'=>trim(get_inpost('address')),
						'tel'=>trim(get_inpost('tel')),
						'web'=>trim(get_inpost('web')),
						'callcenter'=>trim(get_inpost('callcenter')),
						'latitude'=>trim(get_inpost('latitude')),
						'longitude'=>trim(get_inpost('longitude')),
						'package'=>trim(get_inpost('package')),
						'sipserver'=>trim(get_inpost('sipserver')),
						'email'=>trim(get_inpost('email')),
						'status'=>trim(get_inpost('status')),
						'isactive'=>trim(get_inpost('isactive')),
						'user_add'=>get_session('user_id'),
					);
					$id=$this->common_model->insert('sip_accounts',$data);
			
					$data=array(
						'user'=>trim(get_inpost('user')),
						'password'=>trim(get_inpost('password')),
						'account'=>$id,
					);
					$this->common_model->insert('sip_login',$data);		
					
					$data=array();	
					$maxid=$this->account_model->getMaxidAccount();
					$temp=$this->package_model->getOncePackage(trim(get_inpost('package')));
					$amount=(int)$temp['amount'];
					for($i=0;$i<$amount;$i++){
						$sipname=(333*10000)+$id+1+$i+$maxid;
						$data[]=array(
							'account'=>$id,
							'sipname'=>$sipname,
							'password'=>"SIP".trim(get_inpost('user')).$sipname,
							'isactive'=>'0',				
						);	
					}
					$this->common_model->insert_batch('sip_users',$data);
					
				if($this->db->trans_status() === FALSE)
				{
					$this->db->trans_rollback();
					return false;
					dieFont('data processing error!');
				}else{
					$this->db->trans_commit();
					redirect('control/account_info','refresh');	
				}	
								
			}else{
					$data=array(
						'ref'=>trim(set_value('ref')),
						'name'=>trim(set_value('name')),
						'address'=>trim(set_value('address')),
						'tel'=>trim(set_value('tel')),
						'web'=>trim(set_value('web')),
						'callcenter'=>trim(set_value('callcenter')),
						'latitude'=>trim(set_value('latitude')),
						'longitude'=>trim(set_value('longitude')),
						'package'=>trim(set_value('package')),
						'sipserver'=>trim(set_value('sipserver')),
						'email'=>trim(set_value('email')),
						'status'=>trim(set_value('status')),
						'isactive'=>trim(set_value('isactive')),
						'user'=>trim(set_value('user')),
						'password'=>trim(set_value('password')),
						'email'=>trim(set_value('email')),
					);				
					$data['title']='Error! Add Account Info';
					$data['account']=$data;
					$data['content_view']="content/account";
					$this->load->view('index_page',$data);	
			}
		}else if(uri_seg(3)=='edit' && get_inpost('bt_submit')==''){
			$data['title']='Edit Account Info';
			$data['account']=$this->account_model->getOnceaccount(uri_seg(4));
			
			if(count($data['account'])<1)
				redirect('control/account_info','refresh');
				
			$data['content_view']="content/account";
			$this->load->view('index_page',$data);	
		}else if(uri_seg(3)=='edit' && get_inpost('bt_submit')!=''){
			$this->load->library('form_validation');
			$frm=$this->form_validation;
			$arr=array(
					array('field'=>'ref',
						  'label'=>'Ref',
						  'rules'=>'trim',
					),
					array('field'=>'name',
						  'label'=>'Account Name',
						  'rules'=>'required',
					),
					array('field'=>'address',
						  'label'=>'Address',
						  'rules'=>'trim',
					),				   
					array('field'=>'tel',
						  'label'=>'Tel',
						  'rules'=>'trim',
					),
					array('field'=>'web',
						  'label'=>'Web',
						  'rules'=>'trim',
					),
					array('field'=>'callcenter',
						  'label'=>'Callcenter',
						  'rules'=>'trim',
					),
					array('field'=>'latitude',
						  'label'=>'Latitude',
						  'rules'=>'trim',
					),
					array('field'=>'longitude',
						  'label'=>'Longitude',
						  'rules'=>'trim',
					),
					array('field'=>'sipserver',
						  'label'=>'Sipserver',
						  'rules'=>'required',
					),
					array('field'=>'password',
						  'label'=>'Password',
						  'rules'=>'required',
					),
					array('field'=>'email',
						  'label'=>'Email',
						  'rules'=>'required|valid_email',
					),
					array('field'=>'status',
						  'label'=>'Status',
						  'rules'=>'required',
					),	
					array('field'=>'isactive',
						  'label'=>'Isactive',
						  'rules'=>'required',
					),		
			);
			$frm->set_rules($arr);
			$frm->set_message("required","กรุณากรอกข้อมูล %s");
			$frm->set_message("numeric","%s กรุณาป้อนข้อมูลที่เป็นเลข");
			$frm->set_message("check_duplicate_user","เกิดข้อผิดพลาด! Username นี้มีอยู่แล้ว");
			$frm->set_message("valid_email","รูปแบบอีเมล์ต้องถูกต้อง");
			
			if($frm->run()){
					$data=array(
						'ref'=>trim(get_inpost('ref')),
						'name'=>trim(get_inpost('name')),
						'address'=>trim(get_inpost('address')),
						'tel'=>trim(get_inpost('tel')),
						'web'=>trim(get_inpost('web')),
						'callcenter'=>trim(get_inpost('callcenter')),
						'latitude'=>trim(get_inpost('latitude')),
						'longitude'=>trim(get_inpost('longitude')),
						'sipserver'=>trim(get_inpost('sipserver')),
						'email'=>trim(get_inpost('email')),
						'status'=>trim(get_inpost('status')),
						'isactive'=>trim(get_inpost('isactive')),
					);
					$this->common_model->update('sip_accounts',$data,array("id"=>uri_seg(4)));
					
					$data=array(
						'password'=>trim(get_inpost('password')),
					);
					$this->common_model->update('sip_login',$data,array("id"=>uri_seg(4)));	
						
					redirect('control/account_info','refresh');					
			}else{
					$data=array(
						'ref'=>trim(set_value('ref')),
						'name'=>trim(set_value('name')),
						'address'=>trim(set_value('address')),
						'tel'=>trim(set_value('tel')),
						'web'=>trim(set_value('web')),
						'callcenter'=>trim(set_value('callcenter')),
						'latitude'=>trim(set_value('latitude')),
						'longitude'=>trim(set_value('longitude')),
						'sipserver'=>trim(set_value('sipserver')),
						'status'=>trim(set_value('status')),
						'isactive'=>trim(set_value('isactive')),
						'password'=>trim(set_value('password')),
						'email'=>trim(set_value('email')),
					);	
					
					$data['title']='Edit Fail! Account Info';
					$data['account']=$data;
					$data['content_view']="content/account";
					$this->load->view('index_page',$data);
			}
		}else if(uri_seg(3)=='del' && uri_seg(4)!=''){
			$this->common_model->update('sip_accounts',array('status'=>'3'),array('id'=>uri_seg(4)));
			redirect('control/account_info','refresh');
		}
	}
	public function check_duplicate_user($user){
		$temp=rowArray($this->common_model->get_where_custom_field("sip_login",'user',$user,'user'));
		if(isset($temp['user']))
			return false;
		else
			return true;
	}

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */