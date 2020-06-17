<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    function index()
    {
        $index = DB::table('products')->get();
        return view('/admin.dashboard', ['display' => $index]);
    }

    // delete san pham
    function destroy($id)
    {
        DB::table('products')->where('id', "=", $id)->delete();
        return redirect('/admin/animals/index');
    }

    
    // insert products
    function store(Request $request)
    {
        $title = $request->input('title');
        $description = $request->input('description');
        $price = $request->input('price');
        $filePath = $request->file('image')->store("public");
        DB::table('products')->insert(["title" => $title, "description" => $description, 'price' => $price, "image" => $filePath]);
        return redirect('/admin/animals/index');
        //
    }

    // chuyen den form insert
    function create()
    {
        return view("admin.animals.create");
    }

    // edit products
    function edit($id)
    {
        $photos = DB::table('products')->find($id);
        return view("admin.animals.edit", ['edit' => $photos]);
    }

    //update products
    function update($id, Request $request)
    {
        $title =  $request->title;
        $description =  $request->description;
        $file = $request->file('image')->store("public");
        DB::table('products')
            ->where("id", $id)
            ->update(["title" => $title, "description" => $description, "image" => $file]);
        return redirect('admin/animals/index');
    }
    //edit users
    function editU($id)
    {
        $photos = DB::table('users')->find($id);
        return view("admin.users.edit", ['edit' => $photos]);
    }

    //update users
    function updateU($id, Request $request)
    {
        $username =  $request->username;
        $password =  $request->password;
        $name =  $request->name;
        $class = $request->class;
        $role = $request->role;
        DB::table('users')
            ->where("id", $id)
            ->update(["username" => $username, "password" => $password, "name" => $name,"class"=>$class,"role"=>$role]);
        return redirect('admin/users/index');
    }

    //show quan li user len
    function indexU()
    {
        $indexU = DB::table('users')->get();
        return view('/admin.users.index', ['show' => $indexU]);
    }

    //show quan li products
    function indexP()
    {
        $indexP = DB::table('products')->get();
        return view('/admin.animals.index', ['display' => $indexP]);
    }
}
