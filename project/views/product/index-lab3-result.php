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
        const WIDTH = 200;
        const HEIGHT = 200;
        const DPI_WIDTH = WIDTH * 2;
        const DPI_HEIGHT = HEIGHT * 2;
        const ROWS_COUNT = 10;

        const dataArray1 = [
[50, 1.082265506],
[60, 1.932967786],
[70, 3.316985985],
[80, 5.468785348],
[90, 8.6629606],
[100, 13.18469299],
[110, 19.27977338],
[120, 27.08707115],
[130, 36.56372157],
[140, 47.42059058],
[150, 59.08969447],
[160, 70.7432082],
[170, 81.37405884],
[180, 89.93224332],
[190, 95.49334267],
[200, 97.42243615],
[210, 95.49334267],
[220, 89.93224332],
[230, 81.37405884],
[240, 70.7432082],
[250, 59.08969447],
[260, 47.42059058],
[270, 36.56372157],
[280, 27.08707115],
[290, 19.27977338],
[300, 13.18469299],
[310, 8.6629606],
[320, 5.468785348],
[330, 3.316985985],
[340, 1.932967786],
[350, 1.082265506],

        ];

        function chart(canvas, data1 = [])
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


            ctx.beginPath();
            ctx.lineWidth = 5;
            ctx.strokeStyle = '#11a71b';
            for (let [x, y] of data1)
            {
                ctx.lineTo(x, DPI_HEIGHT - y);
            }
            ctx.stroke();
            ctx.closePath();
        }
        

        // const dataPhp1 = (document.getElementById("data-php-1").getAttribute('value'));
        // const dataPhp2 = (document.getElementById("data-php-2").getAttribute('value'));



        chart(document.getElementById('chart'), dataArray1);
        // console.log(typeof(dataPhp1));
        // console.log(datapack1);
        // console.log(datapack2);

    </script>