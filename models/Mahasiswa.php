<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "mahasiswa".
 *
 * @property int $id
 * @property string $nrp
 * @property string $nama
 * @property string $alamat
 * @property string $email
 * @property string $tanggal_lahir
 * @property string|null $created_at
 * @property string|null $updated_at
 */
class Mahasiswa extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'mahasiswa';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            ['email', 'filter', 'filter' => 'trim'],
            ['email', 'required'],
            ['email', 'email'],
            [['nrp'], 'string', 'max' => 9, 'min' => 9],
            [['nrp', 'nama', 'alamat', 'tanggal_lahir'], 'required'],
            [['nama', 'alamat', 'email'], 'string', 'max' => 80],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'nrp' => 'Nrp',
            'nama' => 'Nama',
            'alamat' => 'Alamat',
            'email' => 'Email',
            'tanggal_lahir' => 'Tanggal Lahir',
        ];
    }
}
