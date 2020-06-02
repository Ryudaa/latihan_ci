<?php
class Hello extends CI_Controller {
	public function index()
	{
        #$this->load->view('contoh_view');
		#echo "Ini view Hello di controllers/hello.php";
		
		$this->load->model('kamar');
		$data['kamar'] = $this->kamar->get_data();

		$this->load->view('v_kamar', $data);
	}
}
