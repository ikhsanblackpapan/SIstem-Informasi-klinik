<?php
$this->breadcrumbs=array(
	'Kunjungan',
);

$this->menu=array(
	array('label'=>'Create Kunjungan', 'url'=>array('create')),
	array('label'=>'Manage Kunjungan', 'url'=>array('admin')),
);
?>

<h1>Kunjungan</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
