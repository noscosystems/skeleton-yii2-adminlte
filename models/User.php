<?php

namespace app\models;

use Yii;
use yii\web\IdentityInterface;

/**
 * This is the model class for table "user".
 *
 * @property integer $id
 * @property string $username
 * @property string $password
 * @property integer $admin
 * @property integer $branch
 * @property string $firstname
 * @property string $lastname
 * @property string $contact
 * @property string $email
 * @property string $security
 * @property string $authKey
 * @property string $accessToken
 * @property integer $created
 */
class User extends \yii\db\ActiveRecord implements \yii\web\IdentityInterface
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'user';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['username', 'password', 'created'], 'required'],
            [['admin', 'branch', 'created'], 'integer'],
            [['authKey', 'accessToken'], 'string'],
            [['username', 'password', 'firstname', 'lastname', 'email', 'security'], 'string', 'max' => 128],
            [['contact'], 'string', 'max' => 20]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'username' => 'Username',
            'password' => 'Password',
            'admin' => 'Admin',
            'branch' => 'Branch',
            'firstname' => 'Firstname',
            'lastname' => 'Lastname',
            'contact' => 'Contact',
            'email' => 'Email',
            'security' => 'Security',
            'authKey' => 'Auth Key',
            'accessToken' => 'Access Token',
            'created' => 'Created',
        ];
    }

    /**
     * @inheritdoc
     */
    public static function findIdentity($id) {
        $dbUser = User::find()
                ->where([
                    "id" => $id
                ])
                ->one();
        if (!count($dbUser)) {
            return null;
        }
        return new static($dbUser);
    }

    /**
     * @inheritdoc
     */
    public static function findIdentityByAccessToken($token, $userType = null) {
        $dbUser = User::find()
                ->where(["accessToken" => $token])
                ->one();
        if (!count($dbUser)) {
            return null;
        }
        return new static($dbUser);
    }

    /**
     * Finds user by username
     *
     * @param  string      $username
     * @return static|null
     */
    public static function findByUsername($username) {
        $dbUser = User::find()
                ->where([
                    "username" => $username
                ])
                ->one();
        if (!count($dbUser)) {
            return null;
        }
        return new static($dbUser);
    }

    /**
     * Finds user by email
     *
     * @param  string      $email
     * @return static|null
     */
    public static function findByEmail($email) {
        $dbUser = User::find()
                ->where([
                    "email" => $email
                ])
                ->one();
        if (!count($dbUser)) {
            return null;
        }
        return new static($dbUser);
    }

    /**
     * @inheritdoc
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @inheritdoc
     */
    public function getAuthKey()
    {
        return $this->authKey;
    }

    /**
     * @inheritdoc
     */
    public function validateAuthKey($authKey)
    {
        return $this->authKey === $authKey;
    }

    /**
     * Validates password
     *
     * @param  string  $password password to validate
     * @return boolean if password provided is valid for current user
     */
    public function validatePassword($password)
    {
        return (Yii::$app->getSecurity()->validatePassword($password, $this->password));
    }

    /**
     * Before saving the record
     *
     * @param  boolean $insert Whether this method called while inserting a record. If false, it means the method is called while updating a record.
     * @return boolean Whether the insertion or updating should continue. If false, the insertion or updating will be cancelled.
     */
    public function beforeSave($insert) {
        if (parent::beforeSave($insert)) {
            if (strlen($this->password) < 59)      
                $this->password = Yii::$app->getSecurity()->generatePasswordHash($this->password);
            return true;
        } else {
            return false;
        }
    }
}
