<?php
class User extends CActiveRecord
{
    const ROLE_ADMIN = 'admin';
    const ROLE_DOKTER = 'dokter';
    const ROLE_APOTEKER = 'apoteker';
    const ROLE_KASIR = 'kasir';
    const ROLE_PETUGAS = 'petugas'; // tambahkan ini
    const ROLE_PASIEN = 'pasien';

    /**
     * Validasi password user.
     * @param string $password password yang diinput user
     * @return boolean
     */
    public function validatePassword($password)
    {
        // Jika password disimpan plain text (tidak direkomendasikan)
        return $this->password === $password;

        // Jika password sudah di-hash, gunakan:
        // return CPasswordHelper::verifyPassword($password, $this->password);
    }

    public function primaryKey()
    {
        return 'id_user';
    }

    public function search()
    {
        $criteria = new CDbCriteria;

        $criteria->compare('id_user', $this->id_user, true);
        $criteria->compare('username', $this->username, true);
        $criteria->compare('role', $this->role, true);

        return new CActiveDataProvider($this, array(
            'criteria' => $criteria,
        ));
    }

    public function getId()
    {
        return $this->id_user;
    }

    public static function model($className=__CLASS__)
    {
        return parent::model($className);
    }

    public function tableName()
    {
        return 'users';
    }

    public function rules()
    {
        return array(
            array('username, password, role', 'required'),
            array('username, password', 'length', 'max'=>50),
            array('role', 'in', 'range'=>array(
                self::ROLE_ADMIN,
                self::ROLE_DOKTER,
                self::ROLE_APOTEKER,
                self::ROLE_KASIR,
                self::ROLE_PETUGAS, // tambahkan ini
                self::ROLE_PASIEN,
            )),
            // Untuk pencarian
            array('id_user, username, role', 'safe', 'on'=>'search'),
        );
    }

    public function attributeLabels()
    {
        return array(
            'id_user' => 'ID User',
            'username' => 'Username',
            'password' => 'Password',
            'role' => 'Role',
        );
    }

    public static function getRoleOptions()
    {
        return array(
            self::ROLE_ADMIN => 'Administrator',
            self::ROLE_DOKTER => 'Dokter',
            self::ROLE_APOTEKER => 'Apoteker',
            self::ROLE_KASIR => 'Kasir',
            self::ROLE_PETUGAS => 'Petugas Pendaftaran', // tambahkan ini
            self::ROLE_PASIEN => 'Pasien',
        );
    }
}