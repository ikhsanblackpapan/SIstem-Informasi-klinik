<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_resep')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_resep), array('view', 'id'=>$data->id_resep)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_kunjungan')); ?>:</b>
	<?php echo CHtml::encode($data->id_kunjungan); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_obat')); ?>:</b>
	<?php echo CHtml::encode($data->id_obat); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('jumlah')); ?>:</b>
	<?php echo CHtml::encode($data->jumlah); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dosis')); ?>:</b>
	<?php echo CHtml::encode($data->dosis); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cara_pakai')); ?>:</b>
	<?php echo CHtml::encode($data->cara_pakai); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_dokter')); ?>:</b>
	<?php echo CHtml::encode($data->id_dokter); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('id_apoteker')); ?>:</b>
	<?php echo CHtml::encode($data->id_apoteker); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('status')); ?>:</b>
	<?php echo CHtml::encode($data->status); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('created_at')); ?>:</b>
	<?php echo CHtml::encode($data->created_at); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('updated_at')); ?>:</b>
	<?php echo CHtml::encode($data->updated_at); ?>
	<br />

	*/ ?>

</div>