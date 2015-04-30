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

<?php
	$process=array(	
					'xxx_manage'=>'ข้อมูลการตั้งค่า',			
	);
	if(isset($process[$this->uri->segment(2)]))
		$title=$process[$this->uri->segment(2)];

?>
    <title><?php echo $title;?></title>

    <?php if(isset($output))
		{
			foreach($css_files as $file): ?>
				<link type="text/css" rel="stylesheet" href="<?php echo $file; ?>" />
		 <?php endforeach;
			foreach($js_files as $file): ?>
				<script src="<?php echo $file; ?>"></script>
		 <?php endforeach;
		}
	 ?>
</head>
<body class="container_background">	
<?php 
	include('html/head_submenu.php'); ?>
	<div class="main_content">
<?php			
	if(isset($output))	
		echo ($output);
	else
		$this->load->view($content_view);
?>

	</div>	
<?php	
	include('html/footer.php');
?>
<br><br>
</body>
</html>
<?php $this->load->file('assets/tools/tools_script.php'); ?>