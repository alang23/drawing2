<?php Widget::head();?>
<body>
	


<table class="table table-bordered table-hover definewidth m10">
    <thead>
    <tr>

        <th>ID</th>      
        <th>奖品</th>
        <th>中奖人</th>
        <th>时间</th>
        <th></th>
    </tr>
    </thead>
	<?php
		foreach($list as $k => $v){
	?>
    <tr>
	 	<td><?=$v['id']?></td>   
        <td><?=$v['title']?></td>      		 
		<td><?=$v['nickname']?></td>   
		<td><?=date("Y/m/dH:i:s",$v['createtime'])?></td>   
    
        <td width="113" valign="middle">
            <a href="<?=base_url()?>index.php?d=home&c=lottery_log&m=del&id=<?=$v['id']?>">删除</a>

        </td>
    </tr>
	<?php
		}
	?>
    <tr>
	 	<td colspan="6"><?=$page?></td>   
    </tr>
	</table>



</body>
</html>
