<?php

class PembayaranTest extends WebTestCase
{
	public $fixtures=array(
		'pembayarans'=>'Pembayaran',
	);

	public function testShow()
	{
		$this->open('?r=pembayaran/view&id=1');
	}

	public function testCreate()
	{
		$this->open('?r=pembayaran/create');
	}

	public function testUpdate()
	{
		$this->open('?r=pembayaran/update&id=1');
	}

	public function testDelete()
	{
		$this->open('?r=pembayaran/view&id=1');
	}

	public function testList()
	{
		$this->open('?r=pembayaran/index');
	}

	public function testAdmin()
	{
		$this->open('?r=pembayaran/admin');
	}
}
