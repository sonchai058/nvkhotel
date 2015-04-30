<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
<?php $site=rowArray($this->common_model->getTable('sip_webdetail'));?>
	<meta name="description" content="<?php echo $site['WD_Descrip'];?>">
	<meta name="keywords" content="<?php echo $site['WD_Keyword'];?>">
	<meta name="author" content="<?php echo $site['WD_Name'];?>">
    <link rel="shortcut icon" href="<?php echo base_url('assets/img/'.$site['WD_Icon']);?>" type="image/x-icon">
    <title><?php echo $title;?></title>
    
    <?php $this->load->file('assets/tools/tools_config.php');?>
</head>
<body class="container_background">
	<div class="title_names">
		<img src="<?php echo base_url('assets/img/'.$site['WD_TitleImgLogin']);?>" >			
	</div>
	<div class="login">
		<div class="title_login">
			Hotel Management System
		</div>
		<?php echo form_open('member_access/login',"id='formLogin'");?>
			<!-- <input class="w230 glowing" type="text" value="" placeholder="ชื่อผู้ใช้" name="user_id"><br> -->
			<!-- <input class="w230 glowing" type="password" value="" placeholder="รหัสผ่าน" name="user_pass"><br><br> -->
			<input class="inputtext_style1" type="text" value="" placeholder="Username" title="Username" name="user_id">
			<input class="inputtext_style1_password" type="password" value="" placeholder="Password" title="Password" name="user_pass">
			<input type="submit" class="loginSubmit" title="Login" value="Login"><br/>
			<br/>
			<span><a href="<?php echo base_url('person/fg_pass');?>" title="Forgot Password" >Forgot Password ?</a></span>
		<?php echo form_close();?>
	</div>
	
</body>
</html>
<?php $this->load->file('assets/tools/tools_script.php'); ?>
