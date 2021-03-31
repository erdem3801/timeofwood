<?php 
namespace App\Controllers;
 
use Config\Services; 
use App\Models\User_login_model;

use function PHPUnit\Framework\returnSelf;

class User extends BaseController{
    private $se;
    private $model;
    public function __construct()
    { 
        $this->se = session();
        $this->model = new User_login_model();
   
      
      
    }

    public function login(){ 
        $data = array();
        
        if (isset($_POST['submit'])) {
            
             $where = array(
                 'user_name' => "$_POST[user_name]",
                 'password' => "$_POST[password]"
                  
             );
            $user = $this->model->where($where)->first();
            if ($user) {
                $this->se->set('user', $user['user_name']);
            
                return redirect()->to(base_url('product'));

            }
            else{
                
                 
                $data['error'] = $this->se->get('user');
            }
           
        } 
        echo view('admin/user/login',$data);
        echo view('admin/template/footer');
    }
    public function logout(){
        session()->destroy();
        return redirect()->to(base_url(('login')));
    }
}
 