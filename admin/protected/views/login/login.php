<!DOCTYPE html>
<html >
<head>
<meta charset="UTF-8">
<title>Login Form</title>

<link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl;?>/css/normalize.css">

</head>

<body>

<div class="login">
    <h1>Login</h1>
    <?php $form = $this->beginWidget('CActiveForm');?>
        <?php echo $form->textField($loginForm, 'username', array('class'=>'d1','placeholder'=>'用户名','required'=>'required'));?>
        <?php echo $form->passwordField($loginForm, 'password', array('class'=>'d1','placeholder'=>'密码','required'=>'required'));?>
        <?php echo $form->textField($loginForm, 'captcha', array('class'=>'d2','placeholder'=>'验证码','required'=>'required'));?>

        <div class="captcha">
            <?php $this->widget('CCaptcha',array('showRefreshButton'=>false,'clickableImage'=>true,'imageOptions'=>array('alt'=>'点击换图','title'=>'点击换图','style'=>'cursor:pointer')));?>
        </div>
        <button type="submit" class="btn btn-primary btn-block btn-large">登录</button>
    <?php $this->endWidget();?>

<ul id="peo">
    <li class="error"><?php echo $form->error($loginForm,'username'); ?></li>
</ul>
<ul id="psd">
    <li class="error"><?php echo $form->error($loginForm,'password'); ?></li>
</ul>
<ul id="ver">
    <li class="error"><?php echo $form->error($loginForm,'captcha'); ?></li>
</ul>
</div>

</body>
</html>
