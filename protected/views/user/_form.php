<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'user-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'username'); ?>
		<?php echo $form->textField($model,'username',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'username'); ?>
	</div>

	<div class="row">
    <?php echo $form->labelEx($model,'password'); ?>
    <?php echo $form->passwordField($model,'password',array('size'=>50,'maxlength'=>50)); ?>
    <?php echo $form->error($model,'password'); ?>
</div>

	<div class="row">
    <?php echo $form->labelEx($model,'role'); ?>
    <?php echo $form->dropDownList(
        $model,
        'role',
        User::getRoleOptions(),
        array('prompt'=>'Pilih Role')
    ); ?>
    <?php echo $form->error($model,'role'); ?>
</div>



	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->