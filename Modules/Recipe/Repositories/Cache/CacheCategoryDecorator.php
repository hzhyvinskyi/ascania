<?php

namespace Modules\Recipe\Repositories\Cache;

use Modules\Recipe\Repositories\CategoryRepository;
use Modules\Core\Repositories\Cache\BaseCacheDecorator;

class CacheCategoryDecorator extends BaseCacheDecorator implements CategoryRepository
{
    public function __construct(CategoryRepository $category)
    {
        parent::__construct();
        $this->entityName = 'recipe.categories';
        $this->repository = $category;
    }
}
