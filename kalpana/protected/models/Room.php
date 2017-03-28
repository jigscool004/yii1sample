<?php

/**
 * This is the model class for table "room".
 *
 * The followings are the available columns in table 'room':
 * @property integer $id
 * @property string $room_no
 * @property string $floor_no
 * @property string $room_name
 * @property integer $single_bed
 * @property integer $double_bed
 * @property integer $extra_bed
 * @property integer $room_rate
 * @property string $description
 * @property string $equipment_id
 * @property integer $created_by
 * @property string $created_on
 * @property integer $updated_by
 * @property string $updated_on
 */
class Room extends CActiveRecord {

    public $equipment_name;

    /**
     * @return string the associated database table name
     */
    public function tableName() {
        return 'room';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules() {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('room_no,floor_no,room_name,room_rate', 'required'),
            array('room_no', 'unique', 'criteria' => array(
                    'condition' => 'room_no = :room_no',
                    'params' => array(
                        ':room_no' => $this->room_no
                    )
                )),
            array('single_bed, double_bed, extra_bed, room_rate, created_by, updated_by', 'numerical', 'integerOnly' => true),
            array('room_no, floor_no, equipment_id', 'length', 'max' => 20),
            array('room_name', 'length', 'max' => 50),
            array('description, created_on, updated_on', 'safe'),
            // The following rule is used by search().
            // @todo Please remove those attributes that should not be searched.
            array('id, room_no, floor_no, room_name, single_bed, double_bed, extra_bed, room_rate, description, equipment_id, column_11, created_by, created_on, updated_by, updated_on', 'safe', 'on' => 'search'),
        );
    }

    /**
     * @return array relational rules.
     */
    public function relations() {
        // NOTE: you may need to adjust the relation name and the related
        // class name for the relations automatically generated below.
        return array(
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels() {
        return array(
            'id' => 'ID',
            'room_no' => 'Room No',
            'floor_no' => 'Floor No',
            'room_name' => 'Room Name',
            'single_bed' => 'Single Bed',
            'double_bed' => 'Double Bed',
            'extra_bed' => 'Extra Bed',
            'room_rate' => 'Room Rate',
            'description' => 'Description',
            'equipment_id' => 'Equipment',
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
    public function search() {
        // @todo Please modify the following code to remove attributes that should not be searched.

        $criteria = new CDbCriteria;

        $criteria->compare('id', $this->id);
        $criteria->compare('room_no', $this->room_no, true);
        $criteria->compare('floor_no', $this->floor_no, true);
        $criteria->compare('room_name', $this->room_name, true);
        $criteria->compare('single_bed', $this->single_bed);
        $criteria->compare('double_bed', $this->double_bed);
        $criteria->compare('extra_bed', $this->extra_bed);
        $criteria->compare('room_rate', $this->room_rate);
        $criteria->compare('description', $this->description, true);
        $criteria->compare('equipment_id', $this->equipment_id, true);
        $criteria->compare('created_by', $this->created_by);
        $criteria->compare('created_on', $this->created_on, true);
        $criteria->compare('updated_by', $this->updated_by);
        $criteria->compare('updated_on', $this->updated_on, true);

        return new CActiveDataProvider($this, array(
            'criteria' => $criteria,
        ));
    }

    /**
     * Returns the static model of the specified AR class.
     * Please note that you should have this exact method in all your CActiveRecord descendants!
     * @param string $className active record class name.
     * @return Room the static model class
     */
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

}
