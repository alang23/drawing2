<div class="container"><h3>网站后台管理系统</h3></div>
<hr/>
<div class="container-fluid">
  <div class="row-fluid">
    <div class="span2">
    <?php $page="alterAward";?>
      <?php include('application/views/admin/menu.php');?>
    </div>
    <div class="span10">
    	<form id="myForm" action="<?=base_url("index.php?/admin/alterAward")?>" method="post">
    		<input type="hidden" name="id" value="<?=$award->id?>"/>
    		<table width='100%' cellspacing='0' cellpadding='0'>
			<tr>
				<td style='width:21%;height:28px;' align='right'>奖品名称：</td>
				<td align='left'><?=$award->name?></td>
			</tr>
			</table>
			<table width='100%' cellspacing='0' cellpadding='0'>
			<tr>
				<td style='width:21%;height:28px;' align='right'>数量：</td>
				<td align='left'><input type='text' name='num' style='width:150px' value="<?=$award->num?>"></td>
			</tr>
			</table>
			<table width='100%' cellspacing='0' cellpadding='0'>
			<tr>
				<td style='width:21%;height:28px;' align='right'>中奖机率：</td>
				<td align='left'><input type='text' name='probability' style='width:50px' value="<?=$award->probability?>">%[请输入1-100的整数]</td>
			</tr>
			<tr>
				<td style='width:21%;height:28px;' align='right'>&nbsp;</td>
				<td align='left'> <input type='submit' value='保 存'></td>
			</tr>
			</table>
		</form>
    </div>
  </div>
</div>