
<div class="form panel panel-info" style="max-width:600px;margin:auto;padding:30px 30px 10px 30px;border-radius:12px;box-shadow:0 2px 8px #e0e0e0;">
    <div class="panel-heading" style="background:#2e86c1;color:#fff;border-radius:8px 8px 0 0;padding:16px 20px;margin-bottom:20px;">
        <h3 style="margin:0;font-weight:bold;">
            <span class="glyphicon glyphicon-wrench" aria-hidden="true"></span>
            Formulir Data Tindakan
        </h3>
    </div>

    <?php $form=$this->beginWidget('CActiveForm', array(
        'id'=>'tindakan-form',
        'enableAjaxValidation'=>false,
        'htmlOptions'=>array('class'=>'form-horizontal'),
    )); ?>

    <p class="note" style="color:#117a65;">Fields with <span class="required">*</span> are required.</p>
    <?php echo $form->errorSummary($model, null, null, array('class'=>'alert alert-danger')); ?>

    <div class="form-group">
        <?php echo $form->labelEx($model,'kode_tindakan', array('class'=>'control-label')); ?>
        <?php echo $form->textField($model,'kode_tindakan',array('class'=>'form-control','maxlength'=>20,'placeholder'=>'Kode Tindakan')); ?>
        <?php echo $form->error($model,'kode_tindakan'); ?>
    </div>

    <div class="form-group">
        <?php echo $form->labelEx($model,'nama_tindakan', array('class'=>'control-label')); ?>
        <?php echo $form->textField($model,'nama_tindakan',array('class'=>'form-control','maxlength'=>100,'placeholder'=>'Nama Tindakan')); ?>
        <?php echo $form->error($model,'nama_tindakan'); ?>
    </div>

    <div class="form-group">
        <?php echo $form->labelEx($model,'kategori', array('class'=>'control-label')); ?>
        <?php echo $form->textField($model,'kategori',array('class'=>'form-control','maxlength'=>50,'placeholder'=>'Kategori')); ?>
        <?php echo $form->error($model,'kategori'); ?>
    </div>

    <div class="form-group">
        <?php echo $form->labelEx($model,'harga', array('class'=>'control-label')); ?>
        <?php echo $form->textField($model,'harga',array('class'=>'form-control','maxlength'=>12,'placeholder'=>'Harga')); ?>
        <?php echo $form->error($model,'harga'); ?>
    </div>

    <div class="form-group">
        <?php echo $form->labelEx($model,'deskripsi', array('class'=>'control-label')); ?>
        <?php echo $form->textArea($model,'deskripsi',array('class'=>'form-control','rows'=>3, 'placeholder'=>'Deskripsi')); ?>
        <?php echo $form->error($model,'deskripsi'); ?>
    </div>

    <div class="form-group">
        <?php echo $form->labelEx($model,'created_at', array('class'=>'control-label')); ?>
        <div class="input-group" style="width:100%;">
            <?php echo $form->textField($model,'created_at', array('class'=>'form-control datepicker','placeholder'=>'yyyy-mm-dd', 'style'=>'width:100%;')); ?>
        </div>
        <?php echo $form->error($model,'created_at'); ?>
    </div>

    <div class="form-group">
        <?php echo $form->labelEx($model,'updated_at', array('class'=>'control-label')); ?>
        <div class="input-group" style="width:100%;">
            <?php echo $form->textField($model,'updated_at', array('class'=>'form-control datepicker','placeholder'=>'yyyy-mm-dd', 'style'=>'width:100%;')); ?>
        </div>
        <?php echo $form->error($model,'updated_at'); ?>
    </div>

    <div class="form-group text-center" style="margin-top:20px;">
        <?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save', array('class'=>'btn btn-success btn-lg', 'style'=>'padding:10px 40px;')); ?>
    </div>

    <?php $this->endWidget(); ?>
</div>

<?php
Yii::app()->clientScript->registerScript('datepicker', "
    $('.datepicker').datepicker({
        dateFormat: 'yy-mm-dd',
        showOn: 'button',
        buttonImage: '".Yii::app()->baseUrl."/css/images/calendar.png',
        buttonImageOnly: true,
        buttonText: 'Pilih tanggal'
    });
");
