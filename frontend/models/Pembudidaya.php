<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "pembudidaya".
 *
 * @property int $id
 * @property string $nama
 * @property string|null $no_hp
 * @property string $hasil_budidaya
 * @property string $provinsi
 * @property string $kota
 * @property string $kecamatan
 * @property string $alamat
 */
class Pembudidaya extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'pembudidaya';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nama', 'hasil_budidaya', 'provinsi', 'kota', 'kecamatan', 'alamat'], 'required'],
            [['hasil_budidaya', 'alamat'], 'string'],
            [['nama', 'no_hp', 'provinsi', 'kota', 'kecamatan'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nama' => 'Nama',
            'no_hp' => 'No Hp',
            'hasil_budidaya' => 'Hasil Budidaya',
            'provinsi' => 'Provinsi',
            'kota' => 'Kota',
            'kecamatan' => 'Kecamatan',
            'alamat' => 'Alamat',
        ];
    }
}
