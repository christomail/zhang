<!DOCTYPE>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>后台模板管理系统</title>
    <link type="text/css" rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl;?>/css/style.css" />
    <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl;?>/js/jquery-1.8.3.min.js"></script>
    <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl;?>/js/menu.js"></script>
</head>
<?php
$menu = $this->get_menu();
$i=1;
?>
<body>
<div class="top"></div>
<div id="header">
    <div class="logo">Zhy Ｃ&Ｔ后台管理系统</div>
    <div class="navigation">
        <ul>
            <li>欢迎您！</li>
            <li><a href="javascript:void(0);"><?php echo Yii::app()->user->name;?></a></li>
            <li><a href="">修改密码</a></li>
            <li><a href="">设置</a></li>
            <li><a href="<?php echo $this->createUrl('login/out');?>">退出</a></li>
        </ul>
    </div>
</div>
<div id="content">
    <div class="left_menu">
        <ul id="nav_dot">
           <?php foreach($menu as $k=>$v){;?>
            <li>
                <h4 class="M<?php echo $i++;?>"><span></span><?php echo $v['pri_name'];?></h4>
                <div class="list-item none">
                    <?php foreach($v['children'] as $k1=>$v1){;?>
                        <a href="<?php
                            $url = $v1['controller_name']."/".$v1['action_name'];
                            echo $this->createUrl($url);
                        ?>"><?php echo $v1['pri_name'];?></a>
                    <?php };?>
                </div>
            </li>
            <?php };?>
        </ul>
    </div>
    <div class="m-right">
    <?php echo $content;?>
    </div>
</div>

<script>navList(12);</script>
</body>
</html>
