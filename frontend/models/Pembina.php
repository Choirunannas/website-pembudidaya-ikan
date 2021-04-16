<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "pembina".
 *
 * @property int $id_pembina
 * @property string $nama
 * @property string $no_hp
 * @property string $provinsi
 * @property string $kota
 * @property string $kecamatan
 */
class Pembina extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'pembina';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nama', 'no_hp', 'provinsi', 'kota', 'kecamatan'], 'required'],
            [['nama', 'no_hp', 'provinsi', 'kota', 'kecamatan'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_pembina' => 'Id Pembina',
            'nama' => 'Nama',
            'no_hp' => 'No Hp',
            'provinsi' => 'Provinsi',
            'kota' => 'Kota',
            'kecamatan' => 'Kecamatan',
        ];
    }
}
