<?php

/**
 * This is the model class for table "{{goods}}".
 *
 * The followings are the available columns in table '{{goods}}':
 * @property integer $id
 * @property string $goods_name
 * @property string $title
 * @property string $tag
 * @property string $pic
 * @property string $mid_pic
 * @property string $sm_pic
 * @property integer $sort_num
 * @property string $size
 * @property string $type
 * @property string $start_time
 * @property string $end_time
 * @property string $describle
 * @property string $keywords
 * @property double $price
 * @property string $is_on_sale
 * @property string $is_hot
 * @property string $updatetime
 * @property integer $is_on
 */
class Goods extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return '{{goods}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('goods_name, price, updatetime', 'required'),
			array('sort_num, is_on', 'numerical', 'integerOnly'=>true),
			array('price', 'numerical'),
			array('goods_name', 'length', 'max'=>30),
			array('title, tag, size, type', 'length', 'max'=>20),
			array('pic, mid_pic, sm_pic', 'length', 'max'=>150),
			array('keywords', 'length', 'max'=>255),
			array('start_time, end_time, describle, is_on_sale, is_hot', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, goods_name, title, tag, pic, mid_pic, sm_pic, sort_num, size, type, start_time, end_time, describle, keywords, price, is_on_sale, is_hot, updatetime, is_on', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'goods_name' => 'Goods Name',
			'title' => 'Title',
			'tag' => 'Tag',
			'pic' => 'Pic',
			'mid_pic' => 'Mid Pic',
			'sm_pic' => 'Sm Pic',
			'sort_num' => 'Sort Num',
			'size' => 'Size',
			'type' => 'Type',
			'start_time' => 'Start Time',
			'end_time' => 'End Time',
			'describle' => 'Describle',
			'keywords' => 'Keywords',
			'price' => 'Price',
			'is_on_sale' => 'Is On Sale',
			'is_hot' => 'Is Hot',
			'updatetime' => 'Updatetime',
			'is_on' => 'Is On',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('goods_name',$this->goods_name,true);
		$criteria->compare('title',$this->title,true);
		$criteria->compare('tag',$this->tag,true);
		$criteria->compare('pic',$this->pic,true);
		$criteria->compare('mid_pic',$this->mid_pic,true);
		$criteria->compare('sm_pic',$this->sm_pic,true);
		$criteria->compare('sort_num',$this->sort_num);
		$criteria->compare('size',$this->size,true);
		$criteria->compare('type',$this->type,true);
		$criteria->compare('start_time',$this->start_time,true);
		$criteria->compare('end_time',$this->end_time,true);
		$criteria->compare('describle',$this->describle,true);
		$criteria->compare('keywords',$this->keywords,true);
		$criteria->compare('price',$this->price);
		$criteria->compare('is_on_sale',$this->is_on_sale,true);
		$criteria->compare('is_hot',$this->is_hot,true);
		$criteria->compare('updatetime',$this->updatetime,true);
		$criteria->compare('is_on',$this->is_on);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Goods the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
	public function get_all(){
		$sql = 'SELECT * FROM think_goods where is_on=1';
		return Yii::app()->db->createCommand($sql)->queryAll();
	}
	public function addGoods($arr){
		$goods = new self();
		foreach($arr as $k=>$v){
			$goods->$k = $v;
		}
		return $goods->insert();
	}
	public function getById($id){
		$res = $this->findByPk($id);
		return $res->attributes;
	}

	public function updateGoods($id,$arr){
		$goods = $this->findByPk($id);
		foreach($arr as $k=>$v){
			$goods->$k = $v;
		}
		return $goods->update();
	}

	public function deleteGoods($id){
		$sql = "update think_goods set is_on=0 where id=".$id;
		return Yii::app()->db->createCommand($sql)->execute();
//		return $this->updateByPk($id,array('is_no'=>0));
	}
}
