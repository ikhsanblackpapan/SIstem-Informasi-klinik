<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id_resep'); ?>
		<?php echo $form->textField($model,'id_resep'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_kunjungan'); ?>
		<?php echo $form->textField($model,'id_kunjungan'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_obat'); ?>
		<?php echo $form->textField($model,'id_obat'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'jumlah'); ?>
		<?php echo $form->textField($model,'jumlah'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'dosis'); ?>
		<?php echo $form->textField($model,'dosis',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cara_pakai'); ?>
		<?php echo $form->textArea($model,'cara_pakai',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_dokter'); ?>
		<?php echo $form->textField($model,'id_dokter'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_apoteker'); ?>
		<?php echo $form->textField($model,'id_apoteker'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'status'); ?>
		<?php echo $form->textField($model,'status',array('size'=>20,'maxlength'=>20)); ?>
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