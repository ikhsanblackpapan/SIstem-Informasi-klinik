<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_kunjungan')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_kunjungan), array('view', 'id'=>$data->id_kunjungan)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_pasien')); ?>:</b>
	<?php echo CHtml::encode($data->id_pasien); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tanggal_kunjungan')); ?>:</b>
	<?php echo CHtml::encode($data->tanggal_kunjungan); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('jenis_kunjungan')); ?>:</b>
	<?php echo CHtml::encode($data->jenis_kunjungan); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('keluhan_utama')); ?>:</b>
	<?php echo CHtml::encode($data->keluhan_utama); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_dokter')); ?>:</b>
	<?php echo CHtml::encode($data->id_dokter); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('status_pembayaran')); ?>:</b>
	<?php echo CHtml::encode($data->status_pembayaran); ?>
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