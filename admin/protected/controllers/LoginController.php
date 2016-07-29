<?php

/**
 * Created by PhpStorm.
 * User: 张毅
 * Date: 2016/3/16
 * Time: 18:00
 */
class LoginController extends CController
{
    public $layout='application.modules.admin.views.layouts.login';
    public function actionLogin(){
    	$loginForm = new LoginForm();
    		if(isset($_POST['LoginForm'])){
    			$loginForm->attributes = $_POST['LoginForm'];
//				var_dump($loginForm->attributes);exit;
    			 if($loginForm->validate() && $loginForm->login()){
					 setcookie('user',$loginForm->attributes['username'],time()+3600,'/','moxi.com');
					 $this->redirect(array('Index/index'));
    			 }
    		}
        $this->render('login',array('loginForm'=>$loginForm));
    }
    public function actions()
    {
    	# code...
    	return array(
    		'captcha' => array(
    			'class' => 'system.web.widgets.captcha.CCaptchaAction',
    			'height'=>35,
    			'width' =>100,
    			'minLength'=>1,
    			'maxLength'=>3,

    			),
    		);
    }
	public function actionOut(){
		if(setcookie('user','',time()-1,'/','moxi.com')){
			Yii::app()->user->logout();
			$this->redirect(array('login'));
		}
	}
}