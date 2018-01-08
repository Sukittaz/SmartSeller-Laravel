<?php 

namespace App\Http\Controllers;

use App\Repositories\UserRepository;
use App\Models\Base\Product;
use App\Models\Base\Costumer;
use App\Http\Requests;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;

class AjaxController extends Controller {

    private $CompanyID;

    public function __construct(Redirector $redirect) {
        $this->CompanyID = session()->get('user')['CompanyID'];
        
        if(UserRepository::isLogged() == false) {
            $redirect->to('login')->send();
        }
    }

    public function index() {}

    public function searchProduct() {
        $productName = $_GET['productName'];
        $product = Product::with('category')
                   ->where('CompanyID', '=', $this->CompanyID)
                   ->where('ProductName', 'like', '%' . $productName . '%')
                   ->get();

        echo json_encode($product);
    }

    public function searchCostumer() {
        $costumerName = $_GET['costumerName'];
        $costumer = Costumer::where('CompanyID', '=', $this->CompanyID)
                    ->where('CostumerName', 'like', '%' . $costumerName . '%')
                    ->get();

        echo json_encode($costumer);
    }    

    public function searchEmployer() {
        $employerName = $_GET['employerName'];
        $employer = User::where('CompanyID', '=', $this->CompanyID)
                    ->where('UserName', 'like', '%' . $employerName . '%')
                    ->get();

        echo json_encode($employer);
    }      
}

