<div class="right-nav">
	<ul>
		<li><img src="<?php echo Yii::app()->request->baseUrl;?>/images/home.png"></li>
		<li style="margin-left:25px;">您当前的位置：</li>
		<li><a href="#">商品模块</a></li>
		<li>></li>
		<li><a href="#">商品列表</a></li>
	</ul>
	<a href="<?php echo $this->createUrl('add');?>"><div class="add"><h3>添加商品</h3></div></a>
</div>
<div class="lst">
	<table class="lst_table">
		<tr>
			<td>商品ID</td>
			<td>商品名称</td>
			<td>标签</td>
			<td>缩略图</td>
			<td>关键词</td>
			<td>是否上架</td>
			<td>是否促销</td>
			<td>添加时间</td>
			<td>编辑|删除</td>
		</tr>
		<?php foreach($list as $v){ ?>
		<tr>
			<td><?php echo $v['id'];?></td>
			<td><?php echo $v['goods_name'];?></td>
			<td><?php echo $v['tag'];?></td>
			<td><?php echo $v['sm_pic'];?></td>
			<td><?php echo $v['keywords'];?></td>
			<td><?php echo $v['is_on_sale'];?></td>
			<td><?php echo $v['is_hot'];?></td>
			<td><?php echo $v['createtime'];?></td>
			<td><a href="<?php echo $this->createUrl('Goods/edit');?>"><img src="/images/edit.png" alt="edit"></a>
				| <a href="<?php echo $this->createUrl('Goods/delete');?>"><img src="/images/delete.ico" alt="delete"></a></td>
		</tr>
		<?php } ?>
	</table>
</div>