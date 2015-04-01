<?php Widget::head();?>
<body>
	
<form class="form-inline definewidth m20" >
    <a href="<?=base_url()?>index.php?d=home&c=works&m=index&typeid=1">已审核作品</a> | <a href="<?=base_url()?>index.php?d=home&c=works&m=index&typeid=0">未审核作品</a>|
	<!--<a href="<?=base_url()?>index.php?d=home&c=works&m=add"><button type="button" class="btn btn-success">新增</button></a> -->
</form>

<form class="form-inline definewidth m20" name="form1" method="get" action="<?=base_url()?>index.php?d=home&c=works">
<input type="hidden" name="d" value="home" />
<input type="hidden" name="c" value="works" />
    <input type="text" name="kw" /><input type="submit" value="搜索" />
	<!--<a href="<?=base_url()?>index.php?d=home&c=works&m=add"><button type="button" class="btn btn-success">新增</button></a> -->
</form>

<table class="table table-bordered table-hover definewidth m10">
    <thead>
    <tr>
        <th>ID</th>      
        <th>用户</th>
        <th>电话</th>
        <th>作品</th>
        <th>作品名称</th>
        <th>时间</th>
        <th>票数</th>
        <th></th>
    </tr>
    </thead>
	<?php
		foreach($list as $k => $v){
	?>
    <tr>
	 	<td><?=$v['id']?></td>   
        <td><?=$v['nickname']?></td>  
        <td><?=$v['phone']?></td>      		 
		<td><img src="<?=base_url()?>uploads/zuopin/<?=$v['file_name']?>" width="100px" height="100px"></td>   
		<td><?=$v['title']?></td>   
		<td><?=date("Y-m-d H:i:s",$v['createtime'])?></td>  
		<td><?=$v['zan']?></td>     
        <td width="130" valign="middle">
            <a href="<?=base_url()?>index.php?d=home&c=works&m=edit&id=<?=$v['id']?>">编辑</a>|
            <a href="<?=base_url()?>index.php?d=home&c=works&m=del&id=<?=$v['id']?>&page=<?=$pagenum?>&typeid=<?=$typeid?>">删除</a>|
            <?php
                if($v['is_top'] == 1){
            ?>
            <a href="javascript:void(0);" onclick="tuijian(<?=$v['id']?>,0);">取消推荐</a>|
            <?php
                }else{
            ?>
             <a href="javascript:void(0);" onclick="tuijian(<?=$v['id']?>,1);">推荐</a> |

             <?php
         }
         ?>

                     <?php
                if($v['enabled'] == 1){
            ?>
            <a href="javascript:void(0);" onclick="shenhe(<?=$v['id']?>,0);">不通过审核</a>
            <?php
                }else{
            ?>
             <a href="javascript:void(0);" onclick="shenhe(<?=$v['id']?>,1);">通过审核</a> 
             
             <?php
         }
             ?>
        </td>
    </tr>
	<?php
		}
	?>
    <tr>
	 	<td colspan="8"><?=$page?></td>   
    </tr>
	</table>
<script>
var hostname = '<?=base_url()?>';
function tuijian(id,is_top)
{
    var jsonData = null;
    jQuery.ajax({
         type:'post',
         url: hostname + 'index.php?d=home&c=works&m=tuijian',
         dataType:'json',
         data:{
            id:id,
            is_top:is_top
        },
         cache:false,
         async:false,
         success:function(data){

             if(data.errcode == 0){
                 location.reload();
             }  

             return false;         
         },
         error:function(){
             alert("error!!!");
         }
     });
    return jsonData;
}

function shenhe(id,is_top)
{
   // alert(is_top);
    var jsonData = null;
    jQuery.ajax({
         type:'post',
         url: hostname + 'index.php?d=home&c=works&m=shenhe',
         dataType:'json',
         data:{
            id:id,
            is_top:is_top
        },
         cache:false,
         async:false,
         success:function(data){

             if(data.errcode == 0){
                 location.reload();
             }  

             return false;         
         },
         error:function(){
             alert("error!!!");
         }
     });
    return jsonData;
}
</script>
</body>
</html>
