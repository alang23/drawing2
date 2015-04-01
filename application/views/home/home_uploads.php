<?php Widget::head();?>
<body>
	

<form name="form1" method="post" action="<?=base_url()?>index.php?d=home&c=myupload" enctype="multipart/form-data"/>
<table class="table table-bordered table-hover definewidth m10">
    <thead>
    <tr>

        <th></th>      
        <th></th>
        <th></th>
        <th></th>
        <th></th>
        <th></th>

    </tr>
    </thead>

    <tr>
	 	<td>用户名:</td>   
        <td><input type="text" name="nickname" /></td>   
         <td></td>    
         <td></td>   
         <td></td>  	
         <td></td>      	 
    </tr>
    <?php
        for($i=0;$i<10;$i++){
    ?>
        <tr>
        <td>文件一</td>   
        <td><input type="file" name="userfile[]" /></td>  
        <td>作品标题</td>    
        <td><input type="text" name="title[]" /></td>   
        <td>时间</td>   
        <td><input type="text" name="createtime[]" value="<?=$dates[$i]?>"/></td>         
    </tr>
    <?php
        }
    ?>
    <!--
    </tr>
        <tr>
        <td></td>   
        <td><input type="file" name="userfile[]" /></td>  
        <td>作品标题</td>    
        <td><input type="text" name="title[]" /></td>   
        <td>时间</td>   
        <td><input type="text" name="createtime[]" /></td>         
    </tr>
    </tr>
        <tr>
        <td></td>   
        <td><input type="file" name="userfile[]" /></td>  
        <td>作品标题</td>    
        <td><input type="text" name="title[]" /></td>   
        <td>时间</td>   
        <td><input type="text" name="createtime[]" /></td>         
    </tr>
    </tr>
        <tr>
        <td></td>   
        <td><input type="file" name="userfile[]" /></td>  
        <td>作品标题</td>    
        <td><input type="text" name="title[]" /></td>   
        <td>时间</td>   
        <td><input type="text" name="createtime[]" /></td>         
    </tr>
    </tr>
        <tr>
        <td></td>   
        <td><input type="file" name="userfile[]" /></td>  
        <td>作品标题</td>    
        <td><input type="text" name="title[]" /></td>   
        <td>时间</td>   
        <td><input type="text" name="createtime[]" /></td>         
    </tr>

            <tr>
        <td></td>   
        <td><input type="file" name="userfile[]" /></td>  
        <td>作品标题</td>    
        <td><input type="text" name="title[]" /></td>   
        <td>时间</td>   
        <td><input type="text" name="createtime[]" /></td>         
    </tr>

            <tr>
        <td></td>   
        <td><input type="file" name="userfile[]" /></td>  
        <td>作品标题</td>    
        <td><input type="text" name="title[]" /></td>   
        <td>时间</td>   
        <td><input type="text" name="createtime[]" /></td>         
    </tr>

            <tr>
        <td></td>   
        <td><input type="file" name="userfile[]" /></td>  
        <td>作品标题</td>    
        <td><input type="text" name="title[]" /></td>   
        <td>时间</td>   
        <td><input type="text" name="createtime[]" /></td>         
    </tr>

            <tr>
        <td></td>   
        <td><input type="file" name="userfile[]" /></td>  
        <td>作品标题</td>    
        <td><input type="text" name="title[]" /></td>   
        <td>时间</td>   
        <td><input type="text" name="createtime[]" /></td>         
    </tr>

            <tr>
        <td></td>   
        <td><input type="file" name="userfile[]" /></td>  
        <td>作品标题</td>    
        <td><input type="text" name="title[]" /></td>   
        <td>时间</td>   
        <td><input type="text" name="createtime[]" /></td>         
    </tr>

            <tr>
        <td></td>   
        <td><input type="file" name="userfile[]" /></td>  
        <td>作品标题</td>    
        <td><input type="text" name="title[]" /></td>   
        <td>时间</td>   
        <td><input type="text" name="createtime[]" /></td>         
    </tr>
    -->
    <tr>
	 	<td colspan="6"><input type="submit" value="提交"/></td>   
    </tr>
	</table>
</form>
</body>
</html>
