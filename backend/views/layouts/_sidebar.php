
<aside class="shadow" >
<?php
use yii\bootstrap4\nav;
 echo nav::widget([
    'options'=>[
        'class'=>'d-flex flex-column nav-pills'
    ],

    'items'=>[
        [
        'label'=>'Dashboard',
        'url'=>['/site/index']   
        ],
        [
            'label'=>'Videos',
            'url'=>['/video/index']
        ]
    ]
]) ?>
</aside>
