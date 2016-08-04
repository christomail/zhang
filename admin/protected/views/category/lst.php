<div class="right-nav">
    <ul>
        <li><img src="<?php echo Yii::app()->request->baseUrl;?>/images/home.png"></li>
        <li style="margin-left:25px;">您当前的位置：</li>
        <li><a href="javascript:;">分类模块</a></li>
        <li>></li>
        <li><a href="javascript:;">分类列表</a></li>
    </ul>
    <a href="<?php echo $this->createUrl('add');?>"><div class="add"><h3>分类商品</h3></div></a>
</div>
<div class="lst">
    <table class="lst_table">
        <tr>
            <th>类别ID</th>
            <th>类别名称</th>
            <th>类别等级</th>
            <th>上级分类</th>
            <th>商品数量</th>
            <th>操作</th>
        </tr>
        <?php foreach($list as $v){ ?>
            <tr>
                <td><?php echo $v['id'];?></td>
                <td><?php echo $v['cat_name'];?></td>
                <td><?php echo $v['level'];?></td>
                <td><?php echo $v['parent'];?></td>
                <td><?php echo $v['goods_num'];?></td>
                <td>
                    <a href="<?php echo $this->createUrl('Category/add',array('id'=>$v['id']));?>">添加子分类</a> |
                    <a href="<?php echo $this->createUrl('Category/delete',array('id'=>$v['id']));?>">删除</a>
                </td>
            </tr>
        <?php } ?>
    </table>
</div>