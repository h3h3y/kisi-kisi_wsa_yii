<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "pelanggan".
 *
 * @property int $id
 * @property string $nama_pelanggan
 * @property string $alamat
 */
class Pelanggan extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'pelanggan';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nama_pelanggan', 'alamat'], 'required'],
            [['nama_pelanggan', 'alamat'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nama_pelanggan' => 'Nama Pelanggan',
            'alamat' => 'Alamat',
        ];
    }
}
