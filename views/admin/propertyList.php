<script>
	function mySub(){
		document.location.href="<?=base_url("index.php?/admin/propertyList?keyword=")?>"+document.getElementById("keyword").value;
	}
	function exportExcel(){
		document.location.href="<?=base_url("index.php?/admin/exportProperty?startTime=")?>"+document.getElementById("startTime").value+"&endTime="+document.getElementById("endTime").value;
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
<div class="span2"><?php $page="propertyList";?> <?php include('application/views/admin/menu.php');?>
</div>

<div class="span10">
<table class="tablelistsecond" border="1">
	<tr>
		<th width="5%" align="center">用户昵称</th>
		<th width="10%" align="center">选择的T恤属性</th>
		<th width="5%" align="center">时间</th>
	</tr>
	<?php foreach ($results->result() as $row): ?>
	<tr>
		<td align="center"><?php echo $row->nickname ?></td>
		<td align="center"><?php echo $row->property ?></td>
		<td align="center"><?php echo $row->add_time ?></td>
	</tr>
	<?php endforeach; ?>
</table>

总数：<?=$total_rows?>
	<?php echo $this->pagination->create_links(); ?></div>
</div>
</div>
