
<div class="form panel panel-info" style="max-width:700px;margin:auto;padding:30px 30px 10px 30px;border-radius:12px;box-shadow:0 2px 8px #e0e0e0;">
    <div class="panel-heading" style="background:#2e86c1;color:#fff;border-radius:8px 8px 0 0;padding:16px 20px;margin-bottom:20px;">
        <h3 style="margin:0;font-weight:bold;">
            <span class="glyphicon glyphicon-user" aria-hidden="true"></span>
            Formulir Data Pasien
        </h3>
    </div>

    <?php $form=$this->beginWidget('CActiveForm', array(
        'id'=>'pasien-form',
        'enableAjaxValidation'=>false,
        'htmlOptions'=>array('class'=>'form-horizontal'),
    )); ?>

    <p class="note" style="color:#117a65;">Fields with <span class="required">*</span> are required.</p>
    <?php echo $form->errorSummary($model, null, null, array('class'=>'alert alert-danger')); ?>

    <div class="form-group">
        <?php echo $form->labelEx($model,'no_rm', array('class'=>'control-label')); ?>
        <?php echo $form->textField($model,'no_rm',array('class'=>'form-control','maxlength'=>20,'placeholder'=>'No. RM')); ?>
        <?php echo $form->error($model,'no_rm'); ?>
    </div>

    <div class="form-group">
        <?php echo $form->labelEx($model,'nama', array('class'=>'control-label')); ?>
        <?php echo $form->textField($model,'nama',array('class'=>'form-control','maxlength'=>100,'placeholder'=>'Nama Lengkap')); ?>
        <?php echo $form->error($model,'nama'); ?>
    </div>

    <div class="form-group">
        <?php echo $form->labelEx($model,'jenis_kelamin', array('class'=>'control-label')); ?>
        <?php echo $form->dropDownList($model,'jenis_kelamin',array('L'=>'Laki-laki','P'=>'Perempuan'), array('class'=>'form-control','prompt'=>'Pilih Jenis Kelamin')); ?>
        <?php echo $form->error($model,'jenis_kelamin'); ?>
    </div>

    <div class="form-group">
        <?php echo $form->labelEx($model,'tempat_lahir', array('class'=>'control-label')); ?>
        <?php echo $form->textField($model,'tempat_lahir',array('class'=>'form-control','maxlength'=>50,'placeholder'=>'Tempat Lahir')); ?>
        <?php echo $form->error($model,'tempat_lahir'); ?>
    </div>

    <div class="form-group">
        <?php echo $form->labelEx($model,'tanggal_lahir', array('class'=>'control-label')); ?>
        <div class="input-group" style="width:100%;">
            <?php echo $form->textField($model,'tanggal_lahir', array('class'=>'form-control datepicker','placeholder'=>'yyyy-mm-dd', 'style'=>'width:100%;')); ?>
        </div>
        <?php echo $form->error($model,'tanggal_lahir'); ?>
    </div>

    <div class="form-group">
        <?php echo $form->labelEx($model,'alamat', array('class'=>'control-label')); ?>
        <?php echo $form->textArea($model,'alamat',array('class'=>'form-control','rows'=>3, 'placeholder'=>'Alamat')); ?>
        <?php echo $form->error($model,'alamat'); ?>
    </div>

    <div class="form-group">
    <?php echo $form->labelEx($model,'id_provinsi', array('class'=>'control-label')); ?>
    <?php
    // Ambil semua provinsi (tingkat=1)
    $provinsiList = CHtml::listData(Wilayah::model()->findAll('tingkat=1'), 'id', 'nama');
    echo $form->dropDownList($model,'id_provinsi',$provinsiList,array('class'=>'form-control','prompt'=>'Pilih Provinsi'));
    ?>
    <?php echo $form->error($model,'id_provinsi'); ?>
</div>

    <div class="form-group">
    <?php echo $form->labelEx($model,'id_kabupaten', array('class'=>'control-label')); ?>
    <?php
    // Ambil semua kabupaten/kota (tingkat=2)
    $kabupatenList = CHtml::listData(Wilayah::model()->findAll('tingkat=2'), 'id', 'nama');
    echo $form->dropDownList($model,'id_kabupaten',$kabupatenList,array('class'=>'form-control','prompt'=>'Pilih Kabupaten/Kota'));
    ?>
    <?php echo $form->error($model,'id_kabupaten'); ?>
</div>

<div class="form-group">
    <?php echo $form->labelEx($model,'jenis_kunjungan', array('class'=>'control-label')); ?>
    <?php echo $form->dropDownList($model,'jenis_kunjungan', array(
        'baru'=>'Baru',
        'lama'=>'Lama',
    ), array('class'=>'form-control','prompt'=>'Pilih Jenis Kunjungan')); ?>
    <?php echo $form->error($model,'jenis_kunjungan'); ?>
</div>

    <div class="form-group">
        <?php echo $form->labelEx($model,'no_telepon', array('class'=>'control-label')); ?>
        <?php echo $form->textField($model,'no_telepon',array('class'=>'form-control','maxlength'=>15,'placeholder'=>'No. Telepon')); ?>
        <?php echo $form->error($model,'no_telepon'); ?>
    </div>

    <div class="form-group">
        <?php echo $form->labelEx($model,'golongan_darah', array('class'=>'control-label')); ?>
        <?php
        echo $form->dropDownList($model,'golongan_darah',array('A'=>'A','B'=>'B','AB'=>'AB','O'=>'O'),array('class'=>'form-control','prompt'=>'Pilih Golongan Darah'));
        ?>
        <?php echo $form->error($model,'golongan_darah'); ?>
    </div>

    <div class="form-group">
        <?php echo $form->labelEx($model,'alergi', array('class'=>'control-label')); ?>
        <?php echo $form->textArea($model,'alergi',array('class'=>'form-control','rows'=>3, 'placeholder'=>'Alergi')); ?>
        <?php echo $form->error($model,'alergi'); ?>
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
