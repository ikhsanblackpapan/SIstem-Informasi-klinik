<?php

class WilayahTest extends WebTestCase
{
	public $fixtures=array(
		'wilayahs'=>'Wilayah',
	);

	public function testShow()
	{
		$this->open('?r=wilayah/view&id=1');
	}

	public function testCreate()
	{
		$this->open('?r=wilayah/create');
	}

	public function testUpdate()
	{
		$this->open('?r=wilayah/update&id=1');
	}

	public function testDelete()
	{
		$this->open('?r=wilayah/view&id=1');
	}

	public function testList()
	{
		$this->open('?r=wilayah/index');
	}

	public function testAdmin()
	{
		$this->open('?r=wilayah/admin');
	}
}
