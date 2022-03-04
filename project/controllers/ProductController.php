<?php

    namespace app\controllers;

    use Yii;
    use yii\web\Controller;
    use app\models\Product;



    class ProductController extends Controller
    {
        public function actionIndex()
        {
            $model = new Product();
            $query = Product::find();
            if ($model -> load(Yii::$app -> request -> post()) && $model -> validate())
            {
                if (isset($model -> boolAndOr)) { 
                    $products = $query -> orderBy('Price') -> Where("{$model -> firstcat} {$model -> boolAndOr} {$model -> secondcat}")
                        -> all();
                } else
                {
                    $products = $query -> orderBy('Price') -> Where("{$model -> firstcat}")
                    -> all();
                }
                
                return $this -> render('index-result', [
                    'products' => $products,
                    'model' => $model
                ]);
            } else 
            {
                return $this -> render('index',
                ['model' => $model]);
            }
        }

        public function actionIndexLab3()
        {
            $model = new Product();
            $query = Product::find();
            if ($model -> load(Yii::$app -> request -> post()) && $model -> validate())
            {
            
                $products = $query -> orderBy('price') -> Where("(((`product`.`price` / 1000) / '{$model -> number}') > '{$model -> param}') ") ->limit('10')
                    -> all();

                return $this -> render('index-lab3-result', [
                    'products' => $products,
                    'model' => $model
                ]);
            } else 
            {
                return $this -> render('index-lab3',
                ['model' => $model]);
            }
        }
    }