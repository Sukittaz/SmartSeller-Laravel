<?php 

namespace App\Http\Controllers;

use App\Models\Base\Category;
use App\Models\Base\Product;
use App\Repositories\UserRepository;
use App\Http\Requests;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;

class ProductController extends Controller {

	private $CompanyID;

	public function __construct(Redirector $redirect) {
		$this->CompanyID = session()->get('user')['CompanyID'];
		
        if(UserRepository::isLogged() == false) {
			$redirect->to('login')->send();
        }
	}

    public function index() {
		$product = Product::with('category')->where('CompanyID', '=', $this->CompanyID)->get();
		$array   = array('product'=>$product);

        return view('product/product-list', $array);
    }

    public function add(Request $request) {
		$category = Category::where('CompanyID', '=', $this->CompanyID)->get();

		$array = array('category'=>$category);

		if ($request->has('submit')) {
			$productName 	 = $request->input('ProductName');
			$productCode 	 = $request->input('ProductCode');
			$categoryID 	 = $request->input('CategoryID');
			$productTypeCalc = $request->input('ProductTypeCalc');
			$productCost 	 = $request->input('ProductCost');
			$productPrice 	 = $request->input('ProductPrice');
			$productQtd 	 = $request->input('ProductQtd');
			$productAlert 	 = $request->input('ProductAlert');
			$productDetail 	 = $request->input('ProductDetail');

			$product 				  = new Product;
			$product->CompanyID 	  = $this->CompanyID;
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

    	return view('product/product-add', $array);	
    }

    public function view($id) {
		$product = Product::with('category')->find($id);
		$array   = array('product'=>$product);

        return view('product/product-view', $array);
    }    

    public function edit(Request $request, $id) {
		$product = Product::find($id);
		$array 	 = array('product'=>$product);   
		 	
		if ($request->has('submit')) {
			$productName 	 = $request->input('ProductName');
			$productCode 	 = $request->input('ProductCode');
			$productTypeCalc = $request->input('ProductTypeCalc');
			$productCost 	 = $request->input('ProductCost');
			$productPrice 	 = $request->input('ProductPrice');
			$productQtd 	 = $request->input('ProductQtd');
			$productAlert 	 = $request->input('ProductAlert');
			$productDetail 	 = $request->input('ProductDetail');

			$product 				  = Product::find($id);
			$product->ProductName 	  = $productName;
			$product->ProductCode 	  = $productCode;
			$product->ProductTypeCalc = $productTypeCalc;
			$product->ProductCost 	  = $productCost;
			$product->ProductPrice 	  = $productPrice;
			$product->ProductPrice 	  = $productPrice;
			$product->ProductQtd 	  = $productQtd;
			$product->ProductAlert 	  = $productAlert;
			$product->ProductDetail   = $productDetail;

			$product->update();

			return redirect('/product');
		}       

    	return view('product/product-edit', $array);	
	}       
}