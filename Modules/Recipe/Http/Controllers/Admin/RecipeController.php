<?php

namespace Modules\Recipe\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Modules\Recipe\Entities\Recipe;
use Modules\Recipe\Http\Requests\CreateRecipeRequest;
use Modules\Recipe\Http\Requests\UpdateRecipeRequest;
use Modules\Recipe\Repositories\RecipeRepository;
use Modules\Core\Http\Controllers\Admin\AdminBaseController;

class RecipeController extends AdminBaseController
{
    /**
     * @var RecipeRepository
     */
    private $recipe;

    public function __construct(RecipeRepository $recipe)
    {
        parent::__construct();

        $this->recipe = $recipe;
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        //$recipes = $this->recipe->all();

        return view('recipe::admin.recipes.index', compact(''));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('recipe::admin.recipes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  CreateRecipeRequest $request
     * @return Response
     */
    public function store(CreateRecipeRequest $request)
    {
        $this->recipe->create($request->all());

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
        return view('recipe::admin.recipes.edit', compact('recipe'));
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
        $this->recipe->destroy($recipe);

        return redirect()->route('admin.recipe.recipe.index')
            ->withSuccess(trans('core::core.messages.resource deleted', ['name' => trans('recipe::recipes.title.recipes')]));
    }
}
