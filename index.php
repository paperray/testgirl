<?php
require_once  'vendor/autoload.php'; 


$girl = new Paperstreetmedia\Girl(new Paperstreetmedia\Repository\GirlRepository(new Paperstreetmedia\DataAccessObject\GirlMysqlDao), new Paperstreetmedia\Views\Json);

var_dump($girl->getAllGirls());

