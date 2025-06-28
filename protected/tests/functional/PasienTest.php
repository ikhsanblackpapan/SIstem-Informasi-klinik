<?php

class PasienTest extends WebTestCase
{
	public $fixtures=array(
		'pasiens'=>'Pasien',
	);

	public function testShow()
	{
		$this->open('?r=pasien/view&id=1');
	}

	public function testCreate()
	{
		$this->open('?r=pasien/create');
	}

	public function testUpdate()
	{
		$this->open('?r=pasien/update&id=1');
	}

	public function testDelete()
	{
		$this->open('?r=pasien/view&id=1');
	}

	public function testList()
	{
		$this->open('?r=pasien/index');
	}

	public function testAdmin()
	{
		$this->open('?r=pasien/admin');
	}
}
