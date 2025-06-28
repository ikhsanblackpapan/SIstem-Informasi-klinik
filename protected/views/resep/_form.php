<div class="form panel panel-info" style="max-width:600px;margin:auto;padding:30px 30px 10px 30px;border-radius:12px;box-shadow:0 2px 8px #e0e0e0;">
    <div class="panel-heading" style="background:#2e86c1;color:#fff;border-radius:8px 8px 0 0;padding:16px 20px;margin-bottom:20px;">
        <h3 style="margin:0;font-weight:bold;">
            <span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span>
            Formulir Data Resep
        </h3>
    </div>

    <?php $form=$this->beginWidget('CActiveForm', array(
        'id'=>'resep-form',
        'enableAjaxValidation'=>false,
        'htmlOptions'=>array('class'=>'form-horizontal'),
    )); ?>

    <p class="note" style="color:#117a65;">Fields with <span class="required">*</span> are required.</p>
    <?php echo $form->errorSummary($model, null, null, array('class'=>'alert alert-danger')); ?>

    <div class="form-group">
        <?php echo $form->labelEx($model,'id_kunjungan', array('class'=>'control-label')); ?>
        <?php echo $form->textField($model,'id_kunjungan', array('class'=>'form-control','placeholder'=>'ID Kunjungan')); ?>
        <?php echo $form->error($model,'id_kunjungan'); ?>
    </div>

    <div class="form-group">
        <?php echo $form->labelEx($model,'id_obat', array('class'=>'control-label')); ?>
        <?php echo $form->textField($model,'id_obat', array('class'=>'form-control','placeholder'=>'ID Obat')); ?>
        <?php echo $form->error($model,'id_obat'); ?>
    </div>

    <div class="form-group">
        <?php echo $form->labelEx($model,'jumlah', array('class'=>'control-label')); ?>
        <?php echo $form->textField($model,'jumlah', array('class'=>'form-control','placeholder'=>'Jumlah')); ?>
        <?php echo $form->error($model,'jumlah'); ?>
    </div>

    <div class="form-group">
        <?php echo $form->labelEx($model,'dosis', array('class'=>'control-label')); ?>
        <?php echo $form->textField($model,'dosis', array('class'=>'form-control','maxlength'=>50,'placeholder'=>'Dosis')); ?>
        <?php echo $form->error($model,'dosis'); ?>
    </div>

    <div class="form-group">
        <?php echo $form->labelEx($model,'cara_pakai', array('class'=>'control-label')); ?>
        <?php echo $form->textArea($model,'cara_pakai', array('class'=>'form-control','rows'=>3, 'placeholder'=>'Cara Pakai')); ?>
        <?php echo $form->error($model,'cara_pakai'); ?>
    </div>

    <div class="form-group">
        <?php echo $form->labelEx($model,'id_dokter', array('class'=>'control-label')); ?>
        <?php echo $form->textField($model,'id_dokter', array('class'=>'form-control','placeholder'=>'ID Dokter')); ?>
        <?php echo $form->error($model,'id_dokter'); ?>
    </div>

    <div class="form-group">
        <?php echo $form->labelEx($model,'id_apoteker', array('class'=>'control-label')); ?>
        <?php echo $form->textField($model,'id_apoteker', array('class'=>'form-control','placeholder'=>'ID Apoteker')); ?>
        <?php echo $form->error($model,'id_apoteker'); ?>
    </div>

    <div class="form-group">
        <?php echo $form->labelEx($model,'status', array('class'=>'control-label')); ?>
        <?php echo $form->textField($model,'status', array('class'=>'form-control','maxlength'=>20,'placeholder'=>'Status')); ?>
        <?php echo $form->error($model,'status'); ?>
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