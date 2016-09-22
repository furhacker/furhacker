<?php
namespace Home\Controller;
use Think\Controller;

class RegController extends Controller
{
	public function index()
	{
		$this->display();
	}

	public function index1()
	{
		$this->display();
	}

	public function captcha()
	{
		$cfg = array(
			'fontSize' => 14,
			'useCurve' => false,
			'useNoise' => false,
			'length'   => 4,
			'fontttf'  => '4.ttf',
		);
		$captcha = new \Think\Verify($cfg);
		$captcha -> entry();
	}

}