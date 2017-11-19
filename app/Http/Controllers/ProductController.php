<?php 

namespace App\Http\Controllers;

use App\Models\Base\Product;
use App\Http\Requests;
use Illuminate\Http\Request;

class ProductController extends Controller {

    public function index() {
		// $product = Product::all();
		$product = Product::with('category')->get();
		$array   = array('product'=>$product);

        return view('product-list', $array);
    }

    public function add(Request $request) {
		if ($request->has('submit')) {
			$productName 	 = $request->input('ProductName');
			$productCode 	 = $request->input('ProductCode');
			$categoryID 	 = 3;
			$productTypeCalc = $request->input('ProductTypeCalc');
			$productCost 	 = $request->input('ProductCost');
			$productPrice 	 = $request->input('ProductPrice');
			$productQtd 	 = $request->input('ProductQtd');
			$productAlert 	 = $request->input('ProductAlert');
			$productDetail 	 = $request->input('ProductDetail');

			$product 				  = new Product;
			$product->CompanyID 	  = 1;
			$product->ProductName 	  = $productName;
			$product->ProductCode 	  = $productCode;
			$product->CategoryID 	  = $categoryID;
			$product->ProductTypeCalc = $productTypeCalc;
			$product->ProductCost 	  = $productCost;
			$product->ProductPrice 	  = $productPrice;
			$product->ProductPrice 	  = $productPrice;
			$product->ProductQtd 	  = $productQtd;
			$product->ProductAlert 	  = $productAlert;
			$product->ProductDetail   = $productDetail;

			$product->save();

			return redirect('/product');
		}

    	return view('product-add');	
    }    

}