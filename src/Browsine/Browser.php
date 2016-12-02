<?php

namespace Browsine;

class Browser
{
	private $tabManager;
	
	public function __construct($url = null)
	{
		// ...
		$this->tabManager = new TabManager($url);
	}

	public function tab($id, $url = null)
	{
		if ($this->tabManager->has($id)) {
			if (is_null($url)) {
				return $this->tabManager->get($id);
			}

			return $this->tabManager->update($id, $url);
		}

		return $this->tabManager->new($id, $url);
	}
}