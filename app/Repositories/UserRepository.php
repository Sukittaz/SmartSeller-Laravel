<?php
namespace App\Repositories;

use App\Models\User;

class UserRepository extends \App\Models\Base\User
{
        protected $post;
        
        public function __construct(Post $post)
        {
                $this->post = $post;
        }
        
        public static function doLogin($userLogin, $userPass){
                $user = User::select('UserID', 'CompanyID', 'UserName')
                                  ->where('UserLogin', '=', $userLogin)
                                  ->where('UserPass', '=', md5($userPass))->get();

                if (count($user)) {
                        $data = array('UserID' =>  $user[0]->UserID,
                                                  'CompanyID' =>  $user[0]->CompanyID,
                                                  'UserName' =>  $user[0]->UserName,);
                
                        session()->put('user', $data); 

                        return true;
                }

                return false;
        }

        public static function isLogged() {
                if(session()->has('user') == true) {
                        return true;
                } else {
                        return false;
                }
        }
}
?>