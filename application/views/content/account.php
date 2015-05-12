<br>
<?php if(uri_seg(3)==''){?>
	<a class="bt_add" href="<?php echo base_url('control/account_info/add');?>" title="เพิ่มข้อมูลใหม่"><img src="<?php echo base_url('assets/img/add-icon1.png')?>"><span>เพิ่มข้อมูลใหม่</span></a><br/>
	<div class="table_result">		
		<table id="account_info" cellpadding="5px">
			<thead>
				<tr>
					<th>ID</th>
					<th>Ref</th>
					<th>Name</th>
					<th>Address</th>
					<th>Tel</th>
					<th>Web</th>
					<th>Callcenter</th>
					<th>Latitude</th>
					<th>Longitude</th>
					<th>Package</th>
					<th>Sipserver</th>
					<th>User Login</th>
					<th>Password</th>
					<th>Status</th>
					<th>Isactive</th>
					<th>User Add</th>
					<th>Date Create</th>
					<th>Tools</th>
				</tr>
			</thead>
			<tbody>
		<?php
			$isactive=array("0"=>'Not active',"1"=>'Active'); 
			$temps=$this->package_model->getAllStatus();
			$status=array();
			foreach($temps as $row){
				$status[$row['id']]=$row['name'];
			}
			if(count($accounts)>0)
			foreach($accounts as $row){
			?>
				<tr>
					<td><?php echo $row['id'];?></td>
					<td><?php echo $row['ref'];?></td>
					<td><?php 
							if(strlen($row['name']) > 20)
								$row['name'] = mb_substr($row['name'],0,20,'UTF-8')." ...";
							echo $row['name'];
						?>
					</td>
					<td><?php 
							if(strlen($row['address']) > 25)
								$row['address'] = mb_substr($row['address'],0,25,'UTF-8')." ...";
							echo $row['address'];
						?>
					</td>
					<td><?php echo $row['tel'];?></td>
					<td><?php echo $row['web'];?></td>
					<td><?php echo $row['callcenter'];?></td>
					<td><?php echo $row['latitude'];?></td>
					<td><?php echo $row['longitude'];?></td>
					<td>
						<?php $temp=$this->package_model->getOncePackage($row['package']);
							echo $temp['name']; 
						 ?>
					</td>
					<td><?php echo $row['sipserver'];?></td>
					<td><?php 
							$temp=$this->account_model->getUser($row['id']);
							echo $temp['user'];
						?>
					</td>
					<td><?php echo $temp['password'];?>
					</td>
					<td><?php echo $status[$row['status']];?></td>
					<td><?php echo $isactive[$row['isactive']];?></td>
					<td><?php
							$temp1=$this->package_model->getMemberAdd($row['user_add']);
							echo @$temp1['user'];
						?>
					</td>
					<td><?php
							echo @formatDateUniFromDatatime(date("Y-m-d H:i:s",$row['datecreate']));
						?>
					</td>
				    <td><a target="_self" title='Edit' href='<?=base_url('control/account_info/edit/'.$row['id'])?>'><img src='<?=base_url('assets/img/edit-acc.png');?>'/></a>
						<a target="_self" title='Delete' href='<?=base_url('control/account_info/del/'.$row['id'])?>' onclick="javascript:return confirm('Confirm Delete!')"><img src='<?=base_url('assets/img/delete(1).png');?>'/></a>					
					</td>
				</tr>
				<? } ?>
			</tbody>
		</table>
	</div>	
<?php }else if(uri_seg(3)=='add' || uri_seg(3)=='edit'){?>
	<?php echo form_open_multipart('control/account_info/'.uri_seg(3).'/'.uri_seg(4));?>
	<a class="bt_add" href="<?php echo base_url('control/account_info');?>" title="กลับไปก่อนหน้า"><img src="<?php echo base_url('assets/img/arrow-back.png')?>"><span>กลับไปก่อนหน้า</span></a><br/>
	<?php
	echo '<div class="form_message_error">'.validation_errors()."</div>";		
	?>
	<table width="100%" cellspacing="10px">
		<tr><td align="right" class="label">Ref &nbsp;&nbsp;</td><td align="left" align="right">&nbsp;&nbsp;<input type="text" class="form_text" title="ref"  name="ref" value="<?php echo $account['ref'];?>"></td></tr>
		<tr><td align="right" class="label">Account Name <font color="red">*</font>&nbsp;&nbsp;</td><td align="left" align="right">&nbsp;&nbsp;<input type="text" class="form_text" title="Account Name"  name="name" value="<?php echo $account['name'];?>" required></td></tr>
		<tr><td align="right" class="label">Address &nbsp;&nbsp;</td><td align="left" align="right">&nbsp;&nbsp;<textarea rows="3" cols="32" class="form_text" title="Address" name="address"><?php echo $account['address'];?></textarea></td></tr>
		<tr><td align="right" class="label">Tel &nbsp;&nbsp;</td><td align="left" align="right">&nbsp;&nbsp;<input type="text" class="form_text" title="Tel"  name="tel" value="<?php echo $account['tel'];?>"></td></tr>
		<tr><td align="right" class="label">Web &nbsp;&nbsp;</td><td align="left" align="right">&nbsp;&nbsp;<textarea rows="3" cols="32" class="form_text" title="Web" name="web"><?php echo $account['web'];?></textarea></td></tr>
		<tr><td align="right" class="label">Email <font color="red">*</font>Valid Format &nbsp;&nbsp;</td><td align="left" align="right">&nbsp;&nbsp;<input type="email" class="form_text" title="Email"  name="email" value="<?php echo $account['email'];?>" required></td></tr>
		<tr><td align="right" class="label">Callcenter &nbsp;&nbsp;</td><td align="left" align="right">&nbsp;&nbsp;<input type="text" class="form_text" title="callcenter"  name="callcenter" value="<?php echo $account['callcenter'];?>"></td></tr>
		<tr><td align="right" class="label">Latitude &nbsp;&nbsp;</td><td align="left" align="right">&nbsp;&nbsp;<input type="text" class="form_text" title="Latitude"  name="latitude" value="<?php echo $account['latitude'];?>"></td></tr>
		<tr><td align="right" class="label">Longitude &nbsp;&nbsp;</td><td align="left" align="right">&nbsp;&nbsp;<input type="text" class="form_text" title="Longitude"  name="longitude" value="<?php echo $account['longitude'];?>"></td></tr>
		<?php
			if(uri_seg(3)=='add'){
		?>		
		<tr><td align="right" class="label">Package <font color="red">*</font>&nbsp;&nbsp;</td>
			<td align="left" align="right">&nbsp;&nbsp;
				<select name="package" title="package" required>
				<?php
					$rows=$this->package_model->getAllPackage();				
					foreach($rows as $row){?>
					<option value="<?php echo $row['id'];?>" <?php if($row['id']==$account['package']){?> selected <?php }?>><?php echo $row['name'];?></option>
				<?php
					}
				?>
				</select>
			</td>
		</tr>
		<?php
			}
		?>			
		<tr><td align="right" class="label">Sipserver <font color="red">*</font>&nbsp;&nbsp;</td><td align="left" align="right">&nbsp;&nbsp;<input type="text" class="form_text" title="Sipserver"  name="sipserver" value="<?php echo $account['sipserver'];?>" required></td></tr>
		<?php
			if(uri_seg(3)=='add'){
		?>
		<tr><td align="right" class="label">Username <font color="red">*</font>&nbsp;&nbsp;</td><td align="left" align="right">&nbsp;&nbsp;<input type="text" class="form_text" title="Username"  name="user" value="<?php echo $account['user'];?>" required></td></tr>
		<?php
			}
		?>
		<tr><td align="right" class="label">Password <font color="red">*</font>&nbsp;&nbsp;</td><td align="left" align="right">&nbsp;&nbsp;<input type="password" class="form_text" title="Password"  name="password" value="<?php echo $account['password'];?>" required></td></tr>
		<tr><td align="right" class="label">Status <font color="red">*</font>&nbsp;&nbsp;</td>
			<td align="left" align="right">&nbsp;&nbsp;
				<select name="status" title="status" required>
				<?php
					$rows=$this->package_model->getAllStatus();				
					foreach($rows as $row){?>
					<option value="<?php echo $row['id'];?>" <?php if($row['id']==$account['status']){?> selected <?php }?>><?php echo $row['name'];?></option>
				<?php
					}
				?>
				</select>
			</td>
		</tr>
		<tr><td align="right" class="label">Isactive <font color="red">*</font>&nbsp;&nbsp;</td>
			<td align="left" align="right">&nbsp;&nbsp;
				<select name="isactive" title="isactive" required>
				<?php
					$isactive=array("0"=>'Not active',"1"=>'Active');
					$rows=$this->package_model->getAllStatus();				
					foreach($isactive as $key=>$data){?>
					<option value="<?php echo $key;?>" <?php if($key==$account['isactive']){?> selected <?php }?>><?php echo $data;?></option>
				<?php
					}
				?>
				</select>
			</td>
		</tr>		
		<tr><td colspan=2></td></tr>
		<tr align="center"><td colspan=2><input name="bt_submit" type="submit" class="btSubmit" value="Save Data" title="Save Data" onclick="javascript:return confirm('Confirm Save Data!');"></td></tr>
	</table>
	
	<?php echo form_close();
	}
	?>
<br>
