<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "produtos".
 *
 * @property int $id
 * @property string $product_id
 * @property string $box_cod
 * @property string $detail
 * @property int $status
 * @property int $is_gs
 * @property int $is_rma
 * @property string $started_at
 * @property string $packed_at
 *
 * @property Serial $serial
 */
class Produtos extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'produtos';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['product_id', 'box_cod', 'detail', 'status', 'is_gs', 'is_rma', 'started_at', 'packed_at'], 'required'],
            [['detail', 'started_at', 'packed_at'], 'safe'],
            [['status', 'is_gs', 'is_rma'], 'integer'],
            [['product_id'], 'string', 'max' => 60],
            [['box_cod'], 'string', 'max' => 30],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'product_id' => 'Product ID',
            'box_cod' => 'Box Cod',
            'detail' => 'Detail',
            'status' => 'Status',
            'is_gs' => 'Is Gs',
            'is_rma' => 'Is Rma',
            'started_at' => 'Started At',
            'packed_at' => 'Packed At',
        ];
    }

    /**
     * Gets query for [[Serial]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSerial()
    {
        return $this->hasOne(Serial::className(), ['id' => 'id']);
    }
}
