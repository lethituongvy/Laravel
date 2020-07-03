<?php

namespace App\Http\Controllers\User;

use App\Category;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\Product;
use App\Cart;

class HomeController extends Controller
{
    function productCate($id)
    {
        $cate = Category::all();
        $procate = DB::table('products')->where('category_id', '=', $id)->get();
        return view('user.category.displayCate', ["productcategory" => $procate, "categories" => $cate]);
    }

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
    function delete($id)
    {
        $cart = Cart::find($id);
        $cart->delete();
        return redirect('/user/cart');
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
    function index(Request $request)
    {
        $page = $request->page;
        $category = Category::all();
        $products = Product::all()->skip($page * 4)->take(4);
        if ($products->isEmpty()) { //Nếu photo lớn hơn số lượng trong database sẽ trả về 0
            $products = Product::all()->take(4);
            return redirect('home/?page=0');
        } else if ($page < 0) {
            $totalPage = round(count(Product::all()) / 5) - 1;
            return redirect('home/?page=' . $totalPage);
        }

        return view('user.home', ["products" => $products, "categories" => $category, "page" => $page]);
    }
    function details($id)
    {
        $cate = Category::all();
        $detail = DB::table('products')->find($id);
        return view("user.animals.show", ['show' => $detail, 'categories' => $cate]);
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
            return redirect()->route('home', ["carts" => "Thành Công"]);
        } else {
            DB::table('carts')->insert(["product_id" => $id, "quantity" => 1, "user_id" => $idUser]);
            return redirect()->route('home', ["carts" => "Thành Công"]);
        }
    }
    function increase($id)
    {
        $cart = Cart::find($id);
        $quantity = $cart->quantity + 1;
        $cart->quantity = $quantity;
        $cart->save();
        return redirect('user/cart');
    }
    function crease($id)
    {
        $cart = Cart::find($id);
        $quantity = $cart->quantity - 1;
        $cart->quantity = $quantity;
        $cart->save();
        return redirect('user/cart');
    }
    function search(Request $request)
    {   
        $cate = Category::all();
        $txt = $request->input('txtSearch');
        $search = DB::table('products')->where('name', 'LIKE', '%' . $txt . '%')->get();
        return view('user.search', ['research' => $search,'categories'=>$cate]);
    }
    function pay(){
        $idUser = Auth::user()->id;
        $carts=DB::table('carts')->where("user_id",$idUser)->get();
        foreach ($carts as $cart) {
           $infoProduct= DB::table('products')->where("id", $cart->product_id)->first();
     
           $cart->infoProduct=$infoProduct;
       }
       return view("user.pay",['carts'=> $carts]);
     }

    function order(Request $request)
    {
        $id_user = Auth::user()->id;
        $name =  $request->name;
        $phone = $request->phone;
        $address = $request->address;

        $carts=DB::table('carts')->where("user_id",$id_user )->get();
        foreach ($carts as $cart) {
           $infoProduct= DB::table('products')->where("id", $cart->product_id)->first();
           $cart->infoProduct=$infoProduct;
           $array[]= array(
             "name" =>$cart->infoProduct->name,
             "image" =>$cart->infoProduct->image,
             "quantity" =>$cart->quantity,
             "price" =>$cart->infoProduct->price
         );
       }
        $detail = json_encode($array);
        echo $detail;

        $user_id = Auth::user()->id;
        DB::table('order')->insert([
            "user_id" => $user_id,
            "name" => $name,
            "phone" => $phone,
            "address" => $address,
            "detail" => $detail,
        ]);
        DB::table('carts')->where('user_id', '=', $id_user)->delete();
        return redirect("/home");
    }
}
