<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id_obat'); ?>
		<?php echo $form->textField($model,'id_obat'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'kode_obat'); ?>
		<?php echo $form->textField($model,'kode_obat',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nama_obat'); ?>
		<?php echo $form->textField($model,'nama_obat',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'jenis_obat'); ?>
		<?php echo $form->textField($model,'jenis_obat',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'satuan'); ?>
		<?php echo $form->textField($model,'satuan',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'stok'); ?>
		<?php echo $form->textField($model,'stok'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'harga_beli'); ?>
		<?php echo $form->textField($model,'harga_beli',array('size'=>12,'maxlength'=>12)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'harga_jual'); ?>
		<?php echo $form->textField($model,'harga_jual',array('size'=>12,'maxlength'=>12)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'expired_date'); ?>
		<?php echo $form->textField($model,'expired_date'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_supplier'); ?>
		<?php echo $form->textField($model,'id_supplier'); ?>
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