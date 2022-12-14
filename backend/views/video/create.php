<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Video */

$this->title = 'Create Video';
$this->params['breadcrumbs'][] = ['label' => 'Videos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="video-create">

    <h1><?= Html::encode($this->title) ?></h1>

 <div>


<div class="d-flex flex-column justify-content-center align-items-center" >
    <div class="upload-icon">
    <i class="fa-solid fa-upload"></i>   
 </div>

    <p>Drag and upload a file you want to upload </p>
    <p class="text-muted">Your video will be private until you publish it</p>
 </div>
<?php ActiveForm::begin([
   'options'=>['enctype'=>'multipart/form-data']
]) ?>
 <button class="btn btn-primary btn-file">
 Select file
 <input type="file" id="videoFile" name="video">
</button> 
<?php ActiveForm::end() ?>
</div>   
