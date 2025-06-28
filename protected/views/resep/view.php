<?php
$this->breadcrumbs=array(
	'Reseps'=>array('index'),
	$model->id_resep,
);

$this->menu=array(
	array('label'=>'List Resep', 'url'=>array('index')),
	array('label'=>'Create Resep', 'url'=>array('create')),
	array('label'=>'Update Resep', 'url'=>array('update', 'id'=>$model->id_resep)),
	array('label'=>'Delete Resep', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_resep),'confirm'=>Yii::t('zii','Are you sure you want to delete this item?'))),
	array('label'=>'Manage Resep', 'url'=>array('admin')),
);
?>

<h1>View Resep #<?php echo $model->id_resep; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_resep',
		'id_kunjungan',
		'id_obat',
		'jumlah',
		'dosis',
		'cara_pakai',
		'id_dokter',
		'id_apoteker',
		'status',
		'created_at',
		'updated_at',
	),
)); ?>
