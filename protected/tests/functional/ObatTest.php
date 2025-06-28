<?php

class ObatTest extends WebTestCase
{
	public $fixtures=array(
		'obats'=>'Obat',
	);

	public function testShow()
	{
		$this->open('?r=obat/view&id=1');
	}

	public function testCreate()
	{
		$this->open('?r=obat/create');
	}

	public function testUpdate()
	{
		$this->open('?r=obat/update&id=1');
	}

	public function testDelete()
	{
		$this->open('?r=obat/view&id=1');
	}

	public function testList()
	{
		$this->open('?r=obat/index');
	}

	public function testAdmin()
	{
		$this->open('?r=obat/admin');
	}
}
