<?php Widget::head();?>
<body>
	
<form class="form-inline definewidth m20" >
    <a href="<?=base_url()?>index.php?d=home&c=member&m=index&typeid=1">填写资料</a> | <a href="<?=base_url()?>index.php?d=home&c=member&m=index&typeid=0">全部</a>(<?=$count?>)
</form>

<table class="table table-bordered table-hover definewidth m10">
    <thead>
    <tr>

        <th>ID</th>      
        <th>昵称</th>
        <th>头像</th>
        <th>姓名</th>
        <th>地址</th>
        <th>来源</th>
        <th>时间</th>
        <th></th>
    </tr>
    </thead>
	<?php
		foreach($list as $k => $v){
	?>
    <tr>
	 	<td><?=$v['id']?></td>   
        <td><?=$v['nickname']?></td>      		 
		<td><img src="<?=$v['figureurl']?>" /></td>   
		<td><?=$v['realname']?></td>  
		<td><?=$v['address']?></td>  
		<td>
			<?php
				if($v['types'] == 1){
			?>
			QQ
			<?php
				}else{
			?>
				微博
			<?php
					}
			?>
		</td>   
		<td><?=date("Y-m-d H:i:s",$v['createtime'])?></td>      
        <td width="113" valign="middle">
        	<a href="<?=base_url()?>index.php?d=home&c=member&m=del&id=<?=$v['id']?>">删除</a></td>
    </tr>
	<?php
		}
	?>
    <tr>
	 	<td colspan="8"><?=$page?></td>   
    </tr>
	</table>

</body>
</html>
