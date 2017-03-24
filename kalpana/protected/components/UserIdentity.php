<?php

/**
 * UserIdentity represents the data needed to identity a user.
 * It contains the authentication method that checks if the provided
 * data can identity the user.
 */
class UserIdentity extends CUserIdentity {

    /**
     * Authenticates a user.
     * The example implementation makes sure if the username and password
     * are both 'demo'.
     * In practical applications, this should be changed to authenticate
     * against some persistent user identity storage (e.g. database).
     *
     * @return boolean whether authentication succeeds.
     */
    public $_id;

    public function authenticate() {
        //$users = array( // username => password 'demo' => 'demo', 'admin' => 'admin', );

        $users_data = User::model()->findByAttributes(array('login_username' => $this->username));
        if (count($users_data) == 0 && $users_data == NULL) {
            $this->errorCode = self::ERROR_USERNAME_INVALID;
        } elseif (isset($users_data->hash_password) && $users_data->hash_password != $this->password) {
            $this->errorCode = self::ERROR_PASSWORD_INVALID;
        } else {
            $this->errorCode = self::ERROR_NONE;
            $this->_id = $users_data->id;
            $this->setState('username', $users_data->login_username);
            $this->setState('role_id', $users_data->role_id);


            /*$criteria = new CDbCriteria();
            $criteria->select = 'p.controller_name AS page_id,pf.field_name AS page_field_id';
            $criteria->join = ' LEFT JOIN page p ON p.id = t.page_id';
            $criteria->join .= ' LEFT JOIN page_fields pf ON pf.id = t.page_field_id';
            $criteria->compare('role_id', $users_data->role_id);
            $roleAccessData = CHtml::listData(RoleAccess::model()->findAll($criteria), 'page_field_id', 'page_field_id', 'page_id');

            //exit;
            $this->setState('pageAccessList', $roleAccessData);*/
        }

        return !$this->errorCode;
    }

    public function getId() {
        return $this->_id;
    }

}
