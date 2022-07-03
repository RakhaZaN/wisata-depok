<?php 
defined('BASEPATH') or exit('No direct script access allowed');

class TempatWisata extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		// Load model
		$this->load->model('TempatWisata_model', 'tw');
	}
	
	public function index()
	{
		$data['page'] = 'Tempat Wisata';

		$list_tempat_wisata = $this->tw->getAll();
		$data['lists'] = $list_tempat_wisata;

		$this->load->view('layouts/header', $data);
		$this->load->view('layouts/navbar');
		$this->load->view('layouts/sidebar');
		$this->load->view('pages/tempat_wisata/index', $data);
		$this->load->view('layouts/footer');
	}

	public function show($id)
	{
		$data['page'] = 'Detail Tempat Wisata';

		$find = $this->tw->find($id);
		$data['data'] = $find;

		$this->load->view('layouts/header', $data);
		$this->load->view('layouts/navbar');
		$this->load->view('layouts/sidebar');
		$this->load->view('pages/tempat_wisata/detail', $data);
		$this->load->view('layouts/footer');
	}

	public function create()
	{
		$data['page'] = 'Tambah Tempat Wisata';
		$data['isEdit'] = false;
		
		$this->load->view('layouts/header', $data);
		$this->load->view('layouts/navbar');
		$this->load->view('layouts/sidebar');
		$this->load->view('pages/tempat_wisata/input', $data);
		$this->load->view('layouts/footer');
	}

	public function store()
	{
		// Get data post
		$data_post = $this->input->post();

		// Set data
		$data['nama'] = $data_post['inNama'];
		$data['alamat'] = $data_post['inAlamat'];
		$data['latlong'] = $data_post['inLatlong'];
		$data['jenis_id'] = $data_post['inJenis'];
		$data['skor_rating'] = $data_post['inRating'];
		$data['harga_tiket'] = $data_post['inHarga'];
		$data['kecamatan_id'] = $data_post['inKecamatan'];
		$data['website'] = $data_post['inWebsite'];
		$data['fasilitas'] = $data_post['inFasilitas'];

		// Upload File
		$uploads = $this->tw->multipleUpload();
		$data['foto1'] = $uploads[0]['file_name'];
		$data['foto2'] = $uploads[1]['file_name'];
		$data['foto3'] = $uploads[2]['file_name'];

		$this->tw->save($data);

		redirect(base_url('tempatwisata/'));
	}

	public function edit()
	{
		$data['page'] = 'Ubah Tempat Wisata';

		$id = $this->input->get('id');
		$data['isEdit'] = true;

		$find = $this->tw->find($id);
		// var_dump($find);die;
		$data['data'] = $find;
		
		$this->load->view('layouts/header', $data);
		$this->load->view('layouts/navbar');
		$this->load->view('layouts/sidebar');
		$this->load->view('pages/tempat_wisata/input', $data);
		$this->load->view('layouts/footer');
	}

	public function update()
	{
		// Get data post
		$data_post = $this->input->post();

		// Set data
		$data['nama'] = $data_post['inNama'];
		$data['alamat'] = $data_post['inAlamat'];
		$data['latlong'] = $data_post['inLatlong'];
		$data['jenis_id'] = $data_post['inJenis'];
		$data['skor_rating'] = $data_post['inRating'];
		$data['harga_tiket'] = $data_post['inHarga'];
		$data['kecamatan_id'] = $data_post['inKecamatan'];
		$data['website'] = $data_post['inWebsite'];
		$data['fasilitas'] = $data_post['inFasilitas'];

		// Upload File
		$uploads = $this->tw->multipleUpload();
		$data['foto1'] = $uploads[0]['file_name'];
		$data['foto2'] = $uploads[1]['file_name'];
		$data['foto3'] = $uploads[2]['file_name'];

		$this->tw->save($data, true);

		redirect(base_url('tempatwisata/'));
	}

	public function delete($id)
	{
		return $this->tw->delete(array('id' => $id));
	}

}