<?php

/**
 * Created by PhpStorm.
 * User: 张毅
 * Date: 2016/7/12
 * Time: 14:26
 */
Yii::import('ext.ueditor.UeditorController');
class EditorController extends UeditorController
{
    public function actionIndex(){
        $actions = array(
            'uploadimage' => 'UploadImage',
            'uploadscrawl' => 'UploadScrawl',
            'uploadvideo' => 'UploadVideo',
            'uploadfile' => 'UploadFile',
            'listimage' => 'ListImage',
            'listfile' => 'ListFile',
            'catchimage' => 'CatchImage',
            'config' => 'Config'
        );
        if (isset($actions[$_GET['action']])) {
            $this->run($actions[$_GET['action']]);
        } else {
            $this->show(array(
                'state' => '请求地址出错'
            ));
        }
    }
}