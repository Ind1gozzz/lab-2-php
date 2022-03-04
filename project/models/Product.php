<?php

    namespace app\models;

    use Yii;
    use yii\db\ActiveRecord;



    class Product extends ActiveRecord
    {
        public $boolAndOr;
        public $firstcat;
        public $secondcat;
        public $number;
        public $param;

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
                [['boolAndOr', 'firstcat', 'secondcat'], 'string'],
                [['number', 'param'], 'number',],
            ];
        }
    }