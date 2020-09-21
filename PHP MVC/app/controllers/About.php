<?php 

class About extends Controller{
	public function index($nama = 'Arvie', $pekerjaan = 'Gamers', $umur = '17') {
		$data['nama'] = $nama;
		$data['pekerjaan'] = $pekerjaan;
		$data['umur'] = $umur;
		$data['judul'] = 'About Us';
		$this->view('templates/header',$data);
		$this->view('About/index', $data);
		$this->view('templates/footer');
	}

	public function page() {
		$data['judul'] = 'Pages';
		$this->view('About/page',$data);
	}
}

?>