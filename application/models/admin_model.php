<?php
class admin_model extends CI_Model {

    public function __construct(){
        parent::__construct();
		//$this->load->driver('cache');
    }
    public function getLogin($user_id='',$user_pass=''){
        $row=$this->common_model->get_where_custom_and('sip_login',array('user'=>mysql_real_escape_string($user_id),'password'=>mysql_real_escape_string($user_pass)));
        return $row;
    }
    public function getLoginMD5($user_id='',$user_pass=''){
         $row=$this->common_model->get_where_custom_and('sip_login',array('user'=>mysql_real_escape_string($user_id),'password'=>md5(mysql_real_escape_string($user_pass))));
        return $row;
    }
    public function getLoginEncrypt($user_id='',$user_pass=''){
        $row=$this->common_model->get_where_custom('sip_login','user',mysql_real_escape_string($user_id));
        if(count($row)>0){
            $pass=$this->encrypt->decode($row[0]['password']);
            if(mysql_real_escape_string($user_pass)==$pass)
                return $row;
        }else
            return array();
    }
    public function AfterDelete_DeleteImage($table='',$field_name='',$value='',$field_delete='',$path=''){
        $rows=$this->common_model->get_where_custom_field($table,$field_name,$value,$field_delete);
        foreach($rows as $row){
            @unlink($path.$row[$field_delete]);
        } 
    }
    
    public function AccessLevel($levels=array()){
        if($this->session->userdata('account_id')==''){
            redirect('login','refresh');
            exit();
        }
        else {
            foreach($levels as $level){
                if($level!=$this->session->userdata('account_id')){
                    redirect('login','refresh');
                    exit();
                }
            }
        }   
    }

}

?>