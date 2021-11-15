<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "serial".
 *
 * @property int $id
 * @property string $sn
 * @property string $type
 * @property int $product_data_id
 *
 * @property Produtos $id0
 */
class Produtos extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'serial';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['sn', 'type', 'product_data_id'], 'required'],
            [['product_data_id'], 'integer'],
            [['sn', 'type'], 'string', 'max' => 30],
            [['sn'], 'unique'],
            [['id'], 'exist', 'skipOnError' => true, 'targetClass' => Produtos::className(), 'targetAttribute' => ['id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'sn' => 'Sn',
            'type' => 'Type',
            'product_data_id' => 'Product Data ID',
        ];
    }

    /**
     * Gets query for [[Id0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getId0()
    {
        return $this->hasOne(Produtos::className(), ['id' => 'id']);
    }
}
