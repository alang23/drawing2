<script>
	function sendLottery(open_id,id,award_name){
		$.ajax({
			type:"post",
			dataType:"json",
			url:"<?=base_url("index.php?/admin/sendLotteryAward?open_id=")?>"+open_id+"&id="+id+"&award_name="+award_name,
			success: function(data){
				if(data.errcode==0){
					alert('操作成功');
				}else {
					alert('操作失败，错误码：'+data.errcode);
				}
			}
		});//ajax - end
	}
</script>
<div class="container">
<h3>网站后台管理系统</h3>
</div>
<hr />
<div class="container-fluid">
<div class="row-fluid">
<div class="span2"><?php $page="lotteryRecordList";?> <?php include('application/views/admin/menu.php');?>
</div>
<div class="span10">
<input type="hidden" id="state" name="state" value="0"/>
<table class="tablelistsecond" border="1">
	<tr>
		<th width="3%" align="center">ID</th>
		<th width="17%" align="center">中奖时间</th>
		<th width="10%" align="center">用户昵称</th>
		<th width="10%" align="center">淘宝ID</th>
		<th width="10%" align="center">用户手机号</th>
		<th width="10%" align="center">奖品</th>
	</tr>
	<?php foreach ($results->result() as $row): ?>
	<tr>
		<td align="center"><?php echo $row->id ?></td>
		<td align="center"><?php echo $row->add_time ?></td>
		<td align="center"><?php echo $row->nickname ?></td>
		<td align="center"><?php echo $row->taobao_id ?></td>
		<td align="center"><?php echo $row->mobile ?></td>
		<td align="center"><?php echo $row->awrdname ?></td>
	</tr>
	<?php endforeach; ?>
</table>
 <?php echo $this->pagination->create_links(); ?>
</div>
</div>
</div>