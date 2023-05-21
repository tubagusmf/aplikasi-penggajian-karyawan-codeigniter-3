<?php

class Dashboard extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();

        if ($this->session->userdata('hak_akses') != '1') { //untuk kondisi jika user belum login maka tidak bisa masuk ke halaman dashboard admin
            $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <strong>Maaf Anda Belum Login.</strong>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>');
            redirect('login');
        }
    }

    public function index()
    {
        $data['title'] = "Dashboard";
        $pegawai = $this->db->query("select * from data_pegawai");
        $admin = $this->db->query("select * from data_pegawai where jabatan ='Admin'");
        $jabatan = $this->db->query("select * from data_jabatan");
        $kehadiran = $this->db->query("select * from data_kehadiran");
        $data['pegawai'] = $pegawai->num_rows(); //num_rows untuk mengambil jumlah baris di database
        $data['admin'] = $admin->num_rows(); //num_rows untuk mengambil jumlah baris di database
        $data['jabatan'] = $jabatan->num_rows(); //num_rows untuk mengambil jumlah baris di database
        $data['kehadiran'] = $kehadiran->num_rows(); //num_rows untuk mengambil jumlah baris di database
        $this->load->view('templates_admin/header', $data);
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/dashboard', $data);
        $this->load->view('templates_admin/footer');
    }
}
