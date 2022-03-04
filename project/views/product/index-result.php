<?php
    use yii\helpers\Html;
    use yii\widgets\ActiveForm;
    use yii\helpers\ArrayHelper;

?>

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

    <div class="data-php" id="data-php-1" value="<?="{$model -> firstcat}"?>"></div>
    <div class="data-php" id="data-php-2" value="<?="{$model -> secondcat}"?>"></div>

    <div class="container">
        <canvas id="chart">
            /
        </canvas>
    </div>

    <style>
        canvas {
            border: 1px solid black;
            width: 600px;
            height: 800px;
        }
    </style>

    <script>
        const WIDTH = 600;
        const HEIGHT = 150;
        const DPI_WIDTH = WIDTH * 2;
        const DPI_HEIGHT = HEIGHT * 2;
        const ROWS_COUNT = 10;

        const dataArray1 = [
            [0,   100],
            [50,   100],
            [50,  100],
            [100, 95.83333333],
            [150, 91.66666667],
            [200, 87.5],
            [250, 83.33333333],
            [300, 79.16666667],
            [350, 75],
            [400, 70.83333333],
            [450, 66.66666667],
            [500, 62.5],
            [550, 58.33333333],
            [600, 54.16666667],
            [650, 50],
            [700, 45.83333333],
            [750, 41.66666667],
            [800, 37.5],
            [850, 33.33333333],
            [900, 29.16666667],
            [950, 25],
            [1000,20.83333333],
            [1050,16.66666667],
            [1100,12.5],
            [1150,8.333333333],
            [1200,4.166666667],
        ];

        const dataArray2 = [
            [0, 16.66666667],
            [0, 33.33333333],
            [50, 50],
            [100, 66.66666667],
            [150, 83.33333333],
            [200, 100],
            [250, 100],
            [300, 100],
            [350, 100],
            [400, 100],
            [450, 100],
            [500, 100],
            [550, 100],
            [600, 100],
            [650, 100],
            [700, 100],
            [750, 83.33333333],
            [800, 66.66666667],
            [850, 50],
            [900, 33.33333333],
            [950, 16.66666667],
            [1000, 0],
        ];

        const dataArray3 = [
            [0, 0],
            [0, 6.25],
            [50, 12.5],
            [100, 18.75],
            [150, 25],
            [200, 31.25],
            [250, 37.5],
            [300, 43.75],
            [350, 50],
            [400, 56.25],
            [450, 62.5],
            [500, 68.75],
            [550, 75],
            [600, 81.25],
            [650, 87.5],
            [700, 93.75],
            [750, 100],
            [800, 100],
            [850, 100],
            [900, 100],
            [950, 100],
            [1000,100],
            [1050,100],
            [1100,100],
            [1150,100],
            [1200,100],
        ];

        const dataArray4 = [
            [0, 0],
            [50, 0],
            [100, 4.166666667],
            [150, 8.333333333],
            [200, 12.5],
            [250, 16.66666667],
            [300, 20.83333333],
            [350, 25],
            [400, 29.16666667],
            [450, 33.33333333],
            [500, 37.5],
            [550, 41.66666667],
            [600, 45.83333333],
            [650, 50],
            [700, 54.16666667],
            [750, 58.33333333],
            [800, 62.5],
            [850, 66.66666667],
            [900, 70.83333333],
            [950, 75],
            [1000, 79.16666667],
            [1050, 83.33333333],
            [1100, 87.5],
            [1150, 91.66666667],
            [1200, 95.83333333],
        ];

        const dataArray5 = [
            [0, 100],
            [50, 83.33333333],
            [100, 66.66666667],
            [150, 50],
            [200, 33.33333333],
            [250, 16.66666667],
            [300, 0],
            [350, 0],
            [400, 0],
            [450, 0],
            [500, 0],
            [550, 0],
            [600, 0],
            [650, 0],
            [700, 0],
            [750, 16.66666667],
            [800, 33.33333333],
            [850, 50],
            [900, 66.66666667],
            [950, 83.33333333],
            [1000, 100],
        ];

        const dataArray6 = [
            [0, 100],
            [50, 93.75],
            [100, 87.5],
            [150, 81.25],
            [200, 75],
            [250, 68.75],
            [300, 62.5],
            [350, 56.25],
            [400, 50],
            [450, 43.75],
            [500, 37.5],
            [550, 31.25],
            [600, 25],
            [650, 18.75],
            [700, 12.5],
            [750, 6.25],
            [800, 0],
            [850, 0],
            [900, 0],
            [950, 0],
            [1000, 0],
            [1050, 0],
            [1100, 0],
            [1150, 0],
            [1200, 0],
        ];

        function chart(canvas, limit1, limit2, data1 = [], data2 = [])
        {
            const ctx = canvas.getContext('2d');
            canvas.style.width = WIDTH + 'px';
            canvas.style.height = HEIGHT + 'px';
            canvas.width = DPI_WIDTH;
            canvas.height = DPI_HEIGHT;

            // ==== y axis

            let moveByAxisY = DPI_HEIGHT / ROWS_COUNT


                ctx.beginPath();
                ctx.strokeStyle = 'black';
                for (let i = 1; i <= ROWS_COUNT; i++)
                {
                    let y = moveByAxisY * i;
                    ctx.moveTo(0, y);
                    ctx.lineTo(DPI_WIDTH, y);
                }
                ctx.stroke();
                ctx.closePath();

            // ====

            // ==== x axis 

            let moveByAxisX = DPI_HEIGHT / ROWS_COUNT


                ctx.beginPath();
                for (let i = 1; i <= ROWS_COUNT * DPI_WIDTH / DPI_HEIGHT; i++)
                {
                    let x = moveByAxisX * i
                    ctx.moveTo(x, 0);
                    ctx.lineTo(x, DPI_HEIGHT);
                }
                ctx.stroke();
                ctx.closePath();
 
            // ====

            // limits

            ctx.beginPath();
            ctx.lineWidth = 5;
            ctx.strokeStyle = '#c5141b';
            for (let [x, y] of limit1)
            {
                ctx.lineTo(x, DPI_HEIGHT - y);
            }
            ctx.stroke();
            ctx.closePath();

            ctx.beginPath();
            ctx.lineWidth = 5;
            ctx.strokeStyle = '#2c2d36';
            for (let [x, y] of limit2)
            {
                ctx.lineTo(x, DPI_HEIGHT - y);
            }
            ctx.stroke();
            ctx.closePath();

            //======

            ctx.beginPath();
            ctx.lineWidth = 5;
            ctx.strokeStyle = '#11a71b';
            for (let [x, y] of data1)
            {
                ctx.lineTo(x, DPI_HEIGHT - y);
            }
            ctx.stroke();
            ctx.closePath();

            ctx.beginPath();
            ctx.lineWidth = 5;
            ctx.strokeStyle = '#3124ee';
            for (let [x, y] of data2)
            {
                ctx.lineTo(x, DPI_HEIGHT - y);
            }
            ctx.stroke();
            ctx.closePath();

        }
        

        const dataPhp1 = (document.getElementById("data-php-1").getAttribute('value'));
        const dataPhp2 = (document.getElementById("data-php-2").getAttribute('value'));



        let datapack1 = [];
        let datapack2 = [];

        switch (dataPhp1)
        {
            case '((5 - price / 1000) / 120 + 1 >= 0.75)': datapack1 = dataArray1; break;
            case '(((-(price / 1000 - 70) / 30 + 1) >= 0.75) and ((price / 1000) / 30 >= 0.75))': datapack1 = dataArray2; break;
            case "((price / 1000) / 80 >= 0.75)": datapack1 = dataArray3; break;
            case "((5 + price / 1000) / 120 >= 0.75)": datapack1 = dataArray4; break;
            case "((1 - (price / 1000) / 30) >= 0.75 or (1 + ((price / 1000 - 70) / 30) - 1) >= 0.75)": datapack1 = dataArray5; break;
            case "(1 - ((price / 1000) / 80) >= 0.75)": datapack1 = dataArray6; break;
            default: datapack1 = []
        }

        switch (dataPhp2)
        {
            case "((5 - price / 1000) / 120 + 1 >= 0.75)": datapack2 = dataArray1; break;
            case "(((-(price / 1000 - 70) / 30 + 1) >= 0.75) and ((price / 1000) / 30 >= 0.75))": datapack2 = dataArray2; break;
            case "((price / 1000) / 80 >= 0.75)": datapack2 = dataArray3; break;
            case "((5 + price / 1000) / 120 >= 0.75)": datapack2 = dataArray4; break;
            case "((1 - (price / 1000) / 30) >= 0.75 or (1 + ((price / 1000 - 70) / 30) - 1) >= 0.75)": datapack2 = dataArray5; break;
            case "(1 - ((price / 1000) / 80) >= 0.75)": datapack2 = dataArray6; break;
            default: datapack2 = []
      
        }

        chart(document.getElementById('chart'), [
            [0,70],
            [1200,70],
        ],
        [
            [0,100],
            [1200,100],
        ], datapack1, datapack2
        );
        console.log(typeof(dataPhp1));
        console.log(datapack1);
        console.log(datapack2);

    </script>



























