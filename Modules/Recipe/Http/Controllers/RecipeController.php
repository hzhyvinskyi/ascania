<?php

namespace Modules\Recipe\Http\Controllers;

use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Modules\Recipe\Entities\Recipe;
use Modules\Recipe\Repositories\Eloquent\EloquentRecipeRepository;

class RecipeController extends Controller
{
    /**
     * @var Recipe|EloquentRecipeRepository
     */
    private $recipe;

    /**
     * RecipeController constructor.
     * @param Recipe $recipe
     */
    public function __construct(Recipe $recipe)
    {
        $this->recipe = $recipe;
    }

    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index()
    {
        return view('recipe::pages.index');
    }


    /**
     * Show the specified resource.
     * @param $id
     * @return array|\Illuminate\Contracts\View\Factory|\Illuminate\View\View|mixed
     */
    public function show($id)
    {
        $recipe = $this->recipe->find($id);

        return view('recipe::pages.show', compact('recipe'));
    }
}
