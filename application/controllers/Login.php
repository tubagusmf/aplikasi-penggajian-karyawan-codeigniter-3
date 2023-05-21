<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{

    public function index()
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $data['title'] = "Form Login";
            $this->load->view('templates_admin/header', $data);
            $this->load->view('formLogin');
            $this->load->view('templates_admin/footer');
        } else {
            $username = $this->input->post('username');
            $password = $this->input->post('password');

            $cek = $this->penggajianModel->cek_login($username, $password);

            if ($cek == FALSE) {
                $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <strong>Username or Password incorrect!</strong>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>');
                redirect('login');
            } else {
                $this->session->set_userdata('hak_akses', $cek->hak_akses); //untuk validasi akses kehalaman admin tanpa login maka kembali ke halaman login
                $this->session->set_userdata('nama_pegawai', $cek->nama_pegawai);
                $this->session->set_userdata('photo', $cek->photo);
                $this->session->set_userdata('id_pegawai', $cek->id_pegawai);
                $this->session->set_userdata('nik', $cek->nik);
                switch ($cek->hak_akses) {
                    case 1:
                        $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
                            <strong>Selamat datang, Anda login sebagai admin.</strong>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>');
                        redirect('admin/dashboard');
                        break;
                    case 2:
                        $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
                            <strong>Selamat datang, Anda login sebagai pegawai.</strong>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>');
                        redirect('pegawai/dashboard');
                        break;

                    default:

                        break;
                }
            }
        }
    }

    public function _rules()
    {
        $this->form_validation->set_rules('username', 'username', 'required');
        $this->form_validation->set_rules('password', 'password', 'required');
    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect('login');
    }
}
