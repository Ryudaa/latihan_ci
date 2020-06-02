<?php
class M_kamar extends CI_Model{
    public function get_data()
    {
        return $this->db->get('kamar');
    }

    public function input_data($data)
    {
        $this->db->insert('kamar', $data);
    }

    public function edit_data($where, $table) {
        return $this->db->get_where($table,$where);
    }

    public function update_data($where, $data, $table) {
        $this->db->where($where);
        $this->db->update($table,$data);
    }

    public function hapus_data($where, $table){
        $this->db->where($where);
        $this->db->delete($table);
    }

    public function detail_data($kdkamar = NULL){
        $query = $this->db->get_where('kamar', array('kdkamar'=>$kdkamar))->row();
        return $query;
    }

    public function get_keyword($keyword){
        $this->db->select('*');
        $this->db->from('kamar');
        $this->db->like('kdkamar', $keyword);
        $this->db->or_like('lantai', $keyword);
        $this->db->or_like('nmkamar', $keyword);
        $this->db->or_like('harga', $keyword);
        $this->db->or_like('status', $keyword);
        $this->db->or_like('fasilitas', $keyword);
        return $this->db->get()->result();
    }
}
?>