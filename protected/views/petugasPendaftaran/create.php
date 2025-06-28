<?php
$this->breadcrumbs=array(
	'Petugas Pendaftarans'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List PetugasPendaftaran', 'url'=>array('index')),
	array('label'=>'Manage PetugasPendaftaran', 'url'=>array('admin')),
);
?>

<h1>Create PetugasPendaftaran</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>