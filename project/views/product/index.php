<?php
    use yii\helpers\Html;
    use yii\widgets\ActiveForm;
    use yii\helpers\ArrayHelper;

?>

<div class="row">
    <div class="col-lg-6">
        <?php $form = ActiveForm::begin(); ?>
        <?= $form -> field($model, 'boolAndOr') -> label("<h4>And | Or</h4>") -> radioList(["And" => 'And', "Or" => 'Or'], ['unselect' => null]) ?> 
        <?= $form -> field($model, 'firstcat') -> label("<h4></h4>") -> dropDownList(
            ["((5 - price / 1000) / 120 + 1 >= 0.75)" => 'Бюджетные инструменты', "(((-(price / 1000 - 70) / 30 + 1) >= 0.75) and ((price / 1000) / 30 >= 0.75))" => 'Инструменты среднего сегмента',
            "((price / 1000) / 80 >= 0.75)" => 'Премиальные инструменты', "((5 + price / 1000) / 120 >= 0.75)" => 'Не бюджетные инструменты',
            "((1 - (price / 1000) / 30) >= 0.75 or (1 + ((price / 1000 - 70) / 30) - 1) >= 0.75)" => 'Не иструменты среднего сегмента',
            "(1 - ((price / 1000) / 80) >= 0.75)" => 'Не премиальные инструменты'], ['prompt' => 'Select...'])?> 
        <?= $form -> field($model, 'secondcat') -> label("<h4></h4>") -> dropDownList(
            ["((5 - price / 1000) / 120 + 1 >= 0.75)" => 'Бюджетные инструменты', "(((-(price / 1000 - 70) / 30 + 1) >= 0.75) and ((price / 1000) / 30 >= 0.75))" => 'Инструменты среднего сегмента',
            "((price / 1000) / 80 >= 0.75)" => 'Премиальные инструменты', "((5 + price / 1000) / 120 >= 0.75)" => 'Не бюджетные инструменты',
            "((1 - (price / 1000) / 30) >= 0.75 or (1 + ((price / 1000 - 70) / 30) - 1) >= 0.75)" => 'Не иструменты среднего сегмента',
            "(1 - ((price / 1000) / 80) >= 0.75)" => 'Не премиальные инструменты'], ['prompt' => 'Select...'])?> 
            <div>
                <?= Html::submitButton("<h5>Send</h5>", ['class' => 'btn btn-primary']) ?>
            </div> 
        <?php ActiveForm::end(); ?>
    </div>
</div>
<br>
<?php echo(pow(38, 29) % 91); ?>
<br>
<?echo(7 % 5);?>