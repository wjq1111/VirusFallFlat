<?php

/**
 * Team:VirusFallFlat
 * Code by 吴继强
 * Debug人员：吴继强
 * 这是删除文章mvc架构的view层
**/

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = '删除文章';
$this->params['breadcrumbs'][] = $this->title;
?>


<?php $form = ActiveForm::begin(['id' => 'passage-delete']); ?>

    <?= $form->field($model, 'passageid')->textInput(['autofocus' => true]) ?>


    <div class="form-group">
        <?= Html::submitButton('delpsg', ['class' => 'btn btn-primary', 'name' => 'delpsg-button']) ?>
    </div>

<?php ActiveForm::end(); ?>