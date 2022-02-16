<?php

    namespace app\models;

    use Yii;
    use yii\db\ActiveRecord;



    class ProductType extends ActiveRecord
    {
        public static function tableName()
        {
            return 'producttype';
        }

        public function getProduct()
        {
            return $this -> hasMany(Product::className(), ['productType' => 'id']);
        }
    }