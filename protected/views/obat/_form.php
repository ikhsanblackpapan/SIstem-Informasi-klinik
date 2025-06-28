
<div class="form panel panel-info" style="max-width:600px;margin:auto;padding:30px 30px 10px 30px;border-radius:12px;box-shadow:0 2px 8px #e0e0e0;">
    <div class="panel-heading" style="background:#2e86c1;color:#fff;border-radius:8px 8px 0 0;padding:16px 20px;margin-bottom:20px;">
        <h3 style="margin:0;font-weight:bold;">
            <span class="glyphicon glyphicon-plus-sign" aria-hidden="true"></span>
            Formulir Data Obat
        </h3>
    </div>

    <?php $form=$this->beginWidget('CActiveForm', array(
        'id'=>'obat-form',
        'enableAjaxValidation'=>false,
        'htmlOptions'=>array('class'=>'form-horizontal'),
    )); ?>

    <p class="note" style="color:#117a65;">Fields with <span class="required">*</span> are required.</p>
    <?php echo $form->errorSummary($model, null, null, array('class'=>'alert alert-danger')); ?>

    <div class="form-group">
        <?php echo $form->labelEx($model,'kode_obat', array('class'=>'control-label')); ?>
        <?php echo $form->textField($model,'kode_obat',array('class'=>'form-control','maxlength'=>20,'placeholder'=>'Kode Obat')); ?>
        <?php echo $form->error($model,'kode_obat'); ?>
    </div>

    <div class="form-group">
        <?php echo $form->labelEx($model,'nama_obat', array('class'=>'control-label')); ?>
        <?php echo $form->textField($model,'nama_obat',array('class'=>'form-control','maxlength'=>100,'placeholder'=>'Nama Obat')); ?>
        <?php echo $form->error($model,'nama_obat'); ?>
    </div>

    <div class="form-group">
        <?php echo $form->labelEx($model,'jenis_obat', array('class'=>'control-label')); ?>
        <?php echo $form->textField($model,'jenis_obat',array('class'=>'form-control','maxlength'=>50,'placeholder'=>'Jenis Obat')); ?>
        <?php echo $form->error($model,'jenis_obat'); ?>
    </div>

    <div class="form-group">
        <?php echo $form->labelEx($model,'satuan', array('class'=>'control-label')); ?>
        <?php echo $form->textField($model,'satuan',array('class'=>'form-control','maxlength'=>20,'placeholder'=>'Satuan')); ?>
        <?php echo $form->error($model,'satuan'); ?>
    </div>

    <div class="form-group">
        <?php echo $form->labelEx($model,'stok', array('class'=>'control-label')); ?>
        <?php echo $form->textField($model,'stok',array('class'=>'form-control','placeholder'=>'Stok')); ?>
        <?php echo $form->error($model,'stok'); ?>
    </div>

    <div class="form-group">
        <?php echo $form->labelEx($model,'harga_beli', array('class'=>'control-label')); ?>
        <?php echo $form->textField($model,'harga_beli',array('class'=>'form-control','maxlength'=>12,'placeholder'=>'Harga Beli')); ?>
        <?php echo $form->error($model,'harga_beli'); ?>
    </div>

    <div class="form-group">
        <?php echo $form->labelEx($model,'harga_jual', array('class'=>'control-label')); ?>
        <?php echo $form->textField($model,'harga_jual',array('class'=>'form-control','maxlength'=>12,'placeholder'=>'Harga Jual')); ?>
        <?php echo $form->error($model,'harga_jual'); ?>
    </div>

    <div class="form-group">
        <?php echo $form->labelEx($model,'expired_date', array('class'=>'control-label')); ?>
        <div class="input-group" style="width:100%;">
            <?php echo $form->textField($model,'expired_date', array('class'=>'form-control datepicker','placeholder'=>'yyyy-mm-dd', 'style'=>'width:100%;')); ?>
        </div>
        <?php echo $form->error($model,'expired_date'); ?>
    </div>

    <div class="form-group">
        <?php echo $form->labelEx($model,'id_supplier', array('class'=>'control-label')); ?>
        <?php echo $form->textField($model,'id_supplier',array('class'=>'form-control','placeholder'=>'ID Supplier')); ?>
        <?php echo $form->error($model,'id_supplier'); ?>
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
