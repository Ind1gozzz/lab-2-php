<?php
    use yii\helpers\Html;
    use yii\widgets\ActiveForm;
    use yii\helpers\ArrayHelper;

?>

<div class="row">
    <div class="col-lg-6">
        <?php $form = ActiveForm::begin(); ?>
        <?= $form -> field($model, 'yesorno') -> label("<h4>Yes or No</h4>") -> radioList(['Yes' => 'Yes', 'No' => 'No'], ['unselect' => null]) ?> 
        <?= $form -> field($model, 'firstcat') -> label("<h4></h4>") -> dropDownList(
            ['1' => 'Бюджетные инструменты', '2' => 'Инструменты среднего сегмента', '3' => 'Премиальные инструменты',
            '4' => 'Не бюджетные инструменты', '5' => 'Не иструменты среднего сегмента', '6' => 'Не премиальные инструменты'], ['prompt' => 'Select...'])?> 
        <?= $form -> field($model, 'secondcat') -> label("<h4></h4>") -> dropDownList(
            ['1' => 'Бюджетные инструменты', '2' => 'Инструменты среднего сегмента', '3' => 'Премиальные инструменты',
            '4' => 'Не бюджетные инструменты', '5' => 'Не иструменты среднего сегмента', '6' => 'Не премиальные инструменты'], ['prompt' => 'Select...'])?> 
            <div>
                <?= Html::submitButton("<h5>Send</h5>", ['class' => 'btn btn-primary']) ?>
            </div> 
        <?php ActiveForm::end(); ?>
    </div>
</div>