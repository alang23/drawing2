<ul class="nav nav-list">
<li class="nav-header">
  管理
</li>
<li <?=$page=='userList'?' class="active"':''?>>
  <a href="<?php echo base_url().'index.php?/admin/userList'; ?>">用户列表</a>
</li>
<li <?=$page=='propertyList'?' class="active"':''?>>
  <a href="<?php echo base_url().'index.php?/admin/propertyList'; ?>">DIY列表</a>
</li>
<li <?=$page=='awardList'?' class="active"':''?>>
  <a href="<?php echo base_url().'index.php?/admin/awardList'; ?>">奖品列表</a>
</li>
<li <?=$page=='lotteryRecordList'?' class="active"':''?>>
  <a href="<?php echo base_url().'index.php?/admin/lotteryRecordList'; ?>">中奖记录</a>
</li>
<li class="divider">
</li>
<li class="nav-header">
  个人
</li>
<li <?=$page=='alterPwd'?' class="active"':''?>>
  <a href="<?php echo base_url().'index.php?/admin/toAlterPwd'; ?>">修改密码</a>
</li>
<li>
  <a href="<?php echo base_url().'index.php?/admin/logout'; ?>">退出</a>
</li>
</ul>