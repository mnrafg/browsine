<?php

namespace Browsine;

use Engine/Navigator/Url;

class Browser
{
	private $url;

	public function setUrl($url)
	{
		$this->url = new Url($url);
	}

	public function getUrl()
	{
		return $this->url->get();
	}

	public function go()
	{
		
	}

	public function setAddress($url)
	{
		$this->setUrl($url);
	}

	public function getAddress()
	{
		return $this->getUrl();
	}

	public function enter()
	{
		$this->go();
	}
}