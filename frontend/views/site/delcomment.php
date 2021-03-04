<?php

/**
 * Team:VirusFallFlat
 * Code by 吴继强
 * Debug人员：吴继强
 * 这是删除评论的mvc三层的view层.
**/

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = '删除评论';
$this->params['breadcrumbs'][] = $this->title;
?>


<?php $form = ActiveForm::begin(['id' => 'del-comment']); ?>
	<?php echo "请再次确认你要删除的内容，并粘贴在下方输入栏内！";
		echo "<br/>若未粘贴请返回复制再删除！删除操作不可逆！";?>
    <?= $form->field($model, 'discuss')->textInput(['autofocus' => true]) ?>


    <div class="form-group">
        <?= Html::submitButton('确认', ['class' => 'btn btn-primary', 'name' => '删除评论-button']) ?>
    </div>

<?php ActiveForm::end(); ?>