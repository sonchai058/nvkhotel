<?php
class package_model extends CI_Model {

    public function __construct(){
        parent::__construct();
		//$this->load->driver('cache');
    }
    public function getAllPackage(){
        return $this->common_model->custom_query("select * from sip_packages where status = 1");
    }
    public function getOncePackage($id=''){
        if(uri_seg(4)=='')
            return false;
        else{
            return rowArray($this->common_model->get_where_custom('sip_packages','id',$id));
        }
    }
    public function getAllStatus(){
        return $this->common_model->getTable("sip_status");
    }
    public function getMemberAdd($id=''){
        if($id=='')
            return false;
        else{
            return rowArray($this->common_model->get_where_custom('sip_login','id',$id));
        }
    }
}

?>