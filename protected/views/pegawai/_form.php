
<div class="form panel panel-info" style="max-width:600px;margin:auto;padding:30px 30px 10px 30px;border-radius:12px;box-shadow:0 2px 8px #e0e0e0;">
    <div class="panel-heading" style="background:#2e86c1;color:#fff;border-radius:8px 8px 0 0;padding:16px 20px;margin-bottom:20px;">
        <h3 style="margin:0;font-weight:bold;">
            <span class="glyphicon glyphicon-user" aria-hidden="true"></span>
            Formulir Data Pegawai
        </h3>
    </div>

    <?php $form=$this->beginWidget('CActiveForm', array(
        'id'=>'pegawai-form',
        'enableAjaxValidation'=>false,
        'htmlOptions'=>array('class'=>'form-horizontal'),
    )); ?>

    <p class="note" style="color:#117a65;">Fields with <span class="required">*</span> are required.</p>
    <?php echo $form->errorSummary($model, null, null, array('class'=>'alert alert-danger')); ?>

    <div class="form-group">
        <?php echo $form->labelEx($model,'nip', array('class'=>'control-label')); ?>
        <?php echo $form->textField($model,'nip',array('class'=>'form-control','size'=>20,'maxlength'=>20,'placeholder'=>'NIP Pegawai')); ?>
        <?php echo $form->error($model,'nip'); ?>
    </div>

    <div class="form-group">
        <?php echo $form->labelEx($model,'nama', array('class'=>'control-label')); ?>
        <?php echo $form->textField($model,'nama',array('class'=>'form-control','size'=>60,'maxlength'=>100,'placeholder'=>'Nama Lengkap')); ?>
        <?php echo $form->error($model,'nama'); ?>
    </div>

    <div class="form-group">
        <?php echo $form->labelEx($model,'jenis_kelamin', array('class'=>'control-label')); ?>
        <?php echo $form->dropDownList($model,'jenis_kelamin',array('L'=>'Laki-laki','P'=>'Perempuan'), array('class'=>'form-control','prompt'=>'Pilih Jenis Kelamin')); ?>
        <?php echo $form->error($model,'jenis_kelamin'); ?>
    </div>

    <div class="form-group">
        <?php echo $form->labelEx($model,'alamat', array('class'=>'control-label')); ?>
        <?php echo $form->textArea($model,'alamat',array('class'=>'form-control','rows'=>3, 'cols'=>50,'placeholder'=>'Alamat')); ?>
        <?php echo $form->error($model,'alamat'); ?>
    </div>

    <div class="form-group">
        <?php echo $form->labelEx($model,'no_telepon', array('class'=>'control-label')); ?>
        <?php echo $form->textField($model,'no_telepon',array('class'=>'form-control','size'=>15,'maxlength'=>15,'placeholder'=>'No. Telepon')); ?>
        <?php echo $form->error($model,'no_telepon'); ?>
    </div>

    <div class="form-group">
        <?php echo $form->labelEx($model,'email', array('class'=>'control-label')); ?>
        <?php echo $form->textField($model,'email',array('class'=>'form-control','size'=>60,'maxlength'=>100,'placeholder'=>'Email')); ?>
        <?php echo $form->error($model,'email'); ?>
    </div>

    <div class="form-group">
        <?php echo $form->labelEx($model,'jabatan', array('class'=>'control-label')); ?>
        <?php echo $form->dropDownList($model,'jabatan',array(
            'Dokter'=>'Dokter',
            'Perawat'=>'Perawat',
            'Petugas Pendaftaran'=>'Petugas Pendaftaran',
            'Apoteker'=>'Apoteker',
            'Kasir'=>'Kasir'
        ), array('class'=>'form-control','prompt'=>'Pilih Jabatan')); ?>
        <?php echo $form->error($model,'jabatan'); ?>
    </div>

    <div class="form-group">
    <?php echo $form->labelEx($model,'tanggal_mulai_kerja', array('class'=>'control-label')); ?>
    <div class="input-group" style="width:100%;">
        <?php echo $form->textField($model,'tanggal_mulai_kerja', array('class'=>'form-control datepicker','placeholder'=>'yyyy-mm-dd', 'style'=>'width:100%;')); ?>
    </div>
    <?php echo $form->error($model,'tanggal_mulai_kerja'); ?>
</div>

    <div class="form-group">
        <?php echo $form->labelEx($model,'status_aktif', array('class'=>'control-label')); ?>
        <?php echo $form->dropDownList($model,'status_aktif',array(1=>'Aktif',0=>'Tidak Aktif'), array('class'=>'form-control','prompt'=>'Pilih Status')); ?>
        <?php echo $form->error($model,'status_aktif'); ?>
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
?>