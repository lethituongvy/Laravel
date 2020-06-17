<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    // function index(){
    //     return view("user.home");
    // }
    function logout(){
        Auth::logout();
        return redirect()->route('home');
    }
    function destroy($id)
    {
        DB::table('users')->where('id', "=", $id)->delete();
        return redirect('/admin/users/index');
    }
    function index()
    {
        $index = DB::table('products')->get();
        return view('user.home', ['products' => $index]);
    }
    function details($id){
        $detail = DB::table('products')->find($id);
        return view("user.animals.show", ['show' => $detail]);
    }
    function cart($id){
        $carts = DB::table('products')->find($id);
        return view("user.cart",['cart'=>$carts]);
    }
    function search(Request $request){
        $txt = $request->input('txtSearch');
         $search = DB::table('products')->where('title','LIKE','%'.$txt.'%')->get();
        return view('user.search',['research'=>$search]);
    }
    // function delete($id)
    // {
    //     DB::table('products')->where('id', "=", $id)->delete();
    //     return redirect('/admin/animals/index');
    // }
    
}
