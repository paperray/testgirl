<?php 
namespace Paperstreetmedia\Repository;

use Paperstreetmedia\DataAccessObject\GirlDaoInterface;

class GirlRepository implements RepositoryInterface
{
	private $dao;
	
	public function __construct(GirlDaoInterface $dao)
	{
		$this->dao = $dao;
	}
	public function readAll()
	{
		return $this->dao->readAll();
	}

}