<?php 
namespace App\Controllers;
use App\Models\about_model;
class About extends BaseController{

       /**
    * Instance of the main Request object.
    *
    * @var HTTP\IncomingRequest
    */
   protected $request;
    public function list(){
        $about_model = new about_model(); 
        if($this->request->getMethod()=='post'){
          
            $update_data = array("about_text" => $this->request->getPost('about_text'));
            $about_model->update(1,$update_data);
        }
        $data["about_text"] = $about_model->find(1);
       
        echo view("admin/template/header");
        echo view("admin/about/list",$data);
        echo view("admin/template/footer");

    }
}


?>