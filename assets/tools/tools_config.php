<script src="<?=base_url('assets/js/jquery-1.11.1.js');?>"></script>

<? $site=rowArray($this->common_model->getTable('sip_webdetail'));?>
<style type="text/css">
	<?
		if($site['WD_Background']==''){
	?>
		body{
			background-color: <?=$site['WD_BGcolor']?>;			
		}
	<?
		}else{
	?>
		body.container_background{
			background: url('<?=base_url("assets/img/{$site['WD_Background']}")?>') no-repeat center center fixed;
			-webkit-background-size: cover;
			-moz-background-size: cover;
			-o-background-size: cover;
			background-size: cover;
		}
	<?
		}
	?>
</style>

<link rel="stylesheet" href="<?=base_url('assets/css/style.css');?>"/>
<link rel="stylesheet" href="<?=base_url('assets/css/fg_pass.css');?>"/>

<link rel="stylesheet" media="all and (max-width:1100px)" rel="stylesheet" href="<?=base_url('assets/css/small_style.css')?>">
<link rel="stylesheet" media="all and (min-width:1101px)" rel="stylesheet" href="<?=base_url('assets/css/large_style.css')?>">