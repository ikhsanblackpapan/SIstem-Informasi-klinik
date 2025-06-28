<?php

class KunjunganTest extends WebTestCase
{
	public $fixtures=array(
		'kunjungans'=>'Kunjungan',
	);

	public function testShow()
	{
		$this->open('?r=kunjungan/view&id=1');
	}

	public function testCreate()
	{
		$this->open('?r=kunjungan/create');
	}

	public function testUpdate()
	{
		$this->open('?r=kunjungan/update&id=1');
	}

	public function testDelete()
	{
		$this->open('?r=kunjungan/view&id=1');
	}

	public function testList()
	{
		$this->open('?r=kunjungan/index');
	}

	public function testAdmin()
	{
		$this->open('?r=kunjungan/admin');
	}
}
