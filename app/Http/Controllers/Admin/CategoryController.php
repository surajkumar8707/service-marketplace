<?php

namespace App\Http\Controllers\Admin;

use App\DataTables\CategoryDatatable;
use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(CategoryDatatable $dataTable)
    {
        return $dataTable->render('admin.category.index');
    }

    public function create()
    {
        return view('admin.category.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'status' => 'sometimes|boolean',
        ]);

        Category::create([
            'name' => $validated['name'],
            'status' => $request->has('status') ? $validated['status'] : false,
        ]);

        return redirect()->route('admin.category.index')->with('success', 'Category created successfully.');
    }

    public function edit(Category $category)
    {
        return view('admin.category.edit', compact('category'));
    }

    public function update(Request $request, Category $category)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'status' => 'sometimes|boolean',
        ]);

        $category->update([
            'name' => $validated['name'],
            'status' => $request->has('status') ? $validated['status'] : true,
        ]);

        return redirect()->route('admin.category.index')->with('success', 'Category updated successfully.');
    }

    public function delete(Category $category)
    {
        $category->delete();

        return redirect()->route('admin.category.index')->with('success', 'Category deleted successfully.');
    }

    public function changeStatus(Request $request)
    {
        $status = $request->status;
        $id = $request->id;
        $carousel = Category::find($id);
        if ($carousel) {
            $carousel->update([
                'status' => $status,
            ]);
            return returnWebJsonResponse('Status changed successfully', 'success', $carousel);
        } else {
            return returnWebJsonResponse('Category not found');
        }
    }
}
