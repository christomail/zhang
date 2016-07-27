<link rel="stylesheet" href="/public/datepicker/css/jquery-ui.css">
  <script src="/public/datepicker/js/jquery-1.11.3.min.js"></script>
  <script src="/public/datepicker/js/jquery-ui.js"></script>
  <script type="text/javascript">
  	$(function() {
    $( ".datepicker" ).datepicker();
  });
  </script>
<div class="right-nav">
	<ul>
		<li><img src="<?php echo Yii::app()->request->baseUrl;?>/images/home.png"></li>
		<li style="margin-left:25px;">您当前的位置：</li>
		<li><a href="#">商品模块</a></li>
		<li>></li>
		<li><a href="#">商品列表</a></li>
	</ul>
	<a href="<?php echo $this->createUrl('lst');?>"><div class="return"><h3>返回商品列表</h3></div></a>
</div>
<div class="pd-20">
	<form action="" method="post" class="form form-horizontal" id="form-article-add" target="_self">
	<table class="tab_goods">
		<tr>
			<th>产品标题：</th>
			<td><input type="text" name="goods_name" class="input-text"></td>
		</tr>
		<tr>
			<th>简略标题：</th>
			<td><input type="text" name="title" class="input-text"></td>
		</tr>
		<tr>
			<th>标签：</th>
			<td><input type="text" name="tag" class="input-text"></td>
		</tr>
		<tr>
			<th>产品分类：</th>
			<td><select name="cat_id" id=""></select></td>
		</tr>
		<tr>
			<th>排序值：</th>
			<td><input type="text" name="sort_num" class="input-text"></td>
		</tr>
		<tr>
			<th>价格：</th>
			<td><input type="text" name="price" class="input-text">元</td>
		</tr>
		<tr>
			<th>销售开始时间：</th>
			<td><input type="text" class="datepicker" name="starttime" id="dpd1"></td>
		</tr>
		<tr>
			<th>销售结束时间：</th>
			<td><input type="text" class="datepicker" name="endtime" id="dpd2"></td>
		</tr>
		<tr>
			<th>是否促销：</th>
			<td>
				<input type="radio" name="is_on_sale" value="是" checked="checked"/>是
				<input type="radio" name="is_on_sale" value="否"/>否
			</td>
		</tr>
		<tr>
			<th>是否热销：</th>
			<td>
				<input type="radio" name="is_hot" value="是" checked="checked"/>是
				<input type="radio" name="is_hot" value="否"/>否
			</td>
		</tr>
		<tr>
			<th>关键字：</th>
			<td><input type="text" class="input_text" name="keywords"></td>
		</tr>
		<tr>
			<th>详细内容：</th>
			<td>
				<?php
				$this->widget('ext.ueditor.UeditorWidget',
					array(
						'id'=>'content_body',//页面中输入框（或其他初始化容器）的ID
						'name'=>'body',//指定ueditor实例的名称,个页面有多个ueditor实例时使用
						'config'=> array(
							'serverUrl'=>Yii::app()->createUrl('/editor/index'),
							'initialFrameHeight'=>'300',
							'initialFrameWidth'=>'700',
						)
					)
				);?>
			</td>
		</tr>
	</table>
	</form>
</div>

<!--<iframe style="display:none;" width="800" height="500" id="_ajax_upload_pic" name="_ajax_upload_pic"></iframe>-->

<script type="text/javascript">
	function form_submit()
	{
		// 把相册表单中的图片路径放到商品表单中
		$("input[name='pic[]']").each(function(k,v){
			var newv = $(v).clone();
			$("#pic_path").append(newv);
		});
		$("input[name='mid_pic[]']").each(function(k,v){
			var newv = $(v).clone();
			$("#pic_path").append(newv);
		});
		$("input[name='sm_pic[]']").each(function(k,v){
			var newv = $(v).clone();
			$("#pic_path").append(newv);
		});
		// 提交商品的表单
		document.getElementById('form-article-add').submit();
	}
	function getSize() {
//		var url = "<?PHP //echo $this->redirect(array('Goods/ajax_get_size'));?>//";
		var pnum = $("#cat_id option:selected").attr("pnum");
		$.post(url,{pnum:pnum},function(data){
			document.getElementById('size').innerHTML = data;
		});
	}
	//日期选择器
	
</script>
</body>
</html>