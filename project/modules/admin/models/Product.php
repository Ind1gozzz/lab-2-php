<?php

namespace app\modules\admin\models;

use Yii;

/**
 * This is the model class for table "product".
 *
 * @property int $id
 * @property string $productName
 * @property int $productType
 * @property int $price
 * @property string $description
 * @property int $quantity
 *
 * @property Producttype $productType0
 */
class Product extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'product';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['productName', 'productType', 'price', 'description', 'quantity'], 'required'],
            [['productType', 'price', 'quantity'], 'integer'],
            [['productName', 'description'], 'string', 'max' => 250],
            [['productType'], 'exist', 'skipOnError' => true, 'targetClass' => Producttype::className(), 'targetAttribute' => ['productType' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'productName' => 'Product Name',
            'productType' => 'Product Type',
            'price' => 'Price',
            'description' => 'Description',
            'quantity' => 'Quantity',
        ];
    }

    /**
     * Gets query for [[ProductType0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getProductType0()
    {
        return $this->hasOne(Producttype::className(), ['id' => 'productType']);
    }
}
