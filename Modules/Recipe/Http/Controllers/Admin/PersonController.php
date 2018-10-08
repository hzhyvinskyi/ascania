<?php

namespace Modules\Recipe\Http\Controllers\Admin;

use Illuminate\Http\Response;
use Modules\Recipe\Entities\Person;
use Modules\Recipe\Http\Requests\CreatePersonRequest;
use Modules\Recipe\Http\Requests\UpdatePersonRequest;
use Modules\Recipe\Repositories\PersonRepository;
use Modules\Core\Http\Controllers\Admin\AdminBaseController;

class PersonController extends AdminBaseController
{
    /**
     * @var PersonRepository
     */
    private $person;

    public function __construct(PersonRepository $person)
    {
        parent::__construct();

        $this->person = $person;
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $persons = $this->person->all();

        return view('recipe::admin.persons.index', compact('persons'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('recipe::admin.persons.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  CreatePersonRequest $request
     * @return Response
     */
    public function store(CreatePersonRequest $request)
    {
        $this->person->create($request->all());

        return redirect()->route('admin.recipe.person.index')
            ->withSuccess(trans('core::core.messages.resource created', ['name' => trans('recipe::people.title.people')]));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Person $person
     * @return Response
     */
    public function edit(Person $person)
    {
        return view('recipe::admin.persons.edit', compact('person'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Person $person
     * @param  UpdatePersonRequest $request
     * @return Response
     */
    public function update(Person $person, UpdatePersonRequest $request)
    {
        $this->person->update($person, $request->all());

        return redirect()->route('admin.recipe.person.index')
            ->withSuccess(trans('core::core.messages.resource updated', ['name' => trans('recipe::people.title.people')]));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Person $person
     * @return Response
     */
    public function destroy(Person $person)
    {
        $this->person->destroy($person);

        return redirect()->route('admin.recipe.person.index')
            ->withSuccess(trans('core::core.messages.resource deleted', ['name' => trans('recipe::people.title.people')]));
    }
}
