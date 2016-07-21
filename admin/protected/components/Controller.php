<?php
/**
 * Controller is the customized base controller class.
 * All controller classes for this application should extend from this base class.
 */
class Controller extends CController
{
	/**
	 * @var string the index layout for the controller view. Defaults to '//layouts/column1',
	 * meaning using a single column layout. See 'protected/views/layouts/column1.php'.
	 */
	public $layout='/layouts/main';
	/**
	 * @var array context menu items. This property will be assigned to {@link CMenu::items}.
	 */
	public $menu=array();
	public function init(){
		$this->menu = $this->get_menu();
	}
	//获取目录列表
	public function get_menu()
	{
		$sql = 'SELECT * FROM think_privilege';
		$data = Yii::app()->db->createCommand($sql)->queryAll();
		return $this->_get_children($data);
	}

	public function _get_children($data,$parent_id=0,$isclear = TRUE){
		static $result = array();
		if($isclear){
			$result = array();
		}
		foreach ($data as $key => $value) {
			if($value['parent_id'] == $parent_id){
				foreach($data as $k=>$v){
					if($v['parent_id'] == $value['id']){
						$value['children'][] = $v;
					}
				}
			$result[] = $value;
				
			}
		}
		// print_r($result);exit;
		return $result;
	}
	/**
	 * @var array the breadcrumbs of the current page. The value of this property will
	 * be assigned to {@link CBreadcrumbs::links}. Please refer to {@link CBreadcrumbs::links}
	 * for more details on how to specify this property.
	 */
	public $breadcrumbs=array();

}