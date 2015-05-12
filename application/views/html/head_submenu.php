<div class="w_main_subhead">
	<div class="main_subhead">
		<div class="logo" title="Logo">
			<?php
				$site=rowArray($this->common_model->getTable('sip_webdetail'));
			?>
			<a href="<?php echo base_url()?>"><img src="<?php echo base_url('assets/img/'.$site['WD_Logo']);?>"></a>
		</div>
		<ul class="menu">
			<li><a href="<?php echo base_url('control/website_setting');?>" class="wobble" <?php if(uri_seg(2)=='website_setting')echo "style='color:#FF9900;'";?> title="Website Setting">Website Setting</a></li>
			<li><a href="<?php echo base_url('control/account_info');?>" class="wobble" <?php if(uri_seg(2)=='account_info')echo "style='color:#FF9900;'";?> title="Account info">Account info</a></li>
			<li><a href="<?php echo base_url('control/package_info');?>" class="wobble" <?php if(uri_seg(2)=='package_info')echo "style='color:#FF9900;'";?> title="Packkage info">Package info</a></li>
			<li><a href="#" class="wobble" title="User Info">User Info</a></li>
			<li><a href="#" class="wobble" title="Login History">Login History</a></li>
			<li><a href="<?php echo base_url('logout');?>" class="wobble" title="Logout">Logout</a></li>
		</ul>
	</div>
	<div id="bt_slide" title="Menu">
		<img src="<?php echo base_url('assets/img/bt_slide1.png');?>">
	</div>
</div>
<ul class="menu_small">
	<li><a href="<?php echo base_url('control/website_setting');?>" <?php if(uri_seg(2)=='website_setting')echo "style='color:#FF9900;'";?> title="Website Setting">Website Setting</a></li>
	<li><a href="<?php echo base_url('control/account_info');?>" class="wobble" <?php if(uri_seg(2)=='account_info')echo "style='color:#FF9900;'";?>  title="Account info">Account info</a></li>
	<li><a href="<?php echo base_url('control/package_info');?>" <?php if(uri_seg(2)=='package_info')echo "style='color:#FF9900;'";?> title="Package info">Package info</a></li>
	<li><a href="#" title="User Info">User Info</a></li>
	<li><a href="#" title="Login History">Login History</a></li>
	<li><a href="#" title="Logout">Logout</a></li>
</ul>
<div style="position:absolute; top:2px; right:4px; font-size:12px;">
	<b>User:</b>&nbsp;&nbsp;<?=get_session('user')?>
	<b>Account Name:</b>&nbsp;&nbsp;<?=get_session('account_name')?>
	&nbsp;&nbsp;<a title="Logout" href="<?=base_url('logout')?>">Logout</a>
</div>
