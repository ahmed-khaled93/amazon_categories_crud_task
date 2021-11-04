<?php

namespace App\Repositories;

use App\Repositories\BaseRepository;
use App\Models\Category;

/**
 * Class CategoriesRepository.
 */
class CategoriesRepository extends BaseRepository
{
    public function __construct(Category $model)
    {
        $this->model = $model;
    }

    /**
     * @param Request $request
     *
     * @throws \Exception
     * @throws \Throwable
     * @return Category
     */
    public function store()
    {
        $category = Category::create(request(['title', 'category_id']));
    }

    /**
     * @param Category  $category
     *
     * @throws GeneralException
     * @throws \Exception
     * @throws \Throwable
     * @return Category
     */
    public function update($category)
    {
        $category->update(request(['title', 'category_id']));
    }

    /**
     * @param Category $category
     *
     * @throws GeneralException
     * @throws \Exception
     * @throws \Throwable
     * @return Category
     */
    public function destroy($category)
    {
        $category->delete();
    }

}
