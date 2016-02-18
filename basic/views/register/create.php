<?php 
use yii\helpers\Html;
use yii\widgets\ActiveForm;
	$form = ActiveForm::begin();
	echo $form->field($model, 'nameFirst');
	echo $form->field($model, 'nameLast');
	echo $form->field($model, 'address1');
	echo $form->field($model, 'address2');
	echo $form->field($model, 'city');
	echo $form->field($model, 'state');
	echo $form->field($model, 'zip');
	echo $form->field($model, 'country');
	echo Html::submitButton('Register');
	ActiveForm::end();
?>