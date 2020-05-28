<?php 

Class Datasiswa extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Datasiswa_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['judul'] = "Home"; 
        $this->load->view('templates/header', $data);
        $this->load->view('beranda');
        $this->load->view('templates/footer');
    }

    public function data_siswa()
    {
        
        $data['judul'] = "Data Siswa"; 
        $data['siswa'] = $this->Datasiswa_model->data();
        $this->load->view('templates/header',$data);
        $this->load->view('datasiswa',$data);
        $this->load->view('templates/footer');
    }

    
    public function tentang()
    {
        
        $data['judul'] = "Tentang"; 
        $this->load->view('templates/header',$data);
        $this->load->view('tentang');
        $this->load->view('templates/footer');
    }

    public function tambah_data_siswa()
    {
        
        $data['judul'] = "Tambah Data Siswa"; 

        $this->form_validation->set_rules('nama','Nama','required');
        $this->form_validation->set_rules('alamat','Alamat','required');
        $this->form_validation->set_rules('jurusan','Jurusan','required');
        $this->form_validation->set_rules('kelas','Kelas','required');

        if($this->form_validation->run() == FALSE)
        {
            $this->load->view('templates/header',$data);
            $this->load->view('tambah_data');
            $this->load->view('templates/footer');
        }
        else
        {
            $data['siswa'] = $this->Datasiswa_model->tambah_data();
            $this->session->set_flashdata('data','Ditambahkan');
            redirect('data-siswa');
        }
    }

    function hapus_data($data)
    {
            $data['siswa'] = $this->Datasiswa_model->hapus_data($data);
            $this->session->set_flashdata('data','Dihapus');
            redirect('data-siswa');
    }

    function edit_data($id)
    {
        $data['judul'] = "Edit Data Siswa"; 

        $this->form_validation->set_rules('nama','Nama','required');
        $this->form_validation->set_rules('alamat','Alamat','required');
        $this->form_validation->set_rules('jurusan','Jurusan','required');
        $this->form_validation->set_rules('kelas','Kelas','required');

        if($this->form_validation->run() == FALSE)
        {
            $data['siswa'] = $this->Datasiswa_model->edit_data($id);
            $this->load->view('templates/header',$data);
            $this->load->view('edit_data',$data);
            $this->load->view('templates/footer');
        }
        else
        {
            $data['siswa'] = $this->Datasiswa_model->save_data($id);
            $this->session->set_flashdata('data','Diperbarui');
            redirect('data-siswa');
        }
    }
}