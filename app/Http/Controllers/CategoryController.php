<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\CategoriesRepository;
use App\Http\Requests\Categories\StoreCategoriesRequest;
use App\Models\Category;

class CategoryController extends Controller
{
    /**
    * @var CategoriesRepository
    */
    protected $categoriesRepository;

    /**
    * CategoryController constructor.
    *
    * @param CategoriesRepository $categoriesRepository
    */
    public function __construct(CategoriesRepository $categoriesRepository)
    {
       $this->categoriesRepository = $categoriesRepository;
    }

    /**
    *
    * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
    */
    public function index()
    {
      return view('categories.categories')->withCategories($this->categoriesRepository
            ->orderBy('id')
            ->paginate(10));
    }

    /**
    *
    * @return mixed
    */
    public function create()
    {
      return view('categories.create')->withCategories(Category::all());
    }

    /**
    * @param StoreCategoriesRequest $request
    * @param Category              $categories
    *
    * @throws \Throwable
    * @return mixed
    */
    public function store(StoreCategoriesRequest $request, Category $categories)
    {
       $this->categoriesRepository->store();
       return redirect()->route('categories')->withFlashSuccess(__('Category Created Successfully'));
    }

     /**
    * @param Category $category
    *
    * @return mixed
    */
    public function edit(Category $category)
    {
        return view('categories.edit')
            ->withCategories(Category::all())
            ->withCategory($category);
    }

    /**
    * @param StoreCategoriesRequest $request
    * @param Category              $category
    *
    * @throws \App\Exceptions\GeneralException
    * @throws \Throwable
    * @return mixed
    */
    public function update(StoreCategoriesRequest $request, Category $category)
    {
        $this->categoriesRepository->update($category);
        return redirect()->route('categories')->withFlashSuccess(__('Category Updated Successfully'));
    }

    /**
    * @param Category $category
    *
    * @throws \Exception
    * @return mixed
    */
    public function destroy(Category $category)
    {
        $this->categoriesRepository->destroy($category);
        return back()->withFlashSuccess(__('Category Deleted Successfully'));
    }

}
