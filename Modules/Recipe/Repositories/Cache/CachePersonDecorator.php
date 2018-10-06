<?php

namespace Modules\Recipe\Repositories\Cache;

use Modules\Recipe\Repositories\PersonRepository;
use Modules\Core\Repositories\Cache\BaseCacheDecorator;

class CachePersonDecorator extends BaseCacheDecorator implements PersonRepository
{
    public function __construct(PersonRepository $person)
    {
        parent::__construct();
        $this->entityName = 'recipe.people';
        $this->repository = $person;
    }
}
