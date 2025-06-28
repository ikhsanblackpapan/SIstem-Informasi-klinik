<?php
$this->breadcrumbs=array(
	'Obat'=>array('index'),
	$model->id_obat,
);

$this->menu=array(
	array('label'=>'List Obat', 'url'=>array('index')),
	array('label'=>'Create Obat', 'url'=>array('create')),
	array('label'=>'Update Obat', 'url'=>array('update', 'id'=>$model->id_obat)),
	array('label'=>'Delete Obat', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_obat),'confirm'=>Yii::t('zii','Are you sure you want to delete this item?'))),
	array('label'=>'Manage Obat', 'url'=>array('admin')),
);
?>

<h1>View Obat #<?php echo $model->id_obat; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_obat',
		'kode_obat',
		'nama_obat',
		'jenis_obat',
		'satuan',
		'stok',
		'harga_beli',
		'harga_jual',
		'expired_date',
		'id_supplier',
		'created_at',
		'updated_at',
	),
)); ?>
