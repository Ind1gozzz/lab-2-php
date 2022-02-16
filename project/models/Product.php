<?php

    namespace app\models;

    use Yii;
    use yii\db\ActiveRecord;



    class Product extends ActiveRecord
    {
        public $yesorno;
        public $firstcat;
        public $secondcat;



        public static function tableName()
        {
            return 'product';
        }

        public function getProducttype()
        {
            return $this -> hasOne(ProductType::className(), ['id' => 'productType']);
        }

        public function rules()
        {
            return
            [
                
            ];
        }
    }