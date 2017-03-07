<?php

/**
 * This is the model class for table "hotel".
 *
 * The followings are the available columns in table 'hotel':
 * @property integer $id
 * @property string $hotel_name
 * @property string $owner_name
 * @property string $address_line_one
 * @property string $address_line_two
 * @property string $zip_code
 * @property string $address_other
 * @property string $mobile_no
 * @property string $hotel_phone_no
 * @property string $reservation_no
 * @property string $email
 * @property string $website
 * @property string $check_in
 * @property string $check_out
 * @property string $creatd_on
 * @property integer $created_by
 * @property string $updated_on
 * @property integer $updated_by
 */
class Hotel extends CActiveRecord {

    /**
     * @return string the associated database table name
     */
    public function tableName() {
        return 'hotel';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules() {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('hotel_name, owner_name, address_line_one, address_line_two, zip_code, address_other, mobile_no, hotel_phone_no, reservation_no, email, website, check_in, check_out', 'required'),
            array('created_by, updated_by', 'numerical', 'integerOnly' => true),
            array('hotel_name, address_other', 'length', 'max' => 255),
            array('owner_name, address_line_one, address_line_two', 'length', 'max' => 100),
            array('zip_code', 'length', 'max' => 10),
            array('mobile_no, hotel_phone_no, reservation_no', 'length', 'max' => 15),
            array('mobile_no, hotel_phone_no, reservation_no', 'numerical'),
            array('email', 'length', 'max' => 60),
            array('email', 'email'),
            array('website', 'url'),
            array('creatd_on,updated_on','safe'),
            // The following rule is used by search().
            // @todo Please remove those attributes that should not be searched.
            array('id, hotel_name, owner_name, address_line_one, address_line_two, zip_code, address_other, mobile_no, hotel_phone_no, reservation_no, email, website, check_in, check_out, creatd_on, created_by, updated_on, updated_by', 'safe', 'on' => 'search'),
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
            'hotel_name' => 'Hotel Name',
            'owner_name' => 'Owner Name',
            'address_line_one' => 'Address Line One',
            'address_line_two' => 'Address Line Two',
            'zip_code' => 'Zip Code',
            'address_other' => 'Address Other',
            'mobile_no' => 'Mobile No',
            'hotel_phone_no' => 'Hotel Phone No',
            'reservation_no' => 'Reservation No',
            'email' => 'Email',
            'website' => 'Website',
            'check_in' => 'Check In',
            'check_out' => 'Check Out',
            'creatd_on' => 'Creatd On',
            'created_by' => 'Created By',
            'updated_on' => 'Updated On',
            'updated_by' => 'Updated By',
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
        $criteria->compare('hotel_name', $this->hotel_name, true);
        $criteria->compare('owner_name', $this->owner_name, true);
        $criteria->compare('address_line_one', $this->address_line_one, true);
        $criteria->compare('address_line_two', $this->address_line_two, true);
        $criteria->compare('zip_code', $this->zip_code, true);
        $criteria->compare('address_other', $this->address_other, true);
        $criteria->compare('mobile_no', $this->mobile_no, true);
        $criteria->compare('hotel_phone_no', $this->hotel_phone_no, true);
        $criteria->compare('reservation_no', $this->reservation_no, true);
        $criteria->compare('email', $this->email, true);
        $criteria->compare('website', $this->website, true);
        $criteria->compare('check_in', $this->check_in, true);
        $criteria->compare('check_out', $this->check_out, true);
        $criteria->compare('creatd_on', $this->creatd_on, true);
        $criteria->compare('created_by', $this->created_by);
        $criteria->compare('updated_on', $this->updated_on, true);
        $criteria->compare('updated_by', $this->updated_by);

        return new CActiveDataProvider($this, array(
            'criteria' => $criteria,
        ));
    }

    /**
     * Returns the static model of the specified AR class.
     * Please note that you should have this exact method in all your CActiveRecord descendants!
     * @param string $className active record class name.
     * @return Hotel the static model class
     */
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

}
