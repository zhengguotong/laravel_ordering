<?php

namespace App\Services;

use App\Repositories;

abstract class BaseService
{
     /**
     * @var BaseRepository
     */
    protected $reposiotry;

    public function __construct(BaseRepository $reposiotry)
	{
		$this->reposiotry = $reposiotry ;
    }
    
    abstract protected function index();
}