<?php
$this->breadcrumbs=array(
	'Tindakan'=>array('index'),
	$model->id_tindakan,
);

$this->menu=array(
	array('label'=>'List Tindakan', 'url'=>array('index')),
	array('label'=>'Create Tindakan', 'url'=>array('create')),
	array('label'=>'Update Tindakan', 'url'=>array('update', 'id'=>$model->id_tindakan)),
	array('label'=>'Delete Tindakan', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_tindakan),'confirm'=>Yii::t('zii','Are you sure you want to delete this item?'))),
	array('label'=>'Manage Tindakan', 'url'=>array('admin')),
);
?>

<h1>View Tindakan #<?php echo $model->id_tindakan; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_tindakan',
		'kode_tindakan',
		'nama_tindakan',
		'kategori',
		'harga',
		'deskripsi',
		'created_at',
		'updated_at',
	),
)); ?>
