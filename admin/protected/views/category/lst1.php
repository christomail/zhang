<?php
/**
 * Created by PhpStorm.
 * User: 张毅
 * Date: 2016/8/3
 * Time: 17:25
 */
?>
<div>
    <select name="first" id="first">
        <option value="0">请选择</option>
        <option value="1">甜品</option>
        <option value="10">饮品</option>
    </select>
    <select name="second" id="second">
        <option value="0">请选择</option>
    </select>
    <select name="third" id="third">
        <option value="0">请选择</option>
    </select>
</div>
<script type="text/javascript">
    $('#first').change(function(){
        var id = $('#first').val();
        var url = '/category/getcate';
        $.post(url,{id:id},function(data){
            var data = $.parseJSON(data);
            $('#second').empty();
            $('#third').empty();
            $.each(data[0],function(i,item){
                $('#second').append("<option value='"+item['id']+"'>"+item['cat_name']+"</option>");
            });
            $.each(data[1],function(i,item){
                $('#third').append("<option value='"+item['id']+"'>"+item['cat_name']+"</option>");
            });
        });
    });
    $('#second').change(function(){
        var id = $('#second').val();
        var url = '/category/getcate';
        $.post(url,{id:id},function(data){
            var data = $.parseJSON(data);
            $('#third').empty();
            $.each(data[0],function(i,item){
                $('#third').append("<option value='"+item['id']+"'>"+item['cat_name']+"</option>");
            });
        });
    });
</script>
