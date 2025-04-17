<?php
class Buku extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model(['Buku_model', 'Kategori_model']);
        $this->load->helper('url');
    }

    public function index() {
        $this->load->library('pagination');

    $keyword = $this->input->get('keyword');
    $kategori = $this->input->get('kategori');

    $config['base_url'] = site_url('buku/index');
    $config['total_rows'] = $this->Buku_model->countAll($keyword, $kategori);
    $config['per_page'] = 5;
    $config['uri_segment'] = 3;

    $config['full_tag_open'] = '<ul class="pagination justify-content-center">';
    $config['full_tag_close'] = '</ul>';
    $config['first_link'] = 'First';
    $config['last_link'] = 'Last';
    $config['first_tag_open'] = '<li class="page-item"><span class="page-link">';
    $config['first_tag_close'] = '</span></li>';
    $config['prev_tag_open'] = '<li class="page-item"><span class="page-link">';
    $config['prev_tag_close'] = '</span></li>';
    $config['next_tag_open'] = '<li class="page-item"><span class="page-link">';
    $config['next_tag_close'] = '</span></li>';
    $config['last_tag_open'] = '<li class="page-item"><span class="page-link">';
    $config['last_tag_close'] = '</span></li>';
    $config['cur_tag_open'] = '<li class="page-item active"><span class="page-link">';
    $config['cur_tag_close'] = '</span></li>';
    $config['num_tag_open'] = '<li class="page-item"><span class="page-link">';
    $config['num_tag_close'] = '</span></li>';

    $this->pagination->initialize($config);
    $uri_segment = $this->uri->segment(3);
    $config['uri_segment'] = (ctype_digit((string)$uri_segment)) ? 3 : 0;


    $page = ($this->uri->segment($config['uri_segment']) !== null) ? $this->uri->segment($config['uri_segment']) : 0;




    $data['buku'] = $this->Buku_model->get_buku_paginated($config['per_page'], $page);
        $data['kategori'] = $this->Kategori_model->getAll();
        $data['pagination'] = $this->pagination->create_links();
        $this->load->view('templates/header');
        $this->load->view('buku/index', $data);
        
        $this->load->view('templates/footer');

        // In your controller method that fetches books

    }

    public function tambah() {
        $data['kategori'] = $this->Kategori_model->getAll();
    
        if ($this->input->post()) {
            // Konfigurasi upload
            $config['upload_path']   = './uploads/';
            $config['allowed_types'] = 'jpg|jpeg|png';
            $config['max_size']      = 2048; // 2MB
    
            $this->load->library('upload', $config);
    
            if ($this->upload->do_upload('cover')) {
                $upload_data = $this->upload->data();
    
                $data = [
                    'judul'        => $this->input->post('judul'),
                    'pengarang'    => $this->input->post('pengarang'),
                    'sinopsis'     => $this->input->post('sinopsis'),
                    'kategori_id'  => $this->input->post('kategori_id'),
                    'cover'        => $upload_data['file_name']
                ];
    
                $this->Buku_model->insert($data);
                redirect('buku');
            } else {
                echo $this->upload->display_errors();
            }
        }
        $this->load->view('templates/header');
        $this->load->view('buku/tambah', $data);
        $this->load->view('templates/footer');
    }
    

    public function detail($id) {
        $data['buku'] = $this->Buku_model->get($id);
        if (!$data['buku']) {
            show_404();
        }
    
        $this->load->view('templates/header');
        $this->load->view('buku/detail', $data);
        $this->load->view('templates/footer');
    }

    public function edit($id) {
        $data['buku'] = $this->Buku_model->get($id);
        $data['kategori'] = $this->Kategori_model->getAll(); 
    
        if ($this->input->post()) {
            $update = [
                'judul' => $this->input->post('judul'),
                'pengarang' => $this->input->post('pengarang'),
                'sinopsis' => $this->input->post('sinopsis'),
                'kategori_id' => $this->input->post('kategori_id')
            ];
            $this->Buku_model->update($id, $update); 
            redirect('buku'); 
        }
    
        $this->load->view('templates/header');
        $this->load->view('buku/edit', $data);
        $this->load->view('templates/footer');
    }
    

    public function hapus($id) {
        $this->Buku_model->delete($id);
        redirect('buku');
    }
}
