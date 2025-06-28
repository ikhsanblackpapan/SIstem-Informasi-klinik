<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_laporan')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_laporan), array('view', 'id'=>$data->id_laporan)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('jenis_laporan')); ?>:</b>
	<?php echo CHtml::encode($data->jenis_laporan); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('judul')); ?>:</b>
	<?php echo CHtml::encode($data->judul); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tanggal_mulai')); ?>:</b>
	<?php echo CHtml::encode($data->tanggal_mulai); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tanggal_selesai')); ?>:</b>
	<?php echo CHtml::encode($data->tanggal_selesai); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_user')); ?>:</b>
	<?php echo CHtml::encode($data->id_user); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('parameter')); ?>:</b>
	<?php echo CHtml::encode($data->parameter); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('created_at')); ?>:</b>
	<?php echo CHtml::encode($data->created_at); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('updated_at')); ?>:</b>
	<?php echo CHtml::encode($data->updated_at); ?>
	<br />

	*/ ?>

</div>