<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_pembayaran')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_pembayaran), array('view', 'id'=>$data->id_pembayaran)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_kunjungan')); ?>:</b>
	<?php echo CHtml::encode($data->id_kunjungan); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tanggal_pembayaran')); ?>:</b>
	<?php echo CHtml::encode($data->tanggal_pembayaran); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('total_tagihan')); ?>:</b>
	<?php echo CHtml::encode($data->total_tagihan); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('total_dibayar')); ?>:</b>
	<?php echo CHtml::encode($data->total_dibayar); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('metode_pembayaran')); ?>:</b>
	<?php echo CHtml::encode($data->metode_pembayaran); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('status_pembayaran')); ?>:</b>
	<?php echo CHtml::encode($data->status_pembayaran); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('keterangan')); ?>:</b>
	<?php echo CHtml::encode($data->keterangan); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_user')); ?>:</b>
	<?php echo CHtml::encode($data->id_user); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('created_at')); ?>:</b>
	<?php echo CHtml::encode($data->created_at); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('updated_at')); ?>:</b>
	<?php echo CHtml::encode($data->updated_at); ?>
	<br />

	*/ ?>

</div>