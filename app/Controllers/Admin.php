<?php namespace App\Controllers;

use App\Database\Migrations\Testimonial;
use CodeIgniter\Controller;
use App\Models\TestimonialModel;

class Admin extends BaseController
{

	public function __construct()
	{
		helper(['form']);
		$this->Testimonial = new TestimonialModel();	
	}

	public function home()
	{
		$data = [
			'title' => 'Home',
			'content' => 'Admin/home/index'
		];
		return view('_layout/v_wrapper',$data);
	}


	public function testimonial()
	{
		$data = [
			'title' => 'Testimonial',
			'content' => 'Admin/testimonial/index',
			'testimonial' => $this->Testimonial->getTestimonial()
		];
		return view('_layout/v_wrapper',$data);
	}
	
	public function create()
	{
		$data = [
			'title' => 'Testimonial | Create',
			'content' => 'Admin/testimonial/create'
		];
		return view('_layout/v_wrapper',$data);
	}

	public function store()
	{
		$image = $this->request->getFile('image');
		$name = $image->getRandomName();

		$data = [
			'image' => $name,
			'username' => $this->request->getPost('username'),
			'deskripsi' => $this->request->getPost('deskripsi')
		];

		$image->move(ROOTPATH. 'public/uploads',$name);

		if (! $image->isValid())
		{
			echo $image->getErrorString();
		}

		$simpan = $this->Testimonial->insertTestimonial($data);
		return redirect()->to(base_url('admin/testimonial'));
	}
	//--------------------------------------------------------------------

}
