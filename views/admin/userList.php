<script>
	function mySub(){
		document.location.href="<?=base_url("index.php?/admin/userList?keyword=")?>"+document.getElementById("keyword").value;
	}
	function exportExcel(){
		document.location.href="<?=base_url("index.php?/admin/exportUser?startTime=")?>"+document.getElementById("startTime").value+"&endTime="+document.getElementById("endTime").value;
	}
</script>
<script
	type="text/javascript"
	src="<?php echo base_url('My97DatePicker/WdatePicker.js'); ?>"></script>
<div class="container">
<h3>网站后台管理系统</h3>
</div>
<hr />
<div class="container-fluid">
<div class="row-fluid">
<div class="span2"><?php $page="userList";?> <?php include('application/views/admin/menu.php');?>
</div>
<div class="span10"><!-- <span style="float: left;"> 开始时间：<input
	style="width: 100px;" type="text"
	onClick="WdatePicker({dateFmt:'yyyy-MM-dd HH:mm'})" id="startTime"
	value="" /> 结束时间：<input style="width: 100px;" type="text"
	onClick="WdatePicker({dateFmt:'yyyy-MM-dd HH:mm'})" id="endTime"
	value="" /> </span><span style="float: left;"><input type="button"
	onclick="exportExcel()" value="导出Excel" />[默认为导出所有]</span> --></div>
<div class="span10"><span style="float: left;"><input
	style="width: 100px;" type="text" id="keyword" value="<?=$keyword?>" /></span><span
	style="float: left;"><input type="button" onclick="mySub()" value="查询" />[可以输入会员名称关键字进行搜索]  </span>
	
<table class="tablelistsecond" border="1">
	<tr>
		<th width="10%" align="center">昵称</th>
		<th width="10%" align="center">真实姓名</th>
		<th width="20%" align="center">地址</th>
		<th width="10%" align="center">手机号</th>
		<th width="10%" align="center">淘宝ID</th>
		<th width="15%" align="center">注册时间</th>
	</tr>
	<?php foreach ($results->result() as $row): ?>
	<tr>
		<td align="center"><?php echo $row->nickname ?></td>
		<td align="center"><?php echo $row->name ?></td>
		<td align="center"><?php echo $row->area ?></td>
		<td align="center"><?php echo $row->mobile ?></td>
		<td align="center"><?php echo $row->taobao_id ?></td>
		<td align="center"><?php echo $row->regTime ?></td>
	</tr>
	<?php endforeach; ?>
</table>
总数：<?=$total_rows?>
	<?php echo $this->pagination->create_links(); ?></div>
</div>
</div>
