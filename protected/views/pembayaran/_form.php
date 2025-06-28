
<div class="form panel panel-info" style="max-width:600px;margin:auto;padding:30px 30px 10px 30px;border-radius:12px;box-shadow:0 2px 8px #e0e0e0;">
    <div class="panel-heading" style="background:#2e86c1;color:#fff;border-radius:8px 8px 0 0;padding:16px 20px;margin-bottom:20px;">
        <h3 style="margin:0;font-weight:bold;">
            <span class="glyphicon glyphicon-credit-card" aria-hidden="true"></span>
            Formulir Data Pembayaran
        </h3>
    </div>

    <?php $form=$this->beginWidget('CActiveForm', array(
        'id'=>'pembayaran-form',
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
        <?php echo $form->labelEx($model,'tanggal_pembayaran', array('class'=>'control-label')); ?>
        <div class="input-group" style="width:100%;">
            <?php echo $form->textField($model,'tanggal_pembayaran', array('class'=>'form-control datepicker','placeholder'=>'yyyy-mm-dd', 'style'=>'width:100%;')); ?>
        </div>
        <?php echo $form->error($model,'tanggal_pembayaran'); ?>
    </div>

    <div class="form-group">
        <?php echo $form->labelEx($model,'total_tagihan', array('class'=>'control-label')); ?>
        <?php echo $form->textField($model,'total_tagihan', array('class'=>'form-control','maxlength'=>12,'placeholder'=>'Total Tagihan')); ?>
        <?php echo $form->error($model,'total_tagihan'); ?>
    </div>

    <div class="form-group">
        <?php echo $form->labelEx($model,'total_dibayar', array('class'=>'control-label')); ?>
        <?php echo $form->textField($model,'total_dibayar', array('class'=>'form-control','maxlength'=>12,'placeholder'=>'Total Dibayar')); ?>
        <?php echo $form->error($model,'total_dibayar'); ?>
    </div>

    <div class="form-group">
        <?php echo $form->labelEx($model,'metode_pembayaran', array('class'=>'control-label')); ?>
        <?php echo $form->textField($model,'metode_pembayaran', array('class'=>'form-control','maxlength'=>20,'placeholder'=>'Metode Pembayaran')); ?>
        <?php echo $form->error($model,'metode_pembayaran'); ?>
    </div>

    <div class="form-group">
        <?php echo $form->labelEx($model,'status_pembayaran', array('class'=>'control-label')); ?>
        <?php echo $form->textField($model,'status_pembayaran', array('class'=>'form-control','maxlength'=>15,'placeholder'=>'Status Pembayaran')); ?>
        <?php echo $form->error($model,'status_pembayaran'); ?>
    </div>

    <div class="form-group">
        <?php echo $form->labelEx($model,'keterangan', array('class'=>'control-label')); ?>
        <?php echo $form->textArea($model,'keterangan', array('class'=>'form-control','rows'=>3, 'placeholder'=>'Keterangan')); ?>
        <?php echo $form->error($model,'keterangan'); ?>
    </div>

    <div class="form-group">
        <?php echo $form->labelEx($model,'id_user', array('class'=>'control-label')); ?>
        <?php echo $form->textField($model,'id_user', array('class'=>'form-control','placeholder'=>'ID User')); ?>
        <?php echo $form->error($model,'id_user'); ?>
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
