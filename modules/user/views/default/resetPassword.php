<?php

declare(strict_types=1);

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */

/* @var $model \app\modules\user\models\forms\ResetPasswordForm */

use yii\bootstrap\ActiveForm;
use yii\helpers\Html;

$title = 'Reset Password';
$this->title = $title.' | '.Yii::$app->name;
$this->params['breadcrumbs'][] = $title;
?>
<div class="site-reset-password">
    <h1><?= $title; ?></h1>

    <p>Please choose your new password:</p>

    <div class="row">
        <div class="col-lg-5">
            <?php $form = ActiveForm::begin(['id' => 'reset-password-form']); ?>

            <?= $form->field($model, 'password')
                ->passwordInput(['autofocus' => true, 'placeholder' => 'Password']); ?>

            <div class="form-group">
                <?= Html::submitButton('Save', ['class' => 'btn btn-primary']); ?>
            </div>

            <?php ActiveForm::end(); ?>
        </div>
    </div>
</div>
