<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "Categories".
 *
 * @property integer $CategoryID
 * @property string $CategoryName
 * @property string $CategoryInfo
 * @property integer $Accomp
 *
 * @property Products[] $products
 */
class Categories extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'Categories';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Accomp'], 'integer'],
            [['CategoryName'], 'string', 'max' => 50],
            [['CategoryInfo'], 'string', 'max' => 200],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'CategoryID' => 'Category ID',
            'CategoryName' => 'Category Name',
            'CategoryInfo' => 'Category Info',
            'Accomp' => 'Accomp',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProducts()
    {
        return $this->hasMany(Products::className(), ['CategoryID' => 'CategoryID']);
    }
}
