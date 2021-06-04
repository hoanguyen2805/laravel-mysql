<?php

namespace App\Http\View\Composers;

use App\Models\Category;
use App\Repositories\CategoryRepository;
use Illuminate\View\View;

class CategoryComposer
{
    protected $categories = [];

    public function __construct()
    {
        $this->categories = Category::all();
    }

    public function compose(View $view)
    {
        $view->with('categories', end($this->categories));
    }
}
