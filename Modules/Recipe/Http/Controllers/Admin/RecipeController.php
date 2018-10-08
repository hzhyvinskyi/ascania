<?php

namespace Modules\Recipe\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Modules\Recipe\Entities\Category;
use Modules\Recipe\Entities\Complexity;
use Modules\Recipe\Entities\Person;
use Modules\Recipe\Entities\Recipe;
use Modules\Recipe\Entities\Time;
use Modules\Recipe\Http\Requests\CreateRecipeRequest;
use Modules\Recipe\Http\Requests\UpdateRecipeRequest;
use Modules\Recipe\Repositories\CategoryRepository;
use Modules\Recipe\Repositories\RecipeRepository;
use Modules\Core\Http\Controllers\Admin\AdminBaseController;

class RecipeController extends AdminBaseController
{
    /**
     * @var RecipeRepository
     */
    private $recipe;

    /**
     * @var Category
     */
    private $categories;

    /**
     * @var Time
     */
    private $times;

    /**
     * @var Person
     */
    private $persons;

    /**
     * @var Complexity
     */
    private $complexities;

    /**
     * RecipeController constructor.
     * @param RecipeRepository $recipe
     * @param Category $categories
     * @param Time $times
     * @param Person $persons
     * @param Complexity $complexities
     */
    public function __construct(RecipeRepository $recipe, Category $categories, Time $times, Person $persons, Complexity $complexities)
    {
        parent::__construct();

        $this->recipe = $recipe;
        $this->categories = $categories;
        $this->times = $times;
        $this->persons = $persons;
        $this->complexities = $complexities;
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $recipes = $this->recipe->all();

        return view('recipe::admin.recipes.index', compact('recipes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        $categories = $this->categories->all();
        $times = $this->times->all();
        $persons = $this->persons->all();
        $complexities = $this->complexities->all();

        return view('recipe::admin.recipes.create', [
            'categories' => $categories,
            'times' => $times,
            'persons' => $persons,
            'complexities' => $complexities
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  CreateRecipeRequest $request
     * @return Response
     */
    public function store(CreateRecipeRequest $request)
    {
        $recipe = $this->recipe->create($request->all());

        foreach ($request->category_id as $category_id) {
            $recipe->categories()->attach($category_id);
        }

        return redirect()->route('admin.recipe.recipe.index')
            ->withSuccess(trans('core::core.messages.resource created', ['name' => trans('recipe::recipes.title.recipes')]));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Recipe $recipe
     * @return Response
     */
    public function edit(Recipe $recipe)
    {
        $categories = $this->categories->all();
        $times = $this->times->all();
        $persons = $this->persons->all();
        $complexities = $this->complexities->all();
        $relations = $recipe->categories()->get();

        return view('recipe::admin.recipes.edit', [
            'recipe' => $recipe,
            'categories' => $categories,
            'times' => $times,
            'persons' => $persons,
            'complexities' => $complexities,
            'relations' => $relations
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Recipe $recipe
     * @param  UpdateRecipeRequest $request
     * @return Response
     */
    public function update(Recipe $recipe, UpdateRecipeRequest $request)
    {
        $this->recipe->update($recipe, $request->all());
        $this->detach($recipe);
        $this->attach($recipe);

        return redirect()->route('admin.recipe.recipe.index')
            ->withSuccess(trans('core::core.messages.resource updated', ['name' => trans('recipe::recipes.title.recipes')]));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Recipe $recipe
     * @return Response
     */
    public function destroy(Recipe $recipe)
    {
        $this->detach($recipe);
        $this->recipe->destroy($recipe);

        return redirect()->route('admin.recipe.recipe.index')
            ->withSuccess(trans('core::core.messages.resource deleted', ['name' => trans('recipe::recipes.title.recipes')]));
    }

    private function attach(Recipe $recipe)
    {
        foreach ($recipe->categories as $category) {
            $recipe->categories()->attach($category->id);
        }
    }

    private function detach(Recipe $recipe)
    {
        foreach ($recipe->categories as $category) {
            $recipe->categories()->detach($category->id);
        }
    }
}
