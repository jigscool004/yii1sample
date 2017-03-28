<?php

/**
 * This is the model class for table "guest_order".
 *
 * The followings are the available columns in table 'guest_order':
 * @property integer $id
 * @property integer $guest_id
 * @property string $order_date
 * @property string $order_time
 * @property string $order_name
 * @property integer $qty
 * @property double $price
 * @property double $include_tax
 * @property integer $created_by
 * @property string $created_on
 * @property integer $updated_by
 * @property string $updated_on
 */
class GuestOrder extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'guest_order';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('guest_id, order_date, order_time, order_name, qty, price, include_tax, created_by, created_on, updated_by, updated_on', 'required'),
			array('guest_id, qty, created_by, updated_by', 'numerical', 'integerOnly'=>true),
			array('price, include_tax', 'numerical'),
			array('order_name', 'length', 'max'=>50),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, guest_id, order_date, order_time, order_name, qty, price, include_tax, created_by, created_on, updated_by, updated_on', 'safe', 'on'=>'search'),
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
			'guest_id' => 'Guest',
			'order_date' => 'Order Date',
			'order_time' => 'Order Time',
			'order_name' => 'Order Name',
			'qty' => 'Qty',
			'price' => 'Price',
			'include_tax' => 'Include Tax',
			'created_by' => 'Created By',
			'created_on' => 'Created On',
			'updated_by' => 'Updated By',
			'updated_on' => 'Updated On',
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
		$criteria->compare('guest_id',$this->guest_id);
		$criteria->compare('order_date',$this->order_date,true);
		$criteria->compare('order_time',$this->order_time,true);
		$criteria->compare('order_name',$this->order_name,true);
		$criteria->compare('qty',$this->qty);
		$criteria->compare('price',$this->price);
		$criteria->compare('include_tax',$this->include_tax);
		$criteria->compare('created_by',$this->created_by);
		$criteria->compare('created_on',$this->created_on,true);
		$criteria->compare('updated_by',$this->updated_by);
		$criteria->compare('updated_on',$this->updated_on,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return GuestOrder the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
