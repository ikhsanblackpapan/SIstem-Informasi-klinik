
<div class="form panel panel-info" style="max-width:600px;margin:auto;padding:30px 30px 10px 30px;border-radius:12px;box-shadow:0 2px 8px #e0e0e0;">
    <div class="panel-heading" style="background:#2e86c1;color:#fff;border-radius:8px 8px 0 0;padding:16px 20px;margin-bottom:20px;">
        <h3 style="margin:0;font-weight:bold;">
            <span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span>
            Formulir Data Laporan
        </h3>
    </div>

    <?php $form=$this->beginWidget('CActiveForm', array(
        'id'=>'laporan-form',
        'enableAjaxValidation'=>false,
        'htmlOptions'=>array('class'=>'form-horizontal'),
    )); ?>

    <p class="note" style="color:#117a65;">Fields with <span class="required">*</span> are required.</p>
    <?php echo $form->errorSummary($model, null, null, array('class'=>'alert alert-danger')); ?>

    <div class="form-group">
        <?php echo $form->labelEx($model,'jenis_laporan', array('class'=>'control-label')); ?>
        <?php echo $form->textField($model,'jenis_laporan',array('class'=>'form-control','maxlength'=>50,'placeholder'=>'Jenis Laporan')); ?>
        <?php echo $form->error($model,'jenis_laporan'); ?>
    </div>

    <div class="form-group">
        <?php echo $form->labelEx($model,'judul', array('class'=>'control-label')); ?>
        <?php echo $form->textField($model,'judul',array('class'=>'form-control','maxlength'=>100,'placeholder'=>'Judul')); ?>
        <?php echo $form->error($model,'judul'); ?>
    </div>

    <div class="form-group">
        <?php echo $form->labelEx($model,'tanggal_mulai', array('class'=>'control-label')); ?>
        <div class="input-group" style="width:100%;">
            <?php echo $form->textField($model,'tanggal_mulai', array('class'=>'form-control datepicker','placeholder'=>'yyyy-mm-dd', 'style'=>'width:100%;')); ?>
        </div>
        <?php echo $form->error($model,'tanggal_mulai'); ?>
    </div>

    <div class="form-group">
        <?php echo $form->labelEx($model,'tanggal_selesai', array('class'=>'control-label')); ?>
        <div class="input-group" style="width:100%;">
            <?php echo $form->textField($model,'tanggal_selesai', array('class'=>'form-control datepicker','placeholder'=>'yyyy-mm-dd', 'style'=>'width:100%;')); ?>
        </div>
        <?php echo $form->error($model,'tanggal_selesai'); ?>
    </div>

    <div class="form-group">
        <?php echo $form->labelEx($model,'id_user', array('class'=>'control-label')); ?>
        <?php echo $form->textField($model,'id_user',array('class'=>'form-control','placeholder'=>'ID User')); ?>
        <?php echo $form->error($model,'id_user'); ?>
    </div>

    <div class="form-group">
        <?php echo $form->labelEx($model,'parameter', array('class'=>'control-label')); ?>
        <?php echo $form->textField($model,'parameter',array('class'=>'form-control','placeholder'=>'Parameter')); ?>
        <?php echo $form->error($model,'parameter'); ?>
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
