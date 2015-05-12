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
        if(uri_seg(4)=='')
            return false;
        else{
            return rowArray($this->common_model->get_where_custom('sip_accounts','id',$id));
        }
    }

}

?>