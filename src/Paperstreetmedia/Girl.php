<?php
namespace Paperstreetmedia;

use Paperstreetmedia\Repository\RepositoryInterface;
use Paperstreetmedia\Views\ViewInterface;

class Girl{
	
	public $girl;
	public $view;

	public $name;
	public $title;
	public function __construct(RepositoryInterface $girl, ViewInterface $view)
	{
		$this->girl = $girl;
		$this->view = $view;
	}
	public function getAllGirls()
	{
		return $data = $this->view->output($this->girl->readAll());
	}
}