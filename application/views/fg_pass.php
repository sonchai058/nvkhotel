<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
<?  $site=rowArray($this->common_model->getTable('webdetail'));?>
    <meta name="description" content="<?=@$site['WD_Descrip']?>">
    <meta name="keywords" content="<?=@$site['WD_Keyword']?>">
    <meta name="author" content="<?=@$site['WD_Name']?>">
    <link rel="shortcut icon" href="<?=base_url('assets/img/'.$site['WD_Icon']);?>" type="image/x-icon">
    <? $this->load->file('assets/tools/tools_config.php');?>

    <style type="text/css">
        @font-face {
            font-family: 'CSPraJad';
            src: url('<?=base_url('assets/font/')?>/CS_PraJad/CSPraJad.otf');
        }
        body{
            background-color: <?=$site['WD_BGcolor']?>;
        }
        body.container_background{
            background: url('<?=base_url("assets/img/{$site['WD_Background']}")?>') no-repeat center center fixed;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover;
        }
    </style>
    <title><?=$title?></title>
</head>
<body>
	<?=form_open('person/fg_pass');?>
		<div class="pg_form">
			กรอกอีเมล์ของท่าน
			<input type="text" name="email">
			<input type="submit" name="bt_submit" value="Send" title="Send">
			<br/><font color="red">*</font><span>หากยังไม่ได้รับอีเมล์ตอบกลับ กรุณาส่งใหม่</span>
			<br/><font color="red">*</font><span>ระบบจะส่งลิ้งค์พร้อมรหัสผ่านไปยังอีเมล์ของท่าน</span>
			<br/><br/><br/><br/>
			<center><?=anchor('login','<<กลับไปหน้าล็อกอิน','title="กลับไปหน้าล็อกอิน"');?></center>
		</div>
	<?=form_close();?>
</body>
</html>