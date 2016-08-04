<?php

/**
 * Created by PhpStorm.
 * User: 张毅
 * Date: 2016/8/3
 * Time: 17:32
 */
class Category extends CActiveRecord
{
    public static function model($className = __CLASS__){
        return parent::model($className);
    }

    public function tableName(){
        return "{{category}}";
    }
    public function getData($id){
        $second = $this->_get_children($id);
        $third = $this->_get_children($second[0]['id']);
        $result[0] = $second;
        $result[1] = $third;
        return $result;
    }
    public function _get_children($id){
        $res = Yii::app()->db->createCommand()
            ->select('id,cat_name')
            ->from('{{category}}')
            ->where('parent_id='.$id)
            ->queryAll();
        return $res;
    }
    public function listAll(){
        $arr = array('0'=>'顶级分类');
        $res = Yii::app()->db->createCommand()
            ->select('*')
            ->from('{{category}}')
            ->where('status=1')
            ->queryAll();
        $cat = Yii::app()->db->createCommand()
            ->select('id,cat_name')
            ->from('{{category}}')
            ->queryAll();
        foreach($cat as $v){
            $arr[$v['id']] = $v['cat_name'];
        }
        foreach($res as $k=>$v){
            $res[$k]['parent'] = $arr[$v['parent_id']];
        }
//        var_dump($res);exit;
        return $res;
    }
}