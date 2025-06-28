<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id_kunjungan'); ?>
		<?php echo $form->textField($model,'id_kunjungan'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_pasien'); ?>
		<?php echo $form->textField($model,'id_pasien'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tanggal_kunjungan'); ?>
		<?php echo $form->textField($model,'tanggal_kunjungan'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'jenis_kunjungan'); ?>
		<?php echo $form->textField($model,'jenis_kunjungan',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'keluhan_utama'); ?>
		<?php echo $form->textArea($model,'keluhan_utama',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_dokter'); ?>
		<?php echo $form->textField($model,'id_dokter'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'status_pembayaran'); ?>
		<?php echo $form->textField($model,'status_pembayaran',array('size'=>15,'maxlength'=>15)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'created_at'); ?>
		<?php echo $form->textField($model,'created_at'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'updated_at'); ?>
		<?php echo $form->textField($model,'updated_at'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->