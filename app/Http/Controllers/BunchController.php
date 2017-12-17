<?php 

namespace App\Http\Controllers;

use App\Models\Base\Bunch;
use App\Models\Base\User;
use App\Models\Base\Permission;
use App\Models\Base\BunchPermission;
use App\Http\Requests;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;

class BunchController extends Controller {

    private $CompanyID;

    public function __construct(Redirector $redirect) {
        $this->CompanyID = session()->get('user')['CompanyID'];

        $user = new User;
        if($user->isLogged() == false) {
            $redirect->to('login')->send();
        }
    }   

    public function index() {
        $bunch = Bunch::where('CompanyID', '=', $this->CompanyID)->get();

        $array = array('bunch'=>$bunch);

        return view('bunch/bunch-list', $array);
    }

    public function add(Request $request){
        $permission = Permission::all();

        $array = array('permission'=>$permission);

        if ($request->has('submit')) {
            $bunchName    = $request->input('BunchName') ;
            $permissionId = $request->input('PermissionID');

            $bunch              = new Bunch;
            $bunch->CompanyID   = $this->CompanyID;
            $bunch->BunchName   = $bunchName;
            $bunch->save();

            $bunchId = $bunch->BunchID;

            foreach ($permissionId as $value) {
                $bunchPermission               = new BunchPermission;
                $bunchPermission->CompanyID    = $this->CompanyID;
                $bunchPermission->BunchID      = $bunchId;
                $bunchPermission->PermissionID = $value;
                $bunchPermission->save();
            }

            return redirect('/bunch');
        }        

        return view('bunch/bunch-add', $array);        
    }

    public function edit(Request $request, $id){
        $permission = Permission::all();
        $bunch      = new Bunch;

        $bunch->setBunchID($id);

        $permissions = $bunch->getPermissions($id);  

        foreach ($permissions as $value) {
            foreach ($permission as $value2) {
                $bunchNormal[$value->BunchID]['BunchID']                                                = $value->BunchID;
                $bunchNormal[$value->BunchID]['BunchName']                                              = $value->BunchName;
                $bunchNormal[$value->BunchID]['Permissions'][$value2->PermissionID]['PermissionName']   = $value2->PermissionName;
                $bunchNormal[$value->BunchID]['Permissions'][$value2->PermissionID]['PermissionID']     = $value2->PermissionID;
                $bunchNormal[$value->BunchID]['Permissions'][$value->PermissionID]['Selected']          = 1;
                $bunchNormal[$value->BunchID]['Permissions'][$value->PermissionID]['PermissionID']      = $value->PermissionID;
                $bunchNormal[$value->BunchID]['Permissions'][$value->PermissionID]['PermissionName']    = $value->PermissionName;  
            }
        }   

        $array = array('bunch'=> $bunchNormal);

        if ($request->has('submit')) {
            $bunchName    = $request->input('BunchName');
            $permissionId = $request->input('PermissionID');

            $bunch              = new Bunch;
            $bunch->BunchName   = $bunchName;

            $bunchPermission    = new BunchPermission;
            $bunchPermission::where('BunchID', $id)->delete();

            foreach ($permissionId as $value) {
                $bunchPermission    = new BunchPermission;
                $bunchPermission->BunchID      = $id;
                $bunchPermission->CompanyID    = $this->CompanyID;
                $bunchPermission->PermissionID = $value;
                $bunchPermission->save();
            }

            return redirect('/bunch');
        }            

        return view('bunch/bunch-edit', $array);   
    }
}

