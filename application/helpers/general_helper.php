<?php
class my_general{
	public $ci;
	public function __construct(){
		$this->ci=&get_instance();
	}
	public function get_ci(){
		return $this->ci;
	}
}

function RandomNameFile(){
	$result='';
	for($a=1;$a<10;$a++){ // จำนวนรอบที่ต้องการทดสอบ หรือ สุ่ม
		$number='0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz'; // ตัวแปร ที่จะเอาไปสุ่ม
		for($i=1;$i<10;$i++){ // จำนวนหลักที่ต้องการสามารถเปลี่ยนได้ตามใจชอบนะครับ จาก 5 เป็น 3 หรือ 6 หรือ 10 เป็นต้น
			$random=rand(0,strlen($number)-1); //สุ่มตัวเลข
				
			$cut_txt=substr($number,$random,1); //ตัดตัวเลข หรือ ตัวอักษรจากตำแหน่งที่สุ่มได้มา 1 ตัว
			$result.=substr($number,$random,1); // เก็บค่าที่ตัดมาแล้วใส่ตัวแปร
			$number=str_replace($cut_txt,'',$number); // ลบ หรือ แทนที่ตัวอักษร หรือ ตัวเลขนั้นด้วยค่า ว่าง
		}
		if($a<10)
			$result=''; // ล้างค่าตัวแปรออก เพื่อรับค่าใหม่ในรอบต่อไป
	}
	return $result;
}

function RandomNameFileEncode(){
	return str_replace(".",rand(),uniqid(md5(rand()),true));
}

function rowArray($rows){
	if(sizeof($rows)>0)
		return $rows[0];
	else
		return array();
}
function dieArray($arr=''){
	echo '<pre>';
	die(print_r($arr));
	echo '</pre>';
}
function dieFont($str=''){
	die('<h1>'.$str.'</h1>');
}

function RandomString()
{
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
   	$randstring = '';
    for ($i = 0; $i < 10; $i++) {
       	$randstring = $characters[rand(0, strlen($characters))];
    }
    return $randstring;
}
function setZeroString($string,$num){
	if($string=='')return '';
	$str='';
	for($i=0;$i<($num-strlen($string));$i++){
		$str.='0';
	}
	return $str.$string;
}
function dateChange($date='',$method=0){
	if($date=='')
		return '';
	if($method==0){
		$arr=explode('/',$date);
		return ($arr[2]-543).'-'.$arr[1].'-'.$arr[0];
	}else if($method==2){
		$arr=explode('/',$date);
		return $arr[2].'-'.$arr[1].'-'.$arr[0];
	}
	else{
		$arr=explode('-',$date);
		if($arr[0]=='0000'||$arr[1]=='00'||$arr[2]=='00')
			return '';
		return $arr[2].'/'.$arr[1].'/'.($arr[0]+543);
	}
}
function formatDateThai($date){
	$arr=explode('-',$date);
	if ($date=='') {
		return '';
	}
	if($arr[0]=='0000'||$arr[1]=='00'||$arr[2]=='00')
		return '';
	$thai_month_arr=array(
	 "0"=>"",
	 "1"=>"มกราคม",
	 "2"=>"กุมภาพันธ์",
	 "3"=>"มีนาคม",
	 "4"=>"เมษายน",
	 "5"=>"พฤษภาคม",
	 "6"=>"มิถุนายน", 
	 "7"=>"กรกฎาคม",
	 "8"=>"สิงหาคม",
	 "9"=>"กันยายน",
	 "10"=>"ตุลาคม",
	 "11"=>"พฤศจิกายน",
	 "12"=>"ธันวาคม"     
	);
	$arr=explode('-',$date);
	return (int)$arr[2].' '.$thai_month_arr[(int)$arr[1]].' '.($arr[0]+543);
}
function formatDateThaiFromDatatime($datetime){
	$arr=explode(' ',$datetime);
	return formatDateThai($arr[0]).' '.$arr[1];
}

function formatDateUni($date){
	$arr=explode('-',$date);
	if ($date=='') {
		return '';
	}
	if($arr[0]=='0000'||$arr[1]=='00'||$arr[2]=='00')
		return '';
	$ui_month_arr=array(
		"0"=>'',
		"1"=>'January',
		"2"=>'February',
		"3"=>'March',
		"4"=>'April',
		"5"=>'May',
		"6"=>'June',
		"7"=>'July',
		"8"=>'August',
		"9"=>'September',
		"10"=>'October',
		"11"=>'November',
		"12"=>'December',
	);
	$arr=explode('-',$date);
	return (int)$arr[2].' '.$ui_month_arr[(int)$arr[1]].' '.$arr[0];
}
function formatDateUniFromDatatime($datetime){
	$arr=explode(' ',$datetime);
	return formatDateThai($arr[0]).' '.$arr[1];
}

