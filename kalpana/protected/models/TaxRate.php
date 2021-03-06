<?php

/**
 * This is the model class for table "tax_rate".
 *
 * The followings are the available columns in table 'tax_rate':
 * @property integer $id
 * @property string $name
 * @property integer $rate
 * @property integer $category_id
 * @property integer $status
 * @property integer $created_by
 * @property string $created_on
 * @property string $updated_by
 * @property integer $updated_on
 */
class TaxRate extends CActiveRecord {

    /**
     * @return string the associated database table name
     */
    public function tableName() {
        return 'tax_rate';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules() {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('name, rate, category_id, status', 'required'),
            array('name, rate, category_id, status, created_by, created_on, updated_by, updated_on', 'safe'),
            array('rate, category_id, status, created_by, updated_on', 'numerical', 'integerOnly' => true),
            array('name', 'length', 'max' => 255),
            // The following rule is used by search().
            // @todo Please remove those attributes that should not be searched.
            array('id, name, rate, category_id, status, created_by, created_on, updated_by, updated_on', 'safe', 'on' => 'search'),
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
            'name' => 'Name',
            'rate' => 'Rate',
            'category_id' => 'Category',
            'status' => 'Status',
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
        $criteria->compare('name', $this->name, true);
        $criteria->compare('rate', $this->rate);
        $criteria->compare('category_id', $this->category_id);
        $criteria->compare('status', $this->status);
        $criteria->compare('created_by', $this->created_by);
        $criteria->compare('created_on', $this->created_on, true);
        $criteria->compare('updated_by', $this->updated_by, true);
        $criteria->compare('updated_on', $this->updated_on);

        return new CActiveDataProvider($this, array(
            'criteria' => $criteria,
        ));
    }

    /**
     * Returns the static model of the specified AR class.
     * Please note that you should have this exact method in all your CActiveRecord descendants!
     * @param string $className active record class name.
     * @return TaxRate the static model class
     */
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

}
