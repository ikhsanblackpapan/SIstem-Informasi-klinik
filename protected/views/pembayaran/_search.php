<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id_pembayaran'); ?>
		<?php echo $form->textField($model,'id_pembayaran'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_kunjungan'); ?>
		<?php echo $form->textField($model,'id_kunjungan'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tanggal_pembayaran'); ?>
		<?php echo $form->textField($model,'tanggal_pembayaran'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'total_tagihan'); ?>
		<?php echo $form->textField($model,'total_tagihan',array('size'=>12,'maxlength'=>12)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'total_dibayar'); ?>
		<?php echo $form->textField($model,'total_dibayar',array('size'=>12,'maxlength'=>12)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'metode_pembayaran'); ?>
		<?php echo $form->textField($model,'metode_pembayaran',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'status_pembayaran'); ?>
		<?php echo $form->textField($model,'status_pembayaran',array('size'=>15,'maxlength'=>15)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'keterangan'); ?>
		<?php echo $form->textArea($model,'keterangan',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_user'); ?>
		<?php echo $form->textField($model,'id_user'); ?>
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