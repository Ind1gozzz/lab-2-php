<?php

    namespace app\modules\admin\controllers;

    use yii\web\Controller;
    use yii\filters\AccessControl;
    use app\models\User;
    use Yii;



    
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
            $role = User::getRole();
            if ( $role == "admin" or $role == "user")
            return $this->render('index', [
                'role' => $role
            ]);
        }
        
    
        public function actionAdmin()
        {
            $role = User::getRole();
            if ($role == "admin")
            {
            return $this -> render('index-admin', [
                'role' => $role
            ]);
            }
            elseif ($role == "user")
            {
            return $this -> render('index-admin-denied', [
                'role' => $role
            ]);
            }
        }
    }
    