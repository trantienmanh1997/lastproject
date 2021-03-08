<?php



namespace App\Http\Controllers\Backend;



use App\Http\Controllers\Controller;
use App\Models\Backend\ProductsModel;

use Illuminate\Http\Request;



class ProductsController extends Controller

{

   //



   public function index() {



       return view("backend.products.index");

   }





   public function create() {



       return view("backend.products.create");

   }



   public function edit() {



       return view("backend.products.edit");

   }



   public function detete() {



       return view("backend.products.detete");

   }
   public function store(Request $request){
    //    $validatedData = $request->validate([
    //     'product_name' => 'required',

    //     'product_desc' => 'required',
     
    //     'product_quantity' => 'required',
     
    //     'product_price' => 'required',

    //     ]);

    $product_name = $request->input('product_name', '');

    $product_desc = $request->input('product_desc', '');
 
    $product_publish = $request->input('product_publish', '');
 
    $product_quantity = $request->input('product_quantity', 0);
 
    $product_price = $request->input('product_price', 0);
 
 
        $product = new ProductsModel();

        if (!$product_publish) {

            $product_publish = date("Y-m-d H:i:s");
     
        }

        $product->product_name = $product_name;

        $product->product_desc = $product_desc;

        $product->product_publish = $product_publish;

        $product->product_quantity = $product_quantity;

        $product->product_price = $product_price;
        $product->product_image = "";
        $product->save();

       return redirect ("/backend/product/index");
   }

}