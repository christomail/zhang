<?php

/**
 * Created by PhpStorm.
 * User: 张毅
 * Date: 2016/8/3
 * Time: 17:24
 */
class CategoryController extends Controller
{
    private $catModel;
    public function init(){
        parent::init();
        $this->catModel = Category::model();
    }

    public function actionIndex(){
        $list = $this->catModel->listAll();
        $this->render('lst',array('list'=>$list));
    }
    public function actionGetcate(){
        $id = $this->getParam('id');
        $data = Category::model()->getData($id);
        echo json_encode($data);
    }
}