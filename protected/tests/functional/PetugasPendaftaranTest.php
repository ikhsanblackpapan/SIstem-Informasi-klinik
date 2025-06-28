<?php

class PetugasPendaftaranTest extends WebTestCase
{
	public $fixtures=array(
		'petugasPendaftarans'=>'PetugasPendaftaran',
	);

	public function testShow()
	{
		$this->open('?r=petugasPendaftaran/view&id=1');
	}

	public function testCreate()
	{
		$this->open('?r=petugasPendaftaran/create');
	}

	public function testUpdate()
	{
		$this->open('?r=petugasPendaftaran/update&id=1');
	}

	public function testDelete()
	{
		$this->open('?r=petugasPendaftaran/view&id=1');
	}

	public function testList()
	{
		$this->open('?r=petugasPendaftaran/index');
	}

	public function testAdmin()
	{
		$this->open('?r=petugasPendaftaran/admin');
	}
}
