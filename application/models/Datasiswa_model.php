<?php 

class Datasiswa_model extends CI_model
{
    public function data()
    {
       return  $query = $this->db->get('datasiswa')->result_array();
    }

    public function tambah_data()
    {
        $data = [
            "nama" => $this->input->post('nama', true),
            "alamat" => $this->input->post('alamat', true),
            "jurusan" => $this->input->post('jurusan', true),
            "kelas" => $this->input->post('kelas', true)
        ];

        $this->db->insert('datasiswa', $data);
    }

    public function hapus_data($data)
    {
        $id = $data;
        $this->db->delete('datasiswa', array('id' => $id));
    }

    public function edit_data($id)
    {
        $this->db->where('id', $id);
        return $q = $this->db->get('datasiswa')->result_array();
    }

    public function save_data($id)
    {
        $data = [
            "nama" => $this->input->post('nama', true),
            "alamat" => $this->input->post('alamat', true),
            "jurusan" => $this->input->post('jurusan', true),
            "kelas" => $this->input->post('kelas', true)
        ];
        $this->db->where('id', $id);
        $this->db->update('datasiswa', $data);
    }
}
