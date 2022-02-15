<?php
    use yii\helpers\Html;
?>

<div class="col-lg-5">

    <table>
        <thead>
            <tr>
                <th>id</th>
                <th>nameTag</th>
                <th>description</th>
                <th>cost</th>
                <th>RO</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($analys as $analysis): ?>
                <tr>
                    <th><?= Html::encode("{$analys -> id}") ?></th>
                    <th><?= Html::encode("{$analys -> nameTag}") ?></th>
                    <th><?= Html::encode("{$analys -> description}") ?></th>
                    <th><?= Html::encode("{$analys -> cost}") ?></th>
                    <th><?= Html::encode("{$analys -> client -> RO}") ?></th>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

    </div>