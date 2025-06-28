<?php
$this->breadcrumbs=array(
	'Petugas Pendaftarans',
);

$this->menu=array(
	array('label'=>'Create PetugasPendaftaran', 'url'=>array('create')),
	array('label'=>'Manage PetugasPendaftaran', 'url'=>array('admin')),
);
?>

<h1>Petugas Pendaftarans</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
