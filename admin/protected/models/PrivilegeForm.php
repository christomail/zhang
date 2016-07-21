<?php

/**
 * Created by PhpStorm.
 * User: 张毅
 * Date: 2016/3/21
 * Time: 17:45
 */
class PrivilegeForm extends CActiveRecord
{
    public $level;
    /**
     * 必不可缺的方法1：返回模型
     * @DateTime 2016-03-18T17:49:35+0800
     * @param    [type]                   $className [description]
     * @return   [type]                              [description]
     */
    public static function model($className = __CLASS__){
        return parent::model($className);
    }
    /**
     * 必不可缺的方法2: 返回表名
     * @DateTime 2016-03-18T17:50:45+0800
     * @return   [type]                   [description]
     */
    public function tableName(){
        return "{{privilege}}";
    }
}