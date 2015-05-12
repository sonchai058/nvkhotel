<?php echo form_open_multipart('control/website_setting');?>
<br>
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
	<tr><td align="right" class="label">Website Name &nbsp;&nbsp;</td><td align="left" align="right">&nbsp;&nbsp;<input type="text" class="form_text" title="Website Name"  name="WD_Name" value="<?php echo $site['WD_Name'];?>"></td></tr>
	<tr><td align="right" class="label">Company Name &nbsp;&nbsp;</td><td align="left" align="right">&nbsp;&nbsp;<input type="text" class="form_text" title="Company Name"  name="WD_NameCompany" value="<?php echo $site['WD_NameCompany'];?>"></td></tr>
	<tr><td align="right" class="label">Address &nbsp;&nbsp;</td><td align="left" align="right">&nbsp;&nbsp;<textarea rows="3" cols="32" class="form_text" title="Address" name="WD_Address"><?php echo $site['WD_Address'];?></textarea></td></tr>
	<tr><td align="right" class="label">Email &nbsp;&nbsp;</td><td align="left" align="right">&nbsp;&nbsp;<input type="email" class="form_text" title="Email"  name="WD_Email" value="<?php echo $site['WD_Email'];?>" required></td></tr>
	<tr><td align="right" class="label">Tel &nbsp;&nbsp;</td><td align="left" align="right">&nbsp;&nbsp;<input type="text" class="form_text" title="Telephone"  name="WD_Tel" value="<?php echo $site['WD_Tel'];?>"></td></tr>
	<tr><td align="right" class="label">Fax &nbsp;&nbsp;</td><td align="left" align="right">&nbsp;&nbsp;<input type="text" class="form_text" title="Tel"  name="WD_Fax" value="<?php echo $site['WD_Fax'];?>"></td></tr>
	<tr><td align="right" class="label">Title/Paragraph &nbsp;&nbsp;</td><td align="left" align="right">&nbsp;&nbsp;<textarea rows="3" cols="32" class="form_text" title="Title/Paragraph" name="WD_Title"><?php echo $site['WD_Title'];?></textarea></td></tr>
	<tr><td align="right" class="label">Description &nbsp;&nbsp;</td><td align="left" align="right">&nbsp;&nbsp;<textarea rows="3" cols="32" class="form_text" title="Description" name="WD_Descrip"><?php echo $site['WD_Descrip'];?></textarea></td></tr>
	<tr><td align="right" class="label">Keyword <font color="red">*</font>step with ','&nbsp;&nbsp;</td><td align="left" align="right">&nbsp;&nbsp;<textarea rows="3" cols="32" class="form_text" title="Keyword" name="WD_Keyword"><?php echo $site['WD_Keyword'];?></textarea></td></tr>
	<tr><td align="right" class="label">Stats Code &nbsp;&nbsp;</td><td align="left" align="right">&nbsp;&nbsp;<textarea rows="3" cols="32" class="form_text" title="Stats Code" name="WD_Stats"><?php echo $site['WD_Stats'];?></textarea></td></tr>
	<tr><td align="right" class="label">FbFanpage Url &nbsp;&nbsp;</td><td align="left" align="right">&nbsp;&nbsp;<textarea rows="3" cols="32" class="form_text" title="FbFanpage Url" name="WD_FbFanpage"><?php echo $site['WD_FbFanpage'];?></textarea></td></tr>
	<tr><td align="right" class="label">EmbedVDO Code &nbsp;&nbsp;</td><td align="left" align="right">&nbsp;&nbsp;<textarea rows="3" cols="32" class="form_text" title="EmbedVDO Code" name="WD_EmbedVDO"><?php echo $site['WD_EmbedVDO'];?></textarea></td></tr>
	<tr><td align="right" class="label">Latitude &nbsp;&nbsp;</td><td align="left" align="right">&nbsp;&nbsp;<input type="text" class="form_text" title="Latitude"  name="WD_Latitude" value="<?php echo $site['WD_Latitude'];?>"></td></tr>
	<tr><td align="right" class="label">Longjitude &nbsp;&nbsp;</td><td align="left" align="right">&nbsp;&nbsp;<input type="text" class="form_text" title="Longjitude"  name="WD_Longjitude" value="<?php echo $site['WD_Longjitude'];?>"></td></tr>
	<tr valign="top">
		<td align="right" class="label">Map Logo <font color="red">*</font>32 x 32 px&nbsp;&nbsp;</td>
		<td align="left" align="right">
			&nbsp;&nbsp;<img title="Map Logo" width="80px" height="80px" src="<?php echo base_url("assets/img/".$site['WD_ImgMap']);?>"/><br>
			&nbsp;&nbsp;<input type="file" title="choose file image"  name="WD_ImgMap">
		</td>
	</tr>
	<tr><td colspan=2></td></tr>
	<tr align="center"><td colspan=2><input name="bt_submit" type="submit" class="btSubmit" value="Update Data" title="Update Data" onclick="javascript:return confirm('Confirm Update!');"></td></tr>
</table>
<br>
<?php echo form_close();?>
