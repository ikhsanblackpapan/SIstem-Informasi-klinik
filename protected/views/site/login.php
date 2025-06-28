<?php

/* @var $this SiteController */
/* @var $model LoginForm */
/* @var $form CActiveForm  */

$this->pageTitle = Yii::app()->name . ' - Login';
$this->breadcrumbs = array('Login');
?>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/css/bootstrap.min.css">

<div class="row" style="margin-top:40px;">
    <div class="col-md-4 col-md-offset-4">
        <div class="panel panel-default">
            <div class="panel-heading text-center">
                <h3 class="panel-title">Login Sistem Informasi Klinik</h3>
            </div>
            <div class="panel-body">
                <?php $form = $this->beginWidget('CActiveForm', array(
                    'id' => 'login-form',
                    'enableClientValidation' => true,
                    'clientOptions' => array(
                        'validateOnSubmit' => true,
                    ),
                )); ?>

                <div class="form-group">
                    <?php echo $form->labelEx($model, 'username'); ?>
                    <?php echo $form->textField($model, 'username', array('class' => 'form-control', 'placeholder' => 'Username')); ?>
                    <?php echo $form->error($model, 'username'); ?>
                </div>

                <div class="form-group">
                    <?php echo $form->labelEx($model, 'password'); ?>
                    <?php echo $form->passwordField($model, 'password', array('class' => 'form-control', 'placeholder' => 'Password')); ?>
                    <?php echo $form->error($model, 'password'); ?>
                </div>

                <div class="checkbox">
                    <label>
                        <?php echo $form->checkBox($model, 'rememberMe'); ?> Remember me
                    </label>
                    <?php echo $form->error($model, 'rememberMe'); ?>
                </div>

                <div class="form-group text-center">
                    <?php echo CHtml::submitButton('Login', array('class' => 'btn btn-primary btn-block')); ?>
                </div>

                

                <?php $this->endWidget(); ?>
            </div>
        </div>
    </div>
</div>