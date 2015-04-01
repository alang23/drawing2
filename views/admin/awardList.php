<div class="container">
<h3>网站后台管理系统</h3>
</div>
<hr />
<div class="container-fluid">
<div class="row-fluid">
<div class="span2"><?php $page="awardList";?> <?php include('application/views/admin/menu.php');?>
</div>
<div class="span10">
<input type="hidden" id="state" name="state" value="0"/>
<table class="tablelistsecond" border="1">
	<tr>
		<th width="3%" align="center">ID</th>
		<th width="17%" align="center">奖品名称</th>
		<th width="10%" align="center">数量</th>
		<th width="10%" align="center">中奖几率</th>
		<th width="5%" align="center">操作</th>
	</tr>
	<?php foreach ($results->result() as $row): ?>
	<tr>
		<td align="center"><?php echo $row->id ?></td>
		<td align="center"><?php echo $row->name ?></td>
		<td align="center"><?php echo $row->num ?></td>
		<td align="center"><?php echo $row->probability ?></td>
		<td align="center"><a href="<?=base_url()?>index.php/admin/toAlterAward?id=<?=$row->id?>">编辑</a></td>
	</tr>
	<?php endforeach; ?>
</table>
</div>
</div>
</div>