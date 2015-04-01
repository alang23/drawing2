<?php Widget::head();?>
<body>
	
<form class="form-inline definewidth m20" >
    <a href="<?=base_url()?>index.php?d=home&c=lottery&m=add&typeid=<?=$typeid?>"><button type="button" class="btn btn-success" id="addnew">新增</button></a>
</form>

<table class="table table-bordered table-hover definewidth m10">
    <thead>
    <tr>

        <th>ID</th>      
        <th>名称</th>
        <th>图片</th>
        <th>描述</th>
        <th>总数</th>
        <th>剩余</th>
        <th></th>
    </tr>
    </thead>
	<?php
		foreach($list as $k => $v){
	?>
    <tr>
	 	<td><?=$v['id']?></td>   
        <td><?=$v['title']?></td>      		 
		<td><?=$v['pic']?></td>   
		<td><?=$v['intro']?></td>   
		<td><?=$v['total']?></td>  
		<td><?=$v['sheng']?></td>     
        <td width="113" valign="middle">
            <a href="<?=base_url()?>index.php?d=home&c=lottery&m=edit&id=<?=$v['id']?>">编辑</a>
            <a href="<?=base_url()?>index.php?d=home&c=lottery&m=del&id=<?=$v['id']?>">删除</a>
        </td>
    </tr>
	<?php
		}
	?>
    <tr>
	 	<td colspan="7"><?=$page?></td>   
    </tr>
	</table>

</body>
</html>
