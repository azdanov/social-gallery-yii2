<?php /** @noinspection PhpUnhandledExceptionInspection */

declare(strict_types=1);

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */

/* @var $model \app\modules\user\models\SignupForm */

use yii\bootstrap\ActiveForm;
use yii\helpers\Html;

$title = 'Signup';
$this->title = $title.' | '.Yii::$app->name;
$this->params['breadcrumbs'][] = $title;
?>
<div class="site-signup">
    <div class="row">
        <div class="col-lg-7 col-lg-offset-1">
            <h1><?php echo $title; ?></h1>

            <p>Please fill out the following fields to signup:</p>

            <div class="row">
                <div class="col-lg-10">
                    <?php $form = ActiveForm::begin(['id' => 'form-signup']); ?>

                    <?php echo $form->field($model, 'username')->textInput(
                        ['autofocus' => true]
                    ); ?>

                    <?php echo $form->field($model, 'email'); ?>

                    <?php echo $form->field($model, 'password')->passwordInput()->hint('Minimum 6 characters'); ?>

                    <div class="form-group">
                        <?php echo Html::submitButton(
                            'Signup',
                            ['class' => 'btn btn-primary', 'name' => 'signup-button']
                        ); ?>
                    </div>

                    <?php ActiveForm::end(); ?>
                </div>
            </div>
        </div>
        <div class="col-lg-3">
            <h2>Instant Login</h2>
            <br>
            <?php echo yii\authclient\widgets\AuthChoice::widget(
                [
                    'baseAuthUrl' => ['/user/default/auth'],
                    'popupMode' => false,
                ]
            ); ?>
        </div>
    </div>
</div>
