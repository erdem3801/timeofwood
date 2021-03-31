<?php

namespace App\Controllers;

use App\Models\UserModel;
use Config\Services; 
use CodeIgniter\HTTP\Request;

class Product extends BaseController
{
   /**
	 * Instance of the main Request object.
	 *
	 * @var HTTP\IncomingRequest
	 */
   protected $request;
   private $viewFolder;
   private $model;
   public function __construct()
   {
      $this->model = new UserModel(); 
      $this->viewFolder = 'product';  
      $this->request = \Config\Services::request();
   }
    
   public function ekle()
   {

      $data = array();
      if (isset($_POST['submit'])) {
         
         $rand = rand(0,1000);
         $target_dir = "images/upload/$rand";
         $name_speace ='image';
         $target_file = $target_dir . basename($_FILES["$name_speace"]["name"]);
         $uploadOk = 1;
         $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
         $check = false;
         if ($_FILES["$name_speace"]["tmp_name"]) {
            $check = getimagesize($_FILES["$name_speace"]["tmp_name"]);            
         }
         if ($check !== false) {
            echo "File is an image - " . $check["mime"] . ".";
            $uploadOk = 1;
         } else {
            echo "File is not an image.";
            $uploadOk = 0;
         }
         if (file_exists($target_file)) {
            echo "Sorry, file already exists.";
            $uploadOk = 0;
         }
         if ($_FILES["$name_speace"]["size"] > 3000*3000) {
            echo "Sorry, your file is too large.";
            $uploadOk = 0;
         }
         if (
            $imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
            && $imageFileType != "gif"
         ) {
            echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
            $uploadOk = 0;
         }
         if ($uploadOk == 0) {
            echo "Sorry, your file was not uploaded.";
            // if everything is ok, try to upload file
         } else {
            if (move_uploaded_file($_FILES["$name_speace"]["tmp_name"], $target_file)) {
               echo "The file " . htmlspecialchars(basename($_FILES["$name_speace"]["name"])) . " has been uploaded.";

               $data = [
                  'image_url' => $target_file,
                  'product_description' => $this->request->getPost('description'),
                  'product_price' => $this->request->getPost('price'),
                  'product_dimension' => $this->request->getPost('dimension'),
                  'product_title' => $this->request->getPost('title')

               ];
               
               $this->model->insert($data);
               return redirect()->to(base_url('product'));
            } else {
               echo "Sorry, there was an error uploading your file.";
            }
         }
      }
       
      echo view('admin/template/header');
      echo view("admin/{$this->viewFolder}/ekle", $data);
      echo view('admin/template/footer');
   }

   public function sil($id)
   {

      $result =  $this->model->delete($id);
      return redirect()->to(base_url('admin'));
   }
   public function edit($id)
   {
     
      
      $data = array();
      
      $data['product'] = $this->model->find($id);
      if (isset($_POST['submit'])) {
     
         if ($_FILES ['image']['tmp_name']) {
            $rand = rand(0,1000);
            $target_dir = "images/upload/$rand";
            $name_speace ='image';
            $target_file = $target_dir . basename($_FILES["$name_speace"]["name"]);
            $uploadOk = 1;
            $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
            $check = false;
            if ($_FILES["$name_speace"]["tmp_name"]) {
               $check = getimagesize($_FILES["$name_speace"]["tmp_name"]);            
            }
            if ($check !== false) {
               echo "File is an image - " . $check["mime"] . ".";
               $uploadOk = 1;
            } else {
               echo "File is not an image.";
               $uploadOk = 0;
            }
            if (file_exists($target_file)) {
               echo "Sorry, file already exists.";
               $uploadOk = 0;
            }
            if ($_FILES["$name_speace"]["size"] > 3000*3000) {
               echo "Sorry, your file is too large.";
               $uploadOk = 0;
            }
            if (
               $imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
               && $imageFileType != "gif"
            ) {
               echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
               $uploadOk = 0;
            }
            if ($uploadOk == 0) {
               echo "Sorry, your file was not uploaded.";
               // if everything is ok, try to upload file
            } else {
               if (move_uploaded_file($_FILES["$name_speace"]["tmp_name"], $target_file)) {
                  echo "The file " . htmlspecialchars(basename($_FILES["$name_speace"]["name"])) . " has been uploaded.";
   
                  $data = [
                     'image_url' => $target_file,
                     'product_description' => $this->request->getPost('description'),
                     'product_price' => $this->request->getPost('price'),
                     'product_dimension' => $this->request->getPost('dimension'),
                     'product_title' => $this->request->getPost('title')
   
                  ];
                  
                  $this->model->update($id,$data);
                 return redirect()->to(base_url('product'));
               } else {
                  echo "Sorry, there was an error uploading your file.";
               }
            }
            
         }
         else {
            $data = [
               'image_url' => $data['product']['image_url'],
               'product_description' => $this->request->getPost('description'),
               'product_price' => $this->request->getPost('price'),
               'product_dimension' => $this->request->getPost('dimension'),
               'product_title' => $this->request->getPost('title')

            ];
            $this->model->update($id,$data);
            return redirect()->to(base_url('product'));
         }

        
      }
      echo view('admin/template/header', $data);
      echo view("admin/{$this->viewFolder}/edit", $data);
      echo view('admin/template/footer', $data);
   }

   public function listele()
   {
      $data = array();
      
      $data['product'] = $this->model->orderBy('rank','asc')->findAll();
      
      echo view('admin/template/header', $data);
      echo view("admin/{$this->viewFolder}/list", $data);
      echo view('admin/template/footer', $data);
   }

   public function reorder(){
      $data = $this->request->getPost('data');
      parse_str($data,$order);
      $items = $order['ord'];
      foreach($items as $rank =>$id){
         $update_data = array(
               'rank' =>$rank
         );
         $this->model->update($id,$update_data);
      }

  }
}
