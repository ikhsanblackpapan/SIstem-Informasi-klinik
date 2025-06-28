<?php

class LaporanTest extends WebTestCase
{
	public $fixtures=array(
		'laporans'=>'Laporan',
	);

	public function testShow()
	{
		$this->open('?r=laporan/view&id=1');
	}

	public function testCreate()
	{
		$this->open('?r=laporan/create');
	}

	public function testUpdate()
	{
		$this->open('?r=laporan/update&id=1');
	}

	public function testDelete()
	{
		$this->open('?r=laporan/view&id=1');
	}

	public function testList()
	{
		$this->open('?r=laporan/index');
	}

	public function testAdmin()
	{
		$this->open('?r=laporan/admin');
	}
}
