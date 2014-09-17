<?php 
namespace Paperstreetmedia\DataAccessObject;

class GirlMysqlDao implements GirlDaoInterface
{
	public function readAll()
	{
		$girl = new \StdClass;
		$girl->name = 'ray';
		$girl->title = 'sexy';
		return $girl;
	}
}