<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "pegawai".
 *
 * @property string $pegawai_id
 * @property string $nama
 * @property string $gender
 */
class Pegawai extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'pegawai';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['pegawai_id', 'nama', 'gender'], 'required'],
            [['pegawai_id'], 'string', 'max' => 20],
            [['nama'], 'string', 'max' => 200],
            [['gender'], 'string', 'max' => 1],
            [['pegawai_id'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'pegawai_id' => 'Pegawai ID',
            'nama' => 'Nama',
            'gender' => 'Gender',
        ];
    }
}
