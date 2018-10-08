<?php

namespace Modules\Recipe\Http\Controllers;

use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Modules\Recipe\Repositories\RecipeRepository;
use Modules\Recipe\Repositories\TimeRepository;
use Modules\Recipe\Repositories\PersonRepository;
use Modules\Recipe\Repositories\ComplexityRepository;

class RecipeController extends Controller
{
    const POSTS_PER_PAGE = 9;

    /**
     * @var RecipeRepository
     */
    private $recipe;

    /**
     * @var TimeRepository
     */
    private $time;

    /**
     * @var PersonRepository
     */
    private $person;

    /**
     * @var ComplexityRepository
     */
    private $complexity;


    public function __construct(RecipeRepository $recipe, TimeRepository $time, PersonRepository $person, ComplexityRepository $complexity)
    {
        $this->recipe = $recipe;
        $this->time = $time;
        $this->person = $person;
        $this->complexity = $complexity;
    }

    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index()
    {
        $recipes = $this->recipe->paginate(self::POSTS_PER_PAGE);
        $times = $this->time->all();
        $persons = $this->person->all();
        $complexities = $this->complexity->all();

        return view('recipe::pages.index', [
            'recipes' => $recipes,
            'times' => $times,
            'persons' => $persons,
            'complexities' => $complexities
        ]);
    }


    /**
     * Show the specified resource.
     * @param $id
     * @return array|\Illuminate\Contracts\View\Factory|\Illuminate\View\View|mixed
     */
    public function show($id)
    {
        $recipe = $this->recipe->find($id);
        $recipes = $this->recipe->all();
        $lastRecipes = $this->recipe->orderBy('id', 'desc')->limit(3)->get();

        return view('recipe::pages.show', [
            'recipe' => $recipe,
            'recipes' => $recipes,
            'lastRecipes' => $lastRecipes
        ]);
    }
}
