<?php

namespace Modules\Recipe\Events\Handlers;

use Maatwebsite\Sidebar\Group;
use Maatwebsite\Sidebar\Item;
use Maatwebsite\Sidebar\Menu;
use Modules\Core\Events\BuildingSidebar;
use Modules\User\Contracts\Authentication;

class RegisterRecipeSidebar implements \Maatwebsite\Sidebar\SidebarExtender
{
    /**
     * @var Authentication
     */
    protected $auth;

    /**
     * @param Authentication $auth
     *
     * @internal param Guard $guard
     */
    public function __construct(Authentication $auth)
    {
        $this->auth = $auth;
    }

    public function handle(BuildingSidebar $sidebar)
    {
        $sidebar->add($this->extendWith($sidebar->getMenu()));
    }

    /**
     * @param Menu $menu
     * @return Menu
     */
    public function extendWith(Menu $menu)
    {
        $menu->group(trans('core::sidebar.content'), function (Group $group) {
            $group->item(trans('recipe::recipes.title.recipes'), function (Item $item) {
                $item->icon('fa fa-copy');
                $item->weight(10);
                $item->authorize(
                     /* append */
                );
                $item->item(trans('recipe::recipes.title.recipes'), function (Item $item) {
                    $item->icon('fa fa-copy');
                    $item->weight(0);
                    $item->append('admin.recipe.recipe.create');
                    $item->route('admin.recipe.recipe.index');
                    $item->authorize(
                        $this->auth->hasAccess('recipe.recipes.index')
                    );
                });
                $item->item(trans('recipe::categories.title.categories'), function (Item $item) {
                    $item->icon('fa fa-copy');
                    $item->weight(0);
                    $item->append('admin.recipe.category.create');
                    $item->route('admin.recipe.category.index');
                    $item->authorize(
                        $this->auth->hasAccess('recipe.categories.index')
                    );
                });
                $item->item(trans('recipe::times.title.times'), function (Item $item) {
                    $item->icon('fa fa-copy');
                    $item->weight(0);
                    $item->append('admin.recipe.time.create');
                    $item->route('admin.recipe.time.index');
                    $item->authorize(
                        $this->auth->hasAccess('recipe.times.index')
                    );
                });
                $item->item(trans('recipe::people.title.people'), function (Item $item) {
                    $item->icon('fa fa-copy');
                    $item->weight(0);
                    $item->append('admin.recipe.person.create');
                    $item->route('admin.recipe.person.index');
                    $item->authorize(
                        $this->auth->hasAccess('recipe.people.index')
                    );
                });
                $item->item(trans('recipe::complexities.title.complexities'), function (Item $item) {
                    $item->icon('fa fa-copy');
                    $item->weight(0);
                    $item->append('admin.recipe.complexity.create');
                    $item->route('admin.recipe.complexity.index');
                    $item->authorize(
                        $this->auth->hasAccess('recipe.complexities.index')
                    );
                });
// append





            });
        });

        return $menu;
    }
}
