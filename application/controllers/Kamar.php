<?php

class Kamar extends CI_Controller{
    public function index()
    {
        $data['kamar'] =
        $this->m_kamar->get_data()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('v_kamar', $data);
        $this->load->view('templates/footer');
    }

    public function aksi()
    {
        $kdkamar = $this->input->post('kdkamar');
        $lantai = $this->input->post('lantai');
        $nmkamar = $this->input->post('nmkamar');
        $harga = $this->input->post('harga');
        $status = $this->input->post('status');
        $fasilitas = $this->input->post('fasilitas');
        $ktp = $_FILES['ktp'];

        if ($ktp = ''){}else{
            $config['upload_path'] = './assets/ktp';
            $config['allowed_types'] = 'jpg|png|gif';

            $this->load->library('upload',$config);
            if (!$this->upload->do_upload('ktp')){
                echo "Upload gagal"; die();
            }else{
                $ktp = $this->upload->data('file_name');
            }
        }

        $data = array(
            'kdkamar'=>$kdkamar,
            'lantai'=>$lantai,
            'nmkamar'=>$nmkamar,
            'harga'=>$harga,
            'status'=>$status,
            'fasilitas'=>$fasilitas,
            'ktp'=>$ktp,
        );

        $this->m_kamar->input_data($data, 'kamar');
        redirect('kamar/index');
    }

    public function edit($kdkamar){
        $where = array('kdkamar' => $kdkamar);
        $data['kamar'] = $this->m_kamar->edit_data($where, 'kamar')->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('edit', $data);
        $this->load->view('templates/footer');
    }

    public function update(){
        $id = $this->input->post('id');
        $kdkamar = $this->input->post('kdkamar');
        $lantai = $this->input->post('lantai');
        $nmkamar = $this->input->post('nmkamar');
        $harga = $this->input->post('harga');
        $status = $this->input->post('status');
        $fasilitas = $this->input->post('fasilitas');

        $data = array(
            'kdkamar'=>$kdkamar,
            'lantai'=>$lantai,
            'nmkamar'=>$nmkamar,
            'harga'=>$harga,
            'status'=>$status,
            'fasilitas'=>$fasilitas
        );

        $where = array(
            'kdkamar'=>$kdkamar
        );

        $this->m_kamar->update_data($where,$data,'kamar');
        redirect('kamar/index');
    }

    public function hapus($kdkamar)
    {
        $where = array('kdkamar'=>$kdkamar);
        $this->m_kamar->hapus_data($where, 'kamar');
        redirect('kamar/index');
    }

    public function detail($kdkamar){
        $this->load->model('m_kamar');
        $detail = $this->m_kamar->detail_data($kdkamar);
        $data['detail'] = $detail;
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('detail', $data);
        $this->load->view('templates/footer');
    }

    public function cetak(){
        $data['kamar'] = $this->m_kamar->get_data("kamar")->result();
        $this->load->view('print_kamar', $data);
    }

    public function search(){
        $keyword = $this->input->post('keyword');
        $data['kamar']=$this->m_kamar->get_keyword($keyword);
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('v_kamar', $data);
        $this->load->view('templates/footer');
    }
}

?>