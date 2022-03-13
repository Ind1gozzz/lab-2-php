<?php

namespace app\modules\admin\models;

use Yii;

/**
 * This is the model class for table "producttype".
 *
 * @property int $id
 * @property string $typeName
 *
 * @property Product[] $products
 */
class Producttype extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'producttype';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['typeName'], 'required'],
            [['typeName'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'typeName' => 'Type Name',
        ];
    }

    /**
     * Gets query for [[Products]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getProducts()
    {
        return $this->hasMany(Product::className(), ['productType' => 'id']);
    }
}
