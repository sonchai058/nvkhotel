<?php
class account_model extends CI_Model {

    public function __construct(){
        parent::__construct();
		//$this->load->driver('cache');
    }
    public function getAllaccount(){
        return $this->common_model->custom_query("select * from sip_accounts where status = 1");
    }
    public function getOnceAccount($id=''){
        if($id=='')
            return false;
        else{
            return rowArray($this->common_model->custom_query("select * from sip_accounts inner join sip_login where sip_accounts.id='".$id."'"));
        }
    }
    public function getUser($id=''){
        return rowArray($this->common_model->get_where_custom('sip_login','account',$id));
    }
    public function getMaxidAccount(){
        $row=rowArray($this->common_model->custom_query("select * from sip_users order by id DESC"));
        return $row['id'];
    }
}

?>