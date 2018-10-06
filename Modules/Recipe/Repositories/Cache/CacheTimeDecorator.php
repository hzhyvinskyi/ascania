<?php

namespace Modules\Recipe\Repositories\Cache;

use Modules\Recipe\Repositories\TimeRepository;
use Modules\Core\Repositories\Cache\BaseCacheDecorator;

class CacheTimeDecorator extends BaseCacheDecorator implements TimeRepository
{
    public function __construct(TimeRepository $time)
    {
        parent::__construct();
        $this->entityName = 'recipe.times';
        $this->repository = $time;
    }
}
