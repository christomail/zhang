<?php

/**
 * Created by PhpStorm.
 * User: 张毅
 * Date: 2016/3/15
 * Time: 17:51
 */
class GoodsController extends Controller
{
    protected $goodsModel;
    public function init(){
        parent::init();
        $this->goodsModel = GoodsForm::model();
    }
    // public $layout='application.modules.admin.views.layouts.main';
    public function actionAdd(){
//        $goodsModel = new GoodsForm();
//        $goods = $goodsModel->get_all();
//$goods = $goodsModel->search();
//        echo "<pre/>";
//        print_r($goods);
        $this->render('add');
    }
    public function actionLst(){
        $list = $this->goodsModel->get_all();
//        var_dump($list);exit;
    	$this->render('lst',array('list'=>$list));
    }
}