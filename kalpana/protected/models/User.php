<?php

/**
 * This is the model class for table "user".
 *
 * The followings are the available columns in table 'user':
 * @property integer $id
 * @property string $name
 * @property string $login_username
 * @property string $hash_password
 * @property integer $role_id
 * @property string $email
 * @property string $mobile_no
 * @property integer $status
 * @property integer $created_by
 * @property string $created_on
 * @property integer $updated_by
 * @property string $updated_on
 */
class User extends CActiveRecord {

    public $confirmpassword;
    /**
     * @return string the associated database table name
     */
    public function tableName() {
        return 'user';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules() {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('name, login_username,role_id, email, mobile_no, created_by, created_on','required','on' => 'create,update'),
            array('hash_password','required','on' => 'create'),
            
            array('hash_password', 'compare', 'compareAttribute' => 'confirmpassword','on' => 'create,changepassword'),
            
            array('role_id, status, created_by, updated_by', 'numerical', 'integerOnly' => true),
            array('name, email', 'length', 'max' => 100),
            array('login_username', 'length', 'max' => 40),
            array('hash_password', 'length', 'max' => 255),
            array('mobile_no', 'length', 'max' => 20),
            // The following rule is used by search().
            // @todo Please remove those attributes that should not be searched.
            array('id, name, login_username, hash_password, role_id, email, mobile_no, status, created_by, created_on, updated_by, updated_on', 'safe', 'on' => 'search'),
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
            'login_username' => 'Username',
            'hash_password' => 'Password',
            'role_id' => 'Role',
            'email' => 'Email',
            'mobile_no' => 'Mobile No',
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
        $criteria->compare('login_username', $this->login_username, true);
        $criteria->compare('hash_password', $this->hash_password, true);
        $criteria->compare('role_id', $this->role_id);
        $criteria->compare('email', $this->email, true);
        $criteria->compare('mobile_no', $this->mobile_no, true);
        $criteria->compare('status', $this->status);
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
     * @return User the static model class
     */
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

}
