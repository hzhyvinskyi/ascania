<?php

namespace Modules\Recipe\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Modules\Recipe\Entities\Complexity;
use Modules\Recipe\Http\Requests\CreateComplexityRequest;
use Modules\Recipe\Http\Requests\UpdateComplexityRequest;
use Modules\Recipe\Repositories\ComplexityRepository;
use Modules\Core\Http\Controllers\Admin\AdminBaseController;

class ComplexityController extends AdminBaseController
{
    /**
     * @var ComplexityRepository
     */
    private $complexity;

    public function __construct(ComplexityRepository $complexity)
    {
        parent::__construct();

        $this->complexity = $complexity;
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        //$complexities = $this->complexity->all();

        return view('recipe::admin.complexities.index', compact(''));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('recipe::admin.complexities.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  CreateComplexityRequest $request
     * @return Response
     */
    public function store(CreateComplexityRequest $request)
    {
        $this->complexity->create($request->all());

        return redirect()->route('admin.recipe.complexity.index')
            ->withSuccess(trans('core::core.messages.resource created', ['name' => trans('recipe::complexities.title.complexities')]));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Complexity $complexity
     * @return Response
     */
    public function edit(Complexity $complexity)
    {
        return view('recipe::admin.complexities.edit', compact('complexity'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Complexity $complexity
     * @param  UpdateComplexityRequest $request
     * @return Response
     */
    public function update(Complexity $complexity, UpdateComplexityRequest $request)
    {
        $this->complexity->update($complexity, $request->all());

        return redirect()->route('admin.recipe.complexity.index')
            ->withSuccess(trans('core::core.messages.resource updated', ['name' => trans('recipe::complexities.title.complexities')]));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Complexity $complexity
     * @return Response
     */
    public function destroy(Complexity $complexity)
    {
        $this->complexity->destroy($complexity);

        return redirect()->route('admin.recipe.complexity.index')
            ->withSuccess(trans('core::core.messages.resource deleted', ['name' => trans('recipe::complexities.title.complexities')]));
    }
}
