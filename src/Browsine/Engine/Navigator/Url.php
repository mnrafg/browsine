<?php

namespace Browsine\Engine\Navigator;

class Url
{
	private $url;

	public function __construct($url)
	{
		$this->url = $url;
	}

	public function get()
	{
		return $this->url;
	}
}