  <?php
    use yii\helpers\Html;
    use yii\widgets\ActiveForm;
    use yii\helpers\ArrayHelper;
?>

<h2>Page for user and admin</h2>
<h2>Role: <?= Html::encode("{$role}") ?></h2>

<a class="nav-link" href="?r=admin/default/admin"><h2>To page for admin</h2></a>

