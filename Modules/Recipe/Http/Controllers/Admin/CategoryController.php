<?php

namespace Modules\Recipe\Http\Controllers\Admin;

use Illuminate\Http\Response;
use Modules\Recipe\Entities\Category;
use Modules\Recipe\Http\Requests\CreateCategoryRequest;
use Modules\Recipe\Http\Requests\UpdateCategoryRequest;
use Modules\Recipe\Repositories\CategoryRepository;
use Modules\Core\Http\Controllers\Admin\AdminBaseController;

/**
 * Class CategoryController
 *
 * @package Modules\Recipe\Http\Controllers\Admin
 */
class CategoryController extends AdminBaseController
{
    /**
     * @var CategoryRepository
     */
    private $category;

    /**
     * CategoryController constructor.
     *
     * @param CategoryRepository $category
     */
    public function __construct(CategoryRepository $category)
    {
        parent::__construct();

        $this->category = $category;
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $categories = $this->category->all();

        return view('recipe::admin.categories.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('recipe::admin.categories.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  CreateCategoryRequest $request
     * @return Response
     */
    public function store(CreateCategoryRequest $request)
    {
        $this->category->create($request->all());

        return redirect()->route('admin.recipe.category.index')
            ->withSuccess(trans('core::core.messages.resource created', ['name' => trans('recipe::categories.title.categories')]));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Category $category
     * @return Response
     */
    public function edit(Category $category)
    {
        return view('recipe::admin.categories.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Category $category
     * @param  UpdateCategoryRequest $request
     * @return Response
     */
    public function update(Category $category, UpdateCategoryRequest $request)
    {
        $this->category->update($category, $request->all());

        return redirect()->route('admin.recipe.category.index')
            ->withSuccess(trans('core::core.messages.resource updated', ['name' => trans('recipe::categories.title.categories')]));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Category $category
     * @return Response
     */
    public function destroy(Category $category)
    {
        $this->category->destroy($category);

        return redirect()->route('admin.recipe.category.index')
            ->withSuccess(trans('core::core.messages.resource deleted', ['name' => trans('recipe::categories.title.categories')]));
    }
}
