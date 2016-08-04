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
        $this->goodsModel = Goods::model();
    }
    public function actionAdd(){
        if($_REQUEST){
            $param['goods_name'] = $this->getParam('goods_name');
            $param['title'] = $this->getParam('title');
            $param['tag'] = $this->getParam('tag');
            $param['cat_id'] = $this->getParam('cat_id');
            $param['sort_num'] = $this->getParam('sort_num');
            $param['price'] = $this->getParam('price');
            $param['starttime'] = $this->getParam('starttime');
            $param['endtime'] = $this->getParam('endtime');
            $param['is_on_sale'] = $this->getParam('is_on_sale');
            $param['is_hot'] = $this->getParam('is_hot');
            $param['keywords'] = $this->getParam('keywords');
            $param['describle'] = $this->getParam('describle');
            $param['creator'] = $_COOKIE['user'];
            $param['createtime'] = date('Y-m-d');
            $res = $this->goodsModel->addGoods($param);
            if($res){
                Yii::success('添加商品成功！','/goods/lst',1);
            }else{
                Yii::error('添加商品失败！','/goods/lst',1);
            }
        }else{
            $this->render('add');
        }
    }
    public function actionLst(){
        $list = $this->goodsModel->get_all();
    	$this->render('lst',array('list'=>$list));
    }

    public function actionEdit(){
        if($_POST){
            $id = $this->getParam('id');
            $param['goods_name'] = $this->getParam('goods_name');
            $param['title'] = $this->getParam('title');
            $param['tag'] = $this->getParam('tag');
            $param['cat_id'] = $this->getParam('cat_id');
            $param['sort_num'] = $this->getParam('sort_num');
            $param['price'] = $this->getParam('price');
            $param['starttime'] = $this->getParam('starttime');
            $param['endtime'] = $this->getParam('endtime');
            $param['is_on_sale'] = $this->getParam('is_on_sale');
            $param['is_hot'] = $this->getParam('is_hot');
            $param['keywords'] = $this->getParam('keywords');
            $param['describle'] = $this->getParam('describle');
            $param['updator'] = $_COOKIE['user'];
            $param['updatetime'] = date('Y-m-d');
            $res = $this->goodsModel->updateGoods($id,$param);
            if($res){
                Yii::success('修改商品成功！','/goods/lst',1);
            }else{
                Yii::error('修改商品失败！','/goods/lst',1);
            }
        }else{
            $id = $this->getParam('id');
            $list = $this->goodsModel->getById($id);
            $this->render('edit',array('list'=>$list));
        }
    }
    public function actionDelete(){
        $id = $this->getParam('id');
        $res =  $this->goodsModel->deleteGoods($id);
        if($res){
            $this->redirect('/goods/lst');
        }
    }
}