<?php

namespace Modules\Recipe\Http\Controllers\Admin;

use Illuminate\Http\Response;
use Modules\Recipe\Entities\Time;
use Modules\Recipe\Http\Requests\CreateTimeRequest;
use Modules\Recipe\Http\Requests\UpdateTimeRequest;
use Modules\Recipe\Repositories\TimeRepository;
use Modules\Core\Http\Controllers\Admin\AdminBaseController;

/**
 * Class TimeController
 *
 * @package Modules\Recipe\Http\Controllers\Admin
 */
class TimeController extends AdminBaseController
{
    /**
     * @var TimeRepository
     */
    private $time;

    /**
     * TimeController constructor.
     *
     * @param TimeRepository $time
     */
    public function __construct(TimeRepository $time)
    {
        parent::__construct();

        $this->time = $time;
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $times = $this->time->all();

        return view('recipe::admin.times.index', compact('times'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('recipe::admin.times.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  CreateTimeRequest $request
     * @return Response
     */
    public function store(CreateTimeRequest $request)
    {
        $this->time->create($request->all());

        return redirect()->route('admin.recipe.time.index')
            ->withSuccess(trans('core::core.messages.resource created', ['name' => trans('recipe::times.title.times')]));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Time $time
     * @return Response
     */
    public function edit(Time $time)
    {
        return view('recipe::admin.times.edit', compact('time'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Time $time
     * @param  UpdateTimeRequest $request
     * @return Response
     */
    public function update(Time $time, UpdateTimeRequest $request)
    {
        $this->time->update($time, $request->all());

        return redirect()->route('admin.recipe.time.index')
            ->withSuccess(trans('core::core.messages.resource updated', ['name' => trans('recipe::times.title.times')]));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Time $time
     * @return Response
     */
    public function destroy(Time $time)
    {
        $this->time->destroy($time);

        return redirect()->route('admin.recipe.time.index')
            ->withSuccess(trans('core::core.messages.resource deleted', ['name' => trans('recipe::times.title.times')]));
    }
}
