<?php

    namespace app\controllers;

    use yii\web\Controller;
    use app\models\Product;



    class ProductController extends Controller
    {
        public function actionIndexResult()
        {
            $query = Product::find();
            $products = $query -> orderBy('Price')
                -> all();
            return $this -> render('index-result', [
                'products' => $products
            ]);
        }

        public function actionIndex()
        {
            $model = new Product();
            return $this -> render('index',
        ['model' => $model]);
        }
    }
