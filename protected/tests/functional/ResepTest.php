<?php

class ResepTest extends WebTestCase
{
	public $fixtures=array(
		'reseps'=>'Resep',
	);

	public function testShow()
	{
		$this->open('?r=resep/view&id=1');
	}

	public function testCreate()
	{
		$this->open('?r=resep/create');
	}

	public function testUpdate()
	{
		$this->open('?r=resep/update&id=1');
	}

	public function testDelete()
	{
		$this->open('?r=resep/view&id=1');
	}

	public function testList()
	{
		$this->open('?r=resep/index');
	}

	public function testAdmin()
	{
		$this->open('?r=resep/admin');
	}
}
