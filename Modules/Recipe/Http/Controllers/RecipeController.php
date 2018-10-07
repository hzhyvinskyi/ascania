<?php

namespace Modules\Recipe\Http\Controllers;

use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Modules\Recipe\Entities\Complexity;
use Modules\Recipe\Entities\Person;
use Modules\Recipe\Entities\Recipe;
use Modules\Recipe\Entities\Time;
use Modules\Recipe\Repositories\Eloquent\EloquentRecipeRepository;

class RecipeController extends Controller
{
    const POSTS_PER_PAGE = 9;

    /**
     * @var Recipe
     */
    private $recipe;

    /**
     * @var Time
     */
    private $time;

    /**
     * @var Person
     */
    private $person;

    /**
     * @var Complexity
     */
    private $complexity;

    /**
     * RecipeController constructor.
     * @param Recipe $recipe
     * @param Time $time
     * @param Person $person
     * @param Complexity $complexity
     */
    public function __construct(Recipe $recipe, Time $time, Person $person, Complexity $complexity)
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

        return view('recipe::pages.show', compact('recipe'));
    }
}
