<script src="<?php echo base_url('assets/js/jquery-1.11.1.js');?>"></script>

<?php $site=rowArray($this->common_model->getTable('sip_webdetail'));?>
<style type="text/css">
	<?php
		if($site['WD_Background']==''){
	?>
		body{
			background-color: <?php echo $site['WD_BGcolor']?>;			
		}
	<?php
		}else{
	?>
		body.container_background{
			background: url('<?=base_url("assets/img/{$site['WD_Background']}")?>') no-repeat center center fixed;
			-webkit-background-size: cover;
			-moz-background-size: cover;
			-o-background-size: cover;
			background-size: cover;
		}
	<?php
		}
	?>
</style>

<link rel="stylesheet" href="<?php echo base_url('assets/css/style.css');?>"/>
<link rel="stylesheet" href="<?php echo base_url('assets/css/fg_pass.css');?>"/>

<link rel="stylesheet" media="all and (max-width:1100px)" rel="stylesheet" href="<?php echo base_url('assets/css/small_style.css')?>">
<link rel="stylesheet" media="all and (min-width:1101px)" rel="stylesheet" href="<?php echo base_url('assets/css/large_style.css')?>">

<?php
	if(uri_seg(2)=='package_info' && uri_seg(3)==''){?>
		<link rel="stylesheet" type="text/css" href="<?=base_url('assets/js/datatable/css/jquery.dataTables.css');?>">
		<script type="text/javascript" language="javascript" src="<?=base_url('assets/js/datatable/js/jquery.js');?>"></script>
		<script type="text/javascript" language="javascript" src="<?=base_url('assets/js/datatable/js/jquery.dataTables.js');?>"></script>
		<script type="text/javascript" language="javascript" src="<?=base_url('assets/js/datatable/extensions/TableTools/js/dataTables.tableTools.js');?>"></script>
		<link rel="stylesheet" type="text/css" href="<?=base_url('assets/js/datatable/extensions/TableTools/css/dataTables.tableTools.css');?>">
<?php	
	}
?>