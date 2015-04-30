<style tyle="text/css">
	.label{
		font-size:14px;
		font-weight: bold;
	}
	.form_text{
		padding:6px;
		font-size:15px;
		color:#fff;
		border:1px #fff solid;
		background-color: transparent;
	}
</style>
<?php echo form_open_multipart('control/website_setting');?>
<br><br>
<table width="100%" cellspacing="10px">
	<tr valign="top">
		<td align="right" class="label">Logo Website <font color="red">*</font>200 x 180 px&nbsp;&nbsp;</td>
		<td align="left">
			&nbsp;&nbsp;<img title="Logo Website" width="80px" height="80px" src="<?php echo base_url("assets/img/".$site['WD_Logo']);?>"/><br>
			&nbsp;&nbsp;<input title="choose file image" type="file" name="WD_Logo">
		</td>
	</tr>
	<tr valign="top">
		<td align="right" class="label">Icon Website <font color="red">*</font>16 x 16 px&nbsp;&nbsp;</td>
		<td align="left" align="right">
			&nbsp;&nbsp;<img title="Icon Website" width="80px" height="80px" src="<?php echo base_url("assets/img/".$site['WD_Icon']);?>"/><br>
			&nbsp;&nbsp;<input type="file" title="choose file image"  name="WD_Icon">
		</td>
	</tr>
	<tr><td align="right" class="label">Background Color <font color="red">*</font>#ffffff&nbsp;&nbsp;</td><td align="left" align="right">&nbsp;&nbsp;<input type="text" class="form_text" title="Background Color"  name="WD_BGcolor" value="<?php echo $site['WD_BGcolor'];?>"></td></tr>
	<tr valign="top">
		<td align="right" class="label">Background Image <font color="red">*</font>Symmetric&nbsp;&nbsp;</td>
		<td align="left" align="right">
			&nbsp;&nbsp;<img title="Background Image" width="80px" height="80px" src="<?php echo base_url("assets/img/".$site['WD_Background']);?>"/><br>
			&nbsp;&nbsp;<input type="file" title="choose file image"  name="WD_Background">
		</td>
	</tr>
	<tr valign="top">
		<td align="right" class="label">Image Title Page Login <font color="red">*</font>Symmetric&nbsp;&nbsp;</td>
		<td align="left" align="right">
			&nbsp;&nbsp;<img title="Image Title Page Login" width="80px" height="80px" src="<?php echo base_url("assets/img/".$site['WD_TitleImgLogin']);?>"/><br>
			&nbsp;&nbsp;<input type="file" title="choose file image"  name="WD_TitleImgLogin">
		</td>
	</tr>
	<tr><td align="right" class="label">Background Color <font color="red">*</font>#ffffff&nbsp;&nbsp;</td><td align="left" align="right">&nbsp;&nbsp;<input type="text" class="form_text" title="Background Color"  name="WD_Name" value="<?php echo $site['WD_BGcolor'];?>"></td></tr>
</table>
<br><br>
<?php echo form_close();?>
