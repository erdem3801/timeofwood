<?php

namespace App\Controllers;

use App\Models\UserModel;
use App\Models\product_galeri;
use App\Models\about_model; 
use CodeIgniter\HTTP\IncomingRequest;

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
		$data['product'] = $this->model->orderBy('rank', 'asc')->findAll();
		$galeri_model = new product_galeri();

		$data['galeri'] = $galeri_model->findAll();
		if ($page == 'about') {
			$about_model = new about_model();
			$data["about_text"] = $about_model->find(1);
		}

		$count = $this->request->getGet('count');
		echo view('templates/header', $data);
		echo view($page);
		if ($count) 
		echo view('templates/counter');
		echo view('templates/footer', $data);
	}
	public function send()
	{

		$session = session();
		$session->start();

		if ($session->get("message") == $_POST['message'] && $session->get("from") == $_POST["from"]) {
			$session->destroy();
			return redirect()->to('contact');
		}

		if (isset($_POST['from']) && isset($_POST['message'])) {
			$email = \Config\Services::email();

			$email->setFrom('burkaerdem@gmail.com', 'burkaerdem@gmail.com');
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
