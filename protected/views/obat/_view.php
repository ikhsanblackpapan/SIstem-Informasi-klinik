<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_obat')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_obat), array('view', 'id'=>$data->id_obat)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('kode_obat')); ?>:</b>
	<?php echo CHtml::encode($data->kode_obat); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nama_obat')); ?>:</b>
	<?php echo CHtml::encode($data->nama_obat); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('jenis_obat')); ?>:</b>
	<?php echo CHtml::encode($data->jenis_obat); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('satuan')); ?>:</b>
	<?php echo CHtml::encode($data->satuan); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('stok')); ?>:</b>
	<?php echo CHtml::encode($data->stok); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('harga_beli')); ?>:</b>
	<?php echo CHtml::encode($data->harga_beli); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('harga_jual')); ?>:</b>
	<?php echo CHtml::encode($data->harga_jual); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('expired_date')); ?>:</b>
	<?php echo CHtml::encode($data->expired_date); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_supplier')); ?>:</b>
	<?php echo CHtml::encode($data->id_supplier); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('created_at')); ?>:</b>
	<?php echo CHtml::encode($data->created_at); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('updated_at')); ?>:</b>
	<?php echo CHtml::encode($data->updated_at); ?>
	<br />

	*/ ?>

</div>