function formatDateUniMonthThai($date){
	$arr=explode('-',$date);
	if ($date=='') {
		return '';
	}
	if($arr[0]=='0000'||$arr[1]=='00'||$arr[2]=='00')
		return '';
	$ui_month_arr=array(
		"0"=>'',
		"1"=>'มกราคม',
		"2"=>'กุมภาพันธ์',
		"3"=>'มีนาคม',
		"4"=>'เมษายน',
		"5"=>'พฤษภาคม',
		"6"=>'มิถุนายน',
		"7"=>'กรกฎาคม',
		"8"=>'สิงหาคม',
		"9"=>'กันยายน',
		"10"=>'ตุลาคม',
		"11"=>'พฤศจิกายน',
		"12"=>'ธันวาคม',
	);
	$arr=explode('-',$date);
	return (int)$arr[2].' '.$ui_month_arr[(int)$arr[1]].' '.$arr[0];
}
function formatDateUniMonthThaiFromDatatime($datetime){
	$arr=explode(' ',$datetime);
	return formatDateUniMonthThai($arr[0]).' '.$arr[1];
}

function formatDateThai_WithOutDayNumber($date){
	$thai_month_arr=array(
	 "0"=>"",
	 "1"=>"มกราคม",
	 "2"=>"กุมภาพันธ์",
	 "3"=>"มีนาคม",
	 "4"=>"เมษายน",
	 "5"=>"พฤษภาคม",
	 "6"=>"มิถุนายน", 
	 "7"=>"กรกฎาคม",
	 "8"=>"สิงหาคม",
	 "9"=>"กันยายน",
	 "10"=>"ตุลาคม",
	 "11"=>"พฤศจิกายน",
	 "12"=>"ธันวาคม"     
	);
	$arr=explode('-',$date);
	return $thai_month_arr[(int)$arr[1]].' '.($arr[0]+543);
}

function formatDateThai_NextMonth($date){
	$thai_month_arr=array(
	 "0"=>"",
	 "1"=>"กุมภาพันธ์",
	 "2"=>"มีนาคม",
	 "3"=>"เมษายน",
	 "4"=>"พฤษภาคม",
	 "5"=>"มิถุนายน",
	 "6"=>"กรกฎาคม", 
	 "7"=>"สิงหาคม",
	 "8"=>"กันยายน",
	 "9"=>"ตุลาคม",
	 "10"=>"พฤศจิกายน",
	 "11"=>"ธันวาคม",
	 "12"=>"มกราคม"     
	);
	$arr=explode('-',$date);
	if($arr[1]==12)
		$arr[0] += 1;
	return $thai_month_arr[(int)$arr[1]].' '.($arr[0]+543);
}

function formatDateThai_MonthOnly($date){
	$thai_month_arr=array(
	 "0"=>"",
	 "1"=>"มกราคม",
	 "2"=>"กุมภาพันธ์",
	 "3"=>"มีนาคม",
	 "4"=>"เมษายน",
	 "5"=>"พฤษภาคม",
	 "6"=>"มิถุนายน", 
	 "7"=>"กรกฎาคม",
	 "8"=>"สิงหาคม",
	 "9"=>"กันยายน",
	 "10"=>"ตุลาคม",
	 "11"=>"พฤศจิกายน",
	 "12"=>"ธันวาคม"     
	);
	$arr=explode('-',$date);
	if($arr[1]==12)
		$arr[0] += 1;
	return $thai_month_arr[(int)$arr[1]];
}

function set_session($session_name='',$data=''){
	$obj=new my_general();
	return $this->get_ci()->session->set_userdata($session_name,$data);
}

function get_session($session_name=''){
	$obj=new my_general();
	return $obj->get_ci()->session->userdata($session_name);
}
function get_inpost($post_name=''){
	$obj=new my_general();
	return $obj->get_ci()->input->post($post_name);
}
function get_inget($get_name=''){
	$obj=new my_general();
	return $obj->get_ci()->input->get($get_name);
}
function uri_seg($segment_num){
	$obj=new my_general();
	return $obj->get_ci()->uri->segment($segment_num);
}
?>