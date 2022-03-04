<?php
    use yii\helpers\Html;
    use yii\widgets\ActiveForm;
    use yii\helpers\ArrayHelper;

?>

<div class="row">
    <div class="col-lg-6">
        <?php $form = ActiveForm::begin(); ?>
        <?= $form -> field($model, 'secondcat') -> label("<h4>Критерий</h4>") -> dropDownList(
            ["1" => 'Цена', ], ['prompt' => 'Select...'])?> 
        
        <?= $form -> field($model, 'param') -> label("<h4>Степень соответствия</h4>") -> dropDownList(
            ["0.1" => 'Отдаленно', "0.5" => 'Близко',
            "0.7" => 'Очень близко'], ['prompt' => 'Select...'])?> 
        
        <?= $form -> field($model, 'number') -> label("<h4>Параметр</h4>") ?>

            <div>
                <?= Html::submitButton("<h5>Send</h5>", ['class' => 'btn btn-primary']) ?>
            </div> 
        <?php ActiveForm::end(); ?>
    </div>
</div>