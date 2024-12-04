<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;
use App\Models\Order;



class AdminController extends Controller
{
    public function view_category()
    {
        $data = Category::all();
        return view('admin.category', compact('data'));
    }

    public function add_category(Request $request)
    {
        $category = new Category;
        $category->category_name = $request->category;
        $category->save();

        flash()->success('Categoría agregada satisfactoriamente.'); 
        flash('Categoría agregada.');
       

        return redirect()->back();
    }

    public function delete_category($id){
        $date = Category::find($id);
        $date->delete();
        flash()->addError('Categoría eliminada satisfactoriamente.');       
        return redirect()->back();
        
    }

    public function edit_category($id){
        $data = Category::find($id);
        return view ('admin.edit_category', compact('data'));
    }

    public function update_category(Request $request,$id){
        $data = Category::find($id);
        $data->category_name= $request->category;
        $data->save();
        flash()->addSuccess('Categoría editada satisfactoriamente.'); 
        return redirect('/view_category');
    }

    public function add_product(){

        $category = Category::all();
        return view ('admin.add_product', compact('category'));
    }

    public function upload_product(Request $request){

        $data = new Product;

        $data -> title = $request-> title;
        $data -> description = $request-> description;
        $data -> price = $request-> price;
        $data -> quantity = $request-> qty;
        $data -> category = $request-> category;

        $image = $request->image;
        if ($image) 
        {
            $image_name =time().'.'.$image->getClientOriginalExtension();
            $request->image->move('products', $image_name);
            $data->image = $image_name;
        }

        $data ->save();
        flash()->addSuccess('Producto agregado satisfactoriamente.'); 


        return redirect()->back();

    }

    public function view_product(){
        $product = Product::paginate(5);
        return view('admin.view_product', compact('product'));
    }

    public function delete_product($id){  
        $data = Product::find($id);
        $image_path = public_path('products/'.$data->image);

        if(file_exists($image_path)){
            unlink($image_path);
        }

        $data->delete();
        flash()->addSuccess('Producto eliminado satisfactoriamente.'); 
        return redirect()->back();
    }

    public function update_product($id){

        $data = Product::find($id);
        $category = Category::all();
        return view('admin.update_page', compact('data', 'category'));
    }

    public function edit_product(Request $request,$id){
        $data = Product::find($id);

        $data -> title = $request -> title;
        $data -> description = $request-> description;
        $data -> price = $request-> price;
        $data -> quantity = $request-> qty;
        $data -> category = $request-> category;

        $image = $request->image;
        if ($image) 
        {
            $image_name =time().'.'.$image->getClientOriginalExtension();
            $request->image->move('products', $image_name);
            $data->image = $image_name;
        }

        $data ->save();
        flash()->addSuccess('Producto actualizado satisfactoriamente.'); 
        return redirect('/view_product');

    }

    public function product_search(Request $request){
        /*$search = $request->search;
        $product = Product::where('title', 'LIKE', '%'.$search. '%')-> paginate(3);*/

        $search = $request->search;
        if($search){
            $product = Product::where('title', 'like', '%' . $search . '%')
                ->orWhere('category', 'like', '%' . $search . '%')
                ->paginate(2);
        }
        else{
            $product = Product::paginate(5);
        }
        return view('admin.view_product', compact('product'));
    }

    public function view_orders(){

        $data = Order::all();
        return view('admin.view_orders', compact('data'));
    }

    public function on_delivery($id){

        $data = Order::find($id);
        $data->status = 'En delivery';
        $data->save();
        flash()->addSuccess('Pedido actualizado satisfactoriamente.'); 
        return redirect('/view_orders');
    }

    public function delivered($id){

        $data = Order::find($id);
        $data->status = 'Entregado';
        $data->save();
        flash()->addSuccess('Pedido actualizado satisfactoriamente.'); 
        return redirect('/view_orders');
    }
}
