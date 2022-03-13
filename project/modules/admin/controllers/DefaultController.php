<?php

    namespace app\modules\admin\controllers;

    use yii\web\Controller;
    use yii\filters\AccessControl;
    use app\models\User;
    use Yii;
    use app\models\Product;



    
    class DefaultController extends Controller
    {
        public function behaviors()
        {
            return
            [
                'access' => [
                    'class' => AccessControl::className(),
                    'rules' => [
                        [
                            'allow' => true,
                            'roles' => ['@']
                        ]
                    ]
                ]
            ];
        }

        /**
         * Renders the index view for the module
         * @return string
         */
        public function actionIndex()
        {
            $prod = Product::find();
            $products = $prod -> limit('15') -> all();
            $role = User::getRole();
            if ( $role == "admin" or $role == "user")
            return $this->render('index', [
                'role' => $role,
                'products' => $products
            ]);
        }
        
    
        public function actionAdmin()
        {
            $prod = Product::find();
            $products = $prod -> limit('15') -> all();
            $role = User::getRole();
            if ($role == "admin")
            {
            return $this -> render('index-admin', [
                'role' => $role,
                'products' => $products
            ]);
            }
            elseif ($role == "user")
            {
            return $this -> render('index-admin-denied', [
                'role' => $role,
                'products' => $products
            ]);
            }
        }
    }
    