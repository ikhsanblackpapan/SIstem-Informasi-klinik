<?php

class TindakanTest extends WebTestCase
{
	public $fixtures=array(
		'tindakans'=>'Tindakan',
	);

	public function testShow()
	{
		$this->open('?r=tindakan/view&id=1');
	}

	public function testCreate()
	{
		$this->open('?r=tindakan/create');
	}

	public function testUpdate()
	{
		$this->open('?r=tindakan/update&id=1');
	}

	public function testDelete()
	{
		$this->open('?r=tindakan/view&id=1');
	}

	public function testList()
	{
		$this->open('?r=tindakan/index');
	}

	public function testAdmin()
	{
		$this->open('?r=tindakan/admin');
	}
}
