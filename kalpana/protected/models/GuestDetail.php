<?php

/**
 * This is the model class for table "guest_detail".
 *
 * The followings are the available columns in table 'guest_detail':
 * @property integer $id
 * @property string $guest_id
 * @property string $checkin_date
 * @property string $checkin_time
 * @property string $checkout_date
 * @property string $checkout_time
 * @property integer $is_checkout
 * @property integer $adult
 * @property integer $child
 * @property string $first_name
 * @property string $last_name
 * @property string $mobile_no
 * @property string $landline_no
 * @property string $gender
 * @property string $address_line1
 * @property string $address_line2
 * @property string $zipcode
 * @property string $state
 * @property string $email_id
 * @property string $license_no
 * @property string $adharecard_no
 * @property string $passport_no
 * @property string $description
 * @property string $photos
 * @property double $room_rate
 * @property double $hotel_tax
 * @property double $advance_amount
 * @property double $debit_amount
 * @property integer $created_by
 * @property string $created_on
 * @property integer $updated_by
 * @property string $updated_on
 */
class GuestDetail extends CActiveRecord {

    /**
     * @return string the associated database table name
     */
    public function tableName() {
        return 'guest_detail';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules() {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('guest_id, checkin_date, checkin_time, checkout_date, checkout_time, adult, child, first_name, last_name, mobile_no, landline_no, gender, address_line1, address_line2, zipcode, state, email_id, license_no, adharecard_no, passport_no, description, photos, room_rate, hotel_tax, advance_amount, debit_amount,room_id', 'required'),
            array('is_checkout, adult, child, created_by, updated_by', 'numerical', 'integerOnly' => true),
            array('room_rate, hotel_tax, advance_amount, debit_amount', 'numerical'),
            array('guest_id, photos', 'length', 'max' => 255),
            array('first_name, last_name, email_id', 'length', 'max' => 50),
            array('mobile_no, landline_no, zipcode', 'length', 'max' => 15),
            array('gender', 'length', 'max' => 10),
            array('address_line1, address_line2', 'length', 'max' => 100),
            array('state', 'length', 'max' => 125),
            array('license_no, adharecard_no, passport_no', 'length', 'max' => 30),
            // The following rule is used by search().
            // @todo Please remove those attributes that should not be searched.
            array('id, guest_id, checkin_date, checkin_time, checkout_date, checkout_time, is_checkout, adult, child, first_name, last_name, mobile_no, landline_no, gender, address_line1, address_line2, zipcode, state, email_id, license_no, adharecard_no, passport_no, description, photos, room_rate, hotel_tax, advance_amount, debit_amount, created_by, created_on, updated_by, updated_on', 'safe', 'on' => 'search'),
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
            'guest_id' => 'Guest',
            'checkin_date' => 'Checkin Date',
            'checkin_time' => 'Checkin Time',
            'checkout_date' => 'Checkout Date',
            'checkout_time' => 'Checkout Time',
            'is_checkout' => 'Is Checkout',
            'adult' => 'Adult',
            'child' => 'Child',
            'first_name' => 'First Name',
            'last_name' => 'Last Name',
            'mobile_no' => 'Mobile No',
            'landline_no' => 'Landline No',
            'gender' => 'Gender',
            'address_line1' => 'Address Line1',
            'address_line2' => 'Address Line2',
            'zipcode' => 'Zipcode',
            'state' => 'State',
            'email_id' => 'Email',
            'license_no' => 'License No',
            'adharecard_no' => 'Adharecard No',
            'passport_no' => 'Passport No',
            'description' => 'Description',
            'photos' => 'Photos',
            'room_rate' => 'Room Rate',
            'hotel_tax' => 'Hotel Tax',
            'advance_amount' => 'Advance Amount',
            'debit_amount' => 'Debit Amount',
            'created_by' => 'Created By',
            'created_on' => 'Created On',
            'updated_by' => 'Updated By',
            'updated_on' => 'Updated On',
            'room_id' => 'Room '
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
        $criteria->compare('guest_id', $this->guest_id, true);
        $criteria->compare('checkin_date', $this->checkin_date, true);
        $criteria->compare('checkin_time', $this->checkin_time, true);
        $criteria->compare('checkout_date', $this->checkout_date, true);
        $criteria->compare('checkout_time', $this->checkout_time, true);
        $criteria->compare('is_checkout', $this->is_checkout);
        $criteria->compare('adult', $this->adult);
        $criteria->compare('child', $this->child);
        $criteria->compare('first_name', $this->first_name, true);
        $criteria->compare('last_name', $this->last_name, true);
        $criteria->compare('mobile_no', $this->mobile_no, true);
        $criteria->compare('landline_no', $this->landline_no, true);
        $criteria->compare('gender', $this->gender, true);
        $criteria->compare('address_line1', $this->address_line1, true);
        $criteria->compare('address_line2', $this->address_line2, true);
        $criteria->compare('zipcode', $this->zipcode, true);
        $criteria->compare('state', $this->state, true);
        $criteria->compare('email_id', $this->email_id, true);
        $criteria->compare('license_no', $this->license_no, true);
        $criteria->compare('adharecard_no', $this->adharecard_no, true);
        $criteria->compare('passport_no', $this->passport_no, true);
        $criteria->compare('description', $this->description, true);
        $criteria->compare('photos', $this->photos, true);
        $criteria->compare('room_rate', $this->room_rate);
        $criteria->compare('hotel_tax', $this->hotel_tax);
        $criteria->compare('advance_amount', $this->advance_amount);
        $criteria->compare('debit_amount', $this->debit_amount);
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
     * @return GuestDetail the static model class
     */
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

}
