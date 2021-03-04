<?php

/**
 * Team:VirusFallFlat
 * Code by 吕明昊
 * Debug人员：吕明昊
 * 这是添加评论的mvc三层的view层.
**/

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = '发表评论';
$this->params['breadcrumbs'][] = $this->title;
?>


<?php $form = ActiveForm::begin(['id' => 'add-comment']); ?>

    <?= $form->field($model, 'discuss')->textInput(['autofocus' => true]) ?>


    <div class="form-group">
        <?= Html::submitButton('发表', ['class' => 'btn btn-primary', 'name' => 'addcmt-button']) ?>
    </div>

<?php ActiveForm::end(); ?>