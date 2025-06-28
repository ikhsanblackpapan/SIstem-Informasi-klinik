<div class="form panel panel-info" style="max-width:500px;margin:auto;padding:30px 30px 10px 30px;border-radius:12px;box-shadow:0 2px 8px #e0e0e0;">
    <div class="panel-heading" style="background:#2e86c1;color:#fff;border-radius:8px 8px 0 0;padding:16px 20px;margin-bottom:20px;">
        <h3 style="margin:0;font-weight:bold;">
            <span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span>
            Formulir Data Wilayah
        </h3>
    </div>

    <?php $form=$this->beginWidget('CActiveForm', array(
        'id'=>'wilayah-form',
        'enableAjaxValidation'=>false,
        'htmlOptions'=>array('class'=>'form-horizontal'),
    )); ?>

    <p class="note" style="color:#117a65;">Fields with <span class="required">*</span> are required.</p>
    <?php echo $form->errorSummary($model, null, null, array('class'=>'alert alert-danger')); ?>

    <div class="form-group">
        <?php echo $form->labelEx($model,'kode', array('class'=>'control-label')); ?>
        <?php echo $form->textField($model,'kode',array('class'=>'form-control','maxlength'=>20,'placeholder'=>'Kode Wilayah')); ?>
        <?php echo $form->error($model,'kode'); ?>
    </div>

    <div class="form-group">
        <?php echo $form->labelEx($model,'nama', array('class'=>'control-label')); ?>
        <?php echo $form->textField($model,'nama',array('class'=>'form-control','maxlength'=>100,'placeholder'=>'Nama Wilayah')); ?>
        <?php echo $form->error($model,'nama'); ?>
    </div>

    <div class="form-group">
        <?php echo $form->labelEx($model,'tingkat', array('class'=>'control-label')); ?>
        <?php echo $form->dropDownList($model,'tingkat',array(
            1 => 'Provinsi',
            2 => 'Kabupaten/Kota',
            3 => 'Kecamatan',
            4 => 'Desa/Kelurahan'
        ), array('class'=>'form-control','prompt'=>'Pilih Tingkat Wilayah')); ?>
        <?php echo $form->error($model,'tingkat'); ?>
    </div>

    <div class="form-group text-center" style="margin-top:20px;">
        <?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save', array('class'=>'btn btn-success btn-lg', 'style'=>'padding:10px 40px;')); ?>
    </div>

    <?php $this->endWidget(); ?>
</div>