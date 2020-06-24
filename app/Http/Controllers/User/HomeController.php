<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\Product;

class HomeController extends Controller
{
    // function index(){
    //     return view("user.home");
    // }
    function logout()
    {
        Auth::logout();
        return redirect()->route('home');
    }
    function destroy($id)
    {
        $user = User::find($id);
        $user->delete();
        return redirect('admin/users/index');
    }
    function edit($id)
    {
        $user = User::find($id);
        // $categories = Category::all();
        return view('admin.users.edit', ['edit' => $user]);
    }
    function update(Request $request, $id)
    {
        $name = $request->name;
        $birth = $request->birth;
        $username = $request->username;
        $password = $request->password;
        $email = $request->email;
        $phone = $request->phone;
        $role = $request->role;

        $animal = User::find($id);
        $animal->name = $name;
        $animal->birth = $birth;
        $animal->username = $username;
        $animal->password = $password;
        $animal->email = $email;
        $animal->phone = $phone;
        $animal->role = $role;
        $animal->save();
        return redirect('/admin/users/index');
    }
    function index()
    {
        $show = Product::all();
        return view('user.home', ['products' => $show]);
    }
    function details($id)
    {
        $detail = DB::table('products')->find($id);
        return view("user.animals.show", ['show' => $detail]);
    }
    function indexCart()
    {
        if (Auth::user()) {
            $idUser = Auth::user()->id;

            $cartdata = DB::table('carts')
                ->where('user_id', '=', $idUser)
                ->join('users', 'users.id', '=', 'carts.user_id')
                ->join('products', 'products.id', '=', 'carts.product_id')
                ->select('carts.id', 'products.name', 'products.price', 'products.image', 'carts.quantity')
                ->get();
            return view("user/cart", ['cartdata' => $cartdata]);
        } else {
            return redirect("/auth/login");
        }
    }
    function addCart($id)
    {
        $idUser = Auth::user()->id;

        $check = DB::table('carts')
            ->where('product_id', $id)
            ->where('user_id', $idUser)
            ->count();

        if ($check == 1) {
            $quantity = DB::table('carts')
                ->where('product_id', $id)
                ->where('user_id', $idUser)
                ->value('quantity') + 1;

            DB::table('carts')
                ->where('product_id', $id)
                ->where('user_id', $idUser)
                ->update(["quantity" => $quantity]);
            return redirect()->route('home', ["carts" => "Thêm vào giỏ hàng Thành Công"]);
        } else {
            DB::table('carts')->insert(["product_id" => $id, "quantity" => 1, "user_id" => $idUser]);
            return redirect()->route('home', ["carts" => "Thêm vào giỏ hàng Thành Công"]);
        }
    }

    function search(Request $request)
    {
        $txt = $request->input('txtSearch');
        $search = DB::table('products')->where('name', 'LIKE', '%' . $txt . '%')->get();
        return view('user.search', ['research' => $search]);
    }
}
