<?php

/**
 * Team:VirusFallFlat
 * Code by 李世阳
 * Debug人员：吴继强 吕明昊
 * 这是管理员登录的mvc三层的view层.
**/


use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = '管理员登录';
$this->params['breadcrumbs'][] = $this->title;
?>



<div class="site-admin">
    <h1><?= Html::encode($this->title) ?></h1>
    
            <?php $form = ActiveForm::begin(['id' => 'admin-form']); ?>

                <?= $form->field($model, 'admin_name')->textInput(['autofocus' => true]) ?>
                
                <?= $form->field($model, 'admin_password')->passwordInput() ?>


                <div class="form-group">
                    <?= Html::submitButton('LOGIN', ['class' => 'btn btn-primary', 'name' => 'admin-button']) ?>
                </div>

            <?php ActiveForm::end(); ?>
            
</div>