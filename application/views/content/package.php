<br>
<?php if(uri_seg(3)==''){?>
	<a class="bt_add" href="<?php echo base_url('control/package_info/add');?>" title="เพิ่มข้อมูลใหม่"><img src="<?php echo base_url('assets/img/add-icon1.png')?>"><span>เพิ่มข้อมูลใหม่</span></a><br/>
	<div class="table_result">		
		<table id="package_info" cellpadding="5px">
			<thead>
				<tr>
					<th>ID</th>
					<th>Name</th>
					<th>Detail</th>
					<th>Amount</th>
					<th>Status</th>
					<th>User Add</th>
					<th>Date Create</th>
					<th>Tools</th>
				</tr>
			</thead>
			<tbody>
		<?php 
			$temps=$this->package_model->getAllStatus();
			$status=array();
			foreach($temps as $row){
				$status[$row['id']]=$row['name'];
			}
			if(count($packages)>0)
			foreach($packages as $row){
			?>
				<tr>
					<td><?php echo $row['id'];?></td>
					<td><?php echo $row['name'];?></td>
					<td><?php 
							if(strlen($row['detail']) > 40)
								$row['detail'] = mb_substr($row['detail'],0,40,'UTF-8')." ...";
							echo $row['detail'];
						?>
					</td>
					<td><?php echo $row['amount'];?></td>
					<td><?php echo $status[$row['status']];?></td>
					<td><?php
							$temp1=$this->package_model->getMemberAdd($row['id']);
							echo $temp1['user'];
						?>
					</td>
					<td><?php
							echo @formatDateUniFromDatatime(date("Y-m-d H:i:s",$row['datecreate']));
						?>
					</td>
				    <td><a target="_self" title='Edit' href='<?=base_url('control/package_info/edit/'.$row['id'])?>'><img src='<?=base_url('assets/img/edit-acc.png');?>'/></a>
						<a target="_self" title='Delete' href='<?=base_url('control/package_info/del/'.$row['id'])?>' onclick="javascript:return confirm('Confirm Delete!')"><img src='<?=base_url('assets/img/delete(1).png');?>'/></a>					
					</td>
				</tr>
				<? } ?>
			</tbody>
		</table>
	</div>	
<?php }else if(uri_seg(3)=='add' || uri_seg(3)=='edit'){?>
	<?php echo form_open_multipart('control/package_info/'.uri_seg(3).'/'.uri_seg(4));?>
	<a class="bt_add" href="<?php echo base_url('control/package_info');?>" title="กลับไปก่อนหน้า"><img src="<?php echo base_url('assets/img/arrow-back.png')?>"><span>กลับไปก่อนหน้า</span></a><br/>
	<?php
	echo '<div class="form_message_error">'.validation_errors()."</div>";	
	?>
	<table width="100%" cellspacing="10px">
		<tr><td align="right" class="label">Package Name <font color="red">*</font>&nbsp;&nbsp;</td><td align="left" align="right">&nbsp;&nbsp;<input type="text" class="form_text" title="package Name"  name="name" value="<?php echo $package['name'];?>" required></td></tr>
		<tr><td align="right" class="label">Detail &nbsp;&nbsp;</td><td align="left" align="right">&nbsp;&nbsp;<textarea rows="3" cols="32" class="form_text" title="Detail" name="detail"><?php echo $package['detail'];?></textarea></td></tr>
		<tr><td align="right" class="label">Amount <font color="red">*</font>&nbsp;&nbsp;</td><td align="left" align="right">&nbsp;&nbsp;<input type="number" class="form_text" title="Amount"  name="amount" value="<?php echo $package['amount'];?>" required></td></tr>
		<tr><td align="right" class="label">Status <font color="red">*</font>&nbsp;&nbsp;</td>
			<td align="left" align="right">&nbsp;&nbsp;
				<select name="status" title="status" required>
				<?php
					$rows=$this->package_model->getAllStatus();				
					foreach($rows as $row){?>
					<option value="<?php echo $row['id'];?>" <?php if($row['id']==$package['status']){?> selected <?php }?>><?php echo $row['name'];?></option>
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
