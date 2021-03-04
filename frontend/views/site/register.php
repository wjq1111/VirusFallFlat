<?php

/**
 * Team:VirusFallFlat
 * Code by 吕明昊
 * Debug人员：吕明昊 吴继强
 * 这是用户注册的mvc三层的view层.
**/
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = '用户注册';
?>



<div class="site-register">
    <h1><?= Html::encode($this->title) ?></h1>


            <?php $form = ActiveForm::begin(['id' => 'register-form']); ?>

                <?= $form->field($model, 'username')->textInput(['autofocus' => true]) ?>

                <?= $form->field($model, 'userpswd')->passwordInput() ?>


                <div class="form-group">
                    <?= Html::submitButton('REGISTER', ['class' => 'btn btn-primary', 'name' => 'user-button']) ?>
                </div>

            <?php ActiveForm::end(); ?>
            
</div>