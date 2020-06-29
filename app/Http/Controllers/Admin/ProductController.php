<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use App\Product;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
class ProductController extends Controller
{
    function index()
    {
        $animal = Product::all();
        return view('admin.dashboard', ['animals' => $animal]);
    }
    function indexP()
    {
        $animal = Product::all();
        return view('admin.product.index', ['animals' => $animal]);
    }
    function indexU()
    {
        $animal = User::all();
        return view('admin.users.index', ['animals' => $animal]);
    }
    function header(){
        $cate = Category::all();
        return view('user.home',['category'=>$cate]);   
    }
    function create()
    {
        $categories = Category::all();
        return view('admin.product.create', ['categories' => $categories]);
    }
    function store(Request $request)
    {
        $name = $request->name;
        $file = $request->file('image')->store("public");
        $cate = $request->category;
        $price = $request->price;
        $old = $request->oldprice;
        $description = $request->description;
        $quantity = $request->quantity;
     
        $animal = new Product;
        $animal->name = $name;
        $animal->image = $file;
        $animal->category_id = $cate;
        $animal->price = $price;
        $animal->oldprice = $old;
        $animal->description = $description;
        $animal->quantity = $quantity;
        $animal->save();
        return redirect('/admin/product/index');
    }
    function destroy($id)
    {
        Product::find($id)->delete();
        return redirect('/admin/product/index');
    }
    function edit($id)
    {
        $product = Product::find($id);
        $categories = Category::all();
        return view('admin.product.edit', ['edit' => $product, 'categories' => $categories]);
    }
    function update(Request $request, $id)
    {
        $name = $request->name;
        $file = $request->file('image')->store("public");
        $cate = $request->category;
        $price = $request->price;
        $old = $request->oldprice;
        $description = $request->description;
        $quantity = $request->quantity;
 
        $animal = Product::find($id);
        $animal->name = $name;
        $animal->image = $file;
        $animal->category_id = $cate;
        $animal->price = $price;
        $animal->oldprice = $old;
        $animal->description = $description;
        $animal->quantity = $quantity;
        $animal->save();
        return redirect('/admin/product/index');
    }
   
}
