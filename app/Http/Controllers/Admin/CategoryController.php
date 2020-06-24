<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Category;
 
class CategoryController extends Controller
{
    function index()
    {
        $category = Category::all();
        return view('admin.category.index', ['categories' => $category]);
    }
    function create()
    {
        return view('admin.category.create');
    }
    function store(Request $request)
    {
        $name = $request->name;
        $cate = new Category;
        $cate->name = $name;
        $cate->save();
        return redirect('/admin/category/index');
    } 
    function destroy($id)
    {
        $cate = Category::find($id);
        $cate->delete();
        return redirect('/admin/category/index');
    }
    function edit($id)
    {
        $cate = Category::find($id);
        return view('admin.category.edit', ['edit' => $cate]);
    }
    function update(Request $request, $id)
    {
        $name = $request->name;
        $cate = Category::find($id);
        $cate->name = $name;
        $cate->save();
        return redirect('/admin/category/index');
    }
}
