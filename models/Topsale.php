<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "Topsale".
 *
 * @property integer $TopsaleID
 * @property integer $ProductID
 *
 * @property Products $product
 */
class Topsale extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'Topsale';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ProductID'], 'integer'],
            [['ProductID'], 'exist', 'skipOnError' => true, 'targetClass' => Products::className(), 'targetAttribute' => ['ProductID' => 'ProductID']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'TopsaleID' => 'Topsale ID',
            'ProductID' => 'Product ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProduct()
    {
        return $this->hasOne(Products::className(), ['ProductID' => 'ProductID']);
    }
}
