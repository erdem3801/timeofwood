<?php

namespace App\Controllers;

use App\Models\UserModel;
class Home extends BaseController
{
	private $model;

	function __construct()
    {

	$this->model = new UserModel();

    }


	public function index($page = "index")
	{
		if (!is_file(APPPATH . '/Views/' . $page . '.php')) {
			// Whoops, we don't have a page for that!
			throw new \CodeIgniter\Exceptions\PageNotFoundException($page);
		}

		$data['page'] = $page;
		$data['product'] = $this->model->orderBy('rank','asc')->findAll();

		echo view('templates/header', $data);
		echo view($page);
		echo view('templates/footer');
	}
	public function send()
	{
		
        $session = session();
        $session->start();
		
		if($session->get("message")==$_POST['message'] && $session->get("from")== $_POST["from"]){
		$session->destroy();
		return redirect()->to('contact'); 
		}
		
		if (isset($_POST['from']) && isset($_POST['message'])) {
			$email = \Config\Services::email();

			$email->setFrom('burkaerdem@gmail.com','burkaerdem@gmail.com');
			$email->setTo('timeofwood.gestion@gmail.com');

			$email->setSubject('Time Of Wood');
			$email->setMessage($_POST['message']);

			 $email->send();
			
			$session->set($_POST);
	  
			$data['mail'] = true;
			$data['page'] = 'contact';
			echo view('templates/header', $data);
			echo view($data['page'], $data);
			echo view('templates/footer'); 
			
		} else {
			$data['mail'] = false;
			$data['page'] = 'contact';
			echo view('templates/header', $data);
			echo view($data['page'], $data);
			echo view('templates/footer');
		}
	}
}
