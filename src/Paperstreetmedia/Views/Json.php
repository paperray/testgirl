<?php 
namespace Paperstreetmedia\Views;

class Json implements ViewInterface
{
	public function output($data)
	{
		return json_encode($data);
	}
}