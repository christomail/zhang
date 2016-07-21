<?php 
/**
* 后台用户模型
*/
class AdminForm extends CActiveRecord
{
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
		return "{{admin}}";
	}
	/**
	 * 获取当前管理员的权限
	 * @DateTime 2016-03-22T15:12:04+0800
	 * @return   [type]                   [description]
	 */
	public function get_pri(){
		$pri = Yii::app()->db->createCommand()->select('*')->from('think_privilege')->queryAll();
		foreach($pri as $k=>$v){
			$priData = $v['pri_name'];
		}
	}
}

 ?>