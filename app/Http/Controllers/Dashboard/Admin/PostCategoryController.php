<?php

namespace App\Http\Controllers\Dashboard\Admin;

use App\postcategory;
use App\Http\Controllers\Controller;
use App\Http\Requests\Dashboard\Admin\CategoryStoreRequest;
use App\Http\Requests\Dashboard\Admin\CategoryUpdateRequest;

class PostCategoryController extends Controller
{

    public function index() {
        return view('dashboard.admin.postcategories.index', [
            'categories' => postcategory::hierarchy(),
        ]);
    }
 
    public function create() {
        return view('dashboard.admin.postcategories.create', [
            'categories' => postcategory::hierarchy(),
        ]);
    }

    public function store(CategoryStoreRequest $request) {
        $category = new postcategory($data = $request->validated());
        $category->parent_id = $data['parent_id'];
        $category->save();
        return redirect()->route('dashboard.admin.postcategories.index')
            ->with('success', 'دسته‌بندی با موفقیت ساخته شد!');
    }

    public function edit(postcategory $category) {
        return view('dashboard.admin.postcategories.edit', [
            'category' => $category,
            'categories' => postcategory::hierarchy(),
        ]);
    }

    public function update(CategoryUpdateRequest $request, postcategory $category) {
        $category->fill($data = $request->validated());
        $category->parent_id = $data['parent_id'];
        $category->save();
        return redirect()->route('dashboard.admin.postcategories.index')
            ->with('success', 'دسته‌بندی با موفقیت ویرایش شد!');
    }

}
