<link rel="stylesheet" href="/public/datepicker/css/jquery-ui.css">
<script src="/public/datepicker/js/jquery-1.11.3.min.js"></script>
<script src="/public/datepicker/js/jquery-ui.js"></script>
<script type="text/javascript">
    $(function() {
        $( ".datepicker" ).datepicker();
    });
</script>
<style type="text/css">
    .sub input {
        width: 80px;
        height:30px;
        font-family: 微软雅黑;
        font-size: larger;
        background-color: #6ce26c;
        margin: 5px 20px;
    }
</style>
<div class="right-nav">
    <ul>
        <li><img src="<?php echo Yii::app()->request->baseUrl;?>/images/home.png"></li>
        <li style="margin-left:25px;">您当前的位置：</li>
        <li><a href="javascript:;">商品模块</a></li>
        <li>></li>
        <li><a href="javascript:;">添加商品</a></li>
    </ul>
    <a href="<?php echo $this->createUrl('/goods/lst');?>"><div class="return"><h3>返回列表</h3></div></a>
</div>
<div class="pd-20">
    <form action="/goods/edit" method="post" class="form form-horizontal" id="form-article-add" target="_self">
        <input type="hidden" name="id" value="<?php echo $list['id'];?>">
        <table class="tab_goods">
            <tr>
                <th>产品标题：</th>
                <td><input type="text" name="goods_name" class="input-text" value="<?php echo $list['goods_name'];?>"></td>
            </tr>
            <tr>
                <th>简略标题：</th>
                <td><input type="text" name="title" class="input-text" value="<?php echo $list['title'];?>"></td>
            </tr>
            <tr>
                <th>标签：</th>
                <td><input type="text" name="tag" class="input-text" value="<?php echo $list['tag'];?>"></td>
            </tr>
            <tr>
                <th>产品分类：</th>
                <td>
                    <select name="cat_id" id="">
                        <option value="1">分类1</option>
                    </select>
                </td>
            </tr>
            <tr>
                <th>排序值：</th>
                <td><input type="text" name="sort_num" class="input-text" value="<?php echo $list['sort_num'];?>"></td>
            </tr>
            <tr>
                <th>价格：</th>
                <td><input type="text" name="price" class="input-text" value="<?php echo $list['price'];?>">元</td>
            </tr>
            <tr>
                <th>销售开始时间：</th>
                <td><input type="text" class="datepicker" name="starttime" id="dpd1" value="<?php echo $list['starttime'];?>"></td>
            </tr>
            <tr>
                <th>销售结束时间：</th>
                <td><input type="text" class="datepicker" name="endtime" id="dpd2" value="<?php echo $list['endtime'];?>"></td>
            </tr>
            <tr>
                <th>是否促销：</th>
                <td>
                    <input type="radio" name="is_on_sale" value="是" <?php if($list['is_on_sale']=="是") echo "checked='checked'";?>/>是
                    <input type="radio" name="is_on_sale" value="否" <?php if($list['is_on_sale']=="否") echo "checked='checked'";?>/>否
                </td>
            </tr>
            <tr>
                <th>是否热销：</th>
                <td>
                    <input type="radio" name="is_hot" value="是" <?php if($list['is_hot']=="是") echo "checked='checked'";?>/>是
                    <input type="radio" name="is_hot" value="否" <?php if($list['is_hot']=="否") echo "checked='checked'";?>/>否
                </td>
            </tr>
            <tr>
                <th>关键字：</th>
                <td><input type="text" class="input_text" name="keywords" value="<?php echo $list['keywords'];?>"></td>
            </tr>
            <tr>
                <th>详细内容：</th>
                <td>
                    <?php
                    $this->widget('ext.ueditor.UeditorWidget',
                        array(
                            'id'=>'content_id',//页面中输入框（或其他初始化容器）的ID
                            'name'=>'describle',//指定ueditor实例的名称,个页面有多个ueditor实例时使用
                            'value' => $list['describle'],
                            'config'=> array(
                                'serverUrl'=>Yii::app()->createUrl('/editor/index'),
                                'initialFrameHeight'=>'300',
                                'initialFrameWidth'=>'700',
                            )
                        )
                    );?>
                </td>
            </tr>
            <tr class="sub">
                <td colspan="2">
                    <center><input type="button" value="提交" onclick="$('#form-article-add').submit();"> | <input type="button" value="取消" onclick="window.location.href='/goods/lst'"></center>
                </td>
            </tr>
        </table>
    </form>
</div>
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