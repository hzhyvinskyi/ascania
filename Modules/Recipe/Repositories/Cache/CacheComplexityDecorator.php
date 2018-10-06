<?php

namespace Modules\Recipe\Repositories\Cache;

use Modules\Recipe\Repositories\ComplexityRepository;
use Modules\Core\Repositories\Cache\BaseCacheDecorator;

class CacheComplexityDecorator extends BaseCacheDecorator implements ComplexityRepository
{
    public function __construct(ComplexityRepository $complexity)
    {
        parent::__construct();
        $this->entityName = 'recipe.complexities';
        $this->repository = $complexity;
    }
}
