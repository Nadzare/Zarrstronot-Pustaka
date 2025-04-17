<?php
class Kategori extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('Kategori_model');
    }

    public function index() {
        $data['kategori'] = $this->Kategori_model->getAll();
        $this->load->view('kategori/index', $data);
    }

    public function tambah() {
        if ($this->input->post()) {
            $this->Kategori_model->insert(['nama_kategori' => $this->input->post('nama')]);
            redirect('kategori');
        }
        $this->load->view('kategori/tambah');
    }

    public function edit($id) {
        $data['kategori'] = $this->Kategori_model->get($id);
        if ($this->input->post()) {
            $this->Kategori_model->update($id, ['nama_kategori' => $this->input->post('nama')]);
            redirect('kategori');
        }
        $this->load->view('kategori/edit', $data);
    }

    public function hapus($id) {
        $this->Kategori_model->delete($id);
        redirect('kategori');
    }
}
