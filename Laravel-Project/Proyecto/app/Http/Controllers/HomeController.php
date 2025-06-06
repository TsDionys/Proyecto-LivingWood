<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Models\Product;
use App\Models\Cart;
use App\Models\Order;
use Illuminate\Http\Request;



class HomeController extends Controller
{
    public function index()
    {
        $user = User::where('usertype', 'user')->get()->count();
        $product = Product::all()->count();
        $order = Order::all()->count();
        $delivered = Order::where('status', 'Entregado')->get()->count();

        return view('admin.index', compact('user', 'product', 'order', 'delivered'));
    }
    public function home()
    {
        $product = Product::all();

        if (Auth::id()) {
            $user = Auth::user();

            $userid = $user->id;
    
            $count = Cart::where('user_id', $userid)->count();
        }
        else{
            $count = '';
        }

        return view('home.index', data: compact('product', 'count'));
    }

    public function login_home(){
        $product = Product::all();

        if (Auth::id()) {
            $user = Auth::user();

            $userid = $user->id;
    
            $count = Cart::where('user_id', $userid)->count();
        }
        else{
            $count = '';
        }

        return view('home.index', data: compact('product', 'count'));

    }

    public function product_details($id){
        $data = Product::find($id);

        if (Auth::id()) {
            $user = Auth::user();

            $userid = $user->id;
    
            $count = Cart::where('user_id', $userid)->count();
        }
        else{
            $count = '';
        }
        
        return view('home.product_details', compact('data','count'));
    }

    public function add_cart($id){
        $product_id = $id;

        $user = Auth::user();

        $user_id = $user->id;

        $data = new Cart;

        $data->user_id = $user_id;

        $data->product_id = $product_id;

        $data->save();

        flash()->addSuccess('Producto agregado a la orden.'); 

        return redirect()->back();

    }

    public function mycart(){
        if(Auth::id()){
            $user = Auth::user();
            $userid = $user->id;
            $count = Cart::where('user_id',$userid)->count();

            $cart = Cart::where('user_id', $userid)->get();
        }
        return view('home.mycart', compact('count', 'cart'));
    }

    public function delete_cart($id)
    {
        $data = Cart::find($id);

        $data->delete();

        flash()->success('El producto ha sido removido.');

        return redirect()->back();
    }

    public function confirm_order(Request $request){

        $name = $request->name;
        $address = $request->address;
        $phone = $request->phone;
        $userid = Auth::user()->id;
        $cart = Cart::where('user_id', $userid)->get();

        foreach($cart as $carts){

            $order = new Order;
            
            $order->name = $name;

            $order->client_address = $address;

            $order->phone = $phone;

            $order->user_id = $userid;

            $order->product_id = $carts->product_id;

            $order->save();
    
        }

        $cart_clear = Cart::where('user_id',$userid)->get();

        foreach($cart_clear as $clear){

            $data = Cart::find($clear->id);
            $data->delete();
            

        }

        flash()->addSuccess('Orden realizada correctamente.'); 

        return redirect()->back();    

    }

    public function my_orders(){

        $user = Auth::user()->id;
        $count = Cart::where('user_id',$user)->count();
        $order = Order::where('user_id',$user)->get();
        return view('home.orders', compact('count', 'order'));

    }

    public function why_us()
    {
        $product = Product::all();

        if (Auth::id()) {
            $user = Auth::user();

            $userid = $user->id;
    
            $count = Cart::where('user_id', $userid)->count();
        }
        else{
            $count = '';
        }

        return view('home.why_us', data: compact('product', 'count'));
    }

    public function testimony()
    {
        $product = Product::all();

        if (Auth::id()) {
            $user = Auth::user();

            $userid = $user->id;
    
            $count = Cart::where('user_id', $userid)->count();
        }
        else{
            $count = '';
        }

        return view('home.testimony', data: compact('product', 'count'));
    }
}
