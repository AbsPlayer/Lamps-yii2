<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "Products".
 *
 * @property integer $ProductID
 * @property integer $CategoryID
 * @property integer $BrandID
 * @property string $ProductName
 * @property string $ProductPrice
 * @property string $ProductInfo
 * @property string $ProductBigImage
 * @property string $ProductSmallImage
 *
 * @property Brands $brand
 * @property Categories $category
 * @property Topsale[] $topsales
 */
class Products extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'Products';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['CategoryID', 'BrandID'], 'integer'],
            [['ProductPrice'], 'number'],
            [['ProductName'], 'string', 'max' => 50],
            [['ProductInfo'], 'string', 'max' => 255],
            [['ProductBigImage', 'ProductSmallImage'], 'string', 'max' => 200],
            [['BrandID'], 'exist', 'skipOnError' => true, 'targetClass' => Brands::className(), 'targetAttribute' => ['BrandID' => 'BrandID']],
            [['CategoryID'], 'exist', 'skipOnError' => true, 'targetClass' => Categories::className(), 'targetAttribute' => ['CategoryID' => 'CategoryID']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'ProductID' => 'Product ID',
            'CategoryID' => 'Category ID',
            'BrandID' => 'Brand ID',
            'ProductName' => 'Product Name',
            'ProductPrice' => 'Product Price',
            'ProductInfo' => 'Product Info',
            'ProductBigImage' => 'Product Big Image',
            'ProductSmallImage' => 'Product Small Image',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBrand()
    {
        return $this->hasOne(Brands::className(), ['BrandID' => 'BrandID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCategory()
    {
        return $this->hasOne(Categories::className(), ['CategoryID' => 'CategoryID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTopsales()
    {
        return $this->hasMany(Topsale::className(), ['ProductID' => 'ProductID']);
    }
}
