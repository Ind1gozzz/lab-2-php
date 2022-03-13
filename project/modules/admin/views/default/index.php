  <?php
    use yii\helpers\Html;
    use yii\widgets\ActiveForm;
    use yii\helpers\ArrayHelper;
?>

<h2>Page for user and admin</h2>
<h2>Role: <?= Html::encode("{$role}") ?></h2>
<? if ($role == "admin") {
?><a class="nav-link" href="?r=admin/product/index"><h2>To page for admin</h2></a><?
} ?>


<div class="col-lg-12">

<table class="table table-striped table-bordered table-hover table-dark">
    <div class="table-responsive">
        <thead class="thead-dark">
            <tr>
                <th scope="col-lg-6">id</th>
                <th scope="col-lg-6">Product Name</th>
                <th scope="col-lg-6">Type</th>
                <th scope="col-lg-6">Price</th>
                <th scope="col-lg-6">Description</th>
                <th scope="col-lg-6">Quantity</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($products as $product): ?>
                <tr>
                    <th scope="row-lg-6"><?= Html::encode("{$product -> id}") ?></th>
                    <th scope="row-lg-6"><?= Html::encode("{$product -> productName}") ?></th>
                    <th scope="row-lg-6"><?= Html::encode("{$product -> producttype -> typeName}") ?></th>
                    <th scope="row-lg-6"><?= Html::encode("{$product -> price}") ?></th>
                    <th scope="row-lg-6"><?= Html::encode("{$product -> description}") ?></th>
                    <th scope="row-lg-6"><?= Html::encode("{$product -> quantity}") ?></th>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    </div>
