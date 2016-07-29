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
    public function actionAdd(){
        if($_REQUEST){
            $this->getParam('goods_name');
            $this->getParam('title');
            $this->getParam('tag');
            $this->getParam('cat_id');
            $this->getParam('sort_num');
            $this->getParam('price');
            $this->getParam('starttime');
            $this->getParam('endtime');
            $this->getParam('is_on_sale');
            $this->getParam('is_hot');
            $this->getParam('keywords');
            $this->getParam('content');
            $this->getParam('');

        }else{
            $this->render('add');
        }
    }
    public function actionLst(){
        $list = $this->goodsModel->get_all();
//        var_dump($list);exit;
    	$this->render('lst',array('list'=>$list));
    }
}