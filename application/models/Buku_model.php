<?php
class Buku_model extends CI_Model {
    public function getAll($keyword = null, $kategori = null, $limit = null, $start = null) {
        if ($keyword) {
            $this->db->like('judul', $keyword);
            $this->db->or_like('pengarang', $keyword);
        }
        if ($kategori) {
            $this->db->where('kategori_id', $kategori);
        }


        $this->db->limit($limit, $start);
        $this->db->select('buku.*, kategori.nama_kategori');
        $this->db->from('buku');
        $this->db->join('kategori', 'kategori.id = buku.kategori_id');
        return $this->db->get()->result();
    }

    public function countAll($keyword = null, $kategori = null) {
        if ($keyword) {
            $this->db->like('judul', $keyword);
            $this->db->or_like('pengarang', $keyword);
        }
    
        if ($kategori) {
            $this->db->where('kategori_id', $kategori);
        }
    
        return $this->db->count_all_results('buku');
    }

    public function get_buku_paginated($limit, $start, $keyword = null, $kategori = null)
    {
        if ($keyword) {
            $this->db->group_start();
            $this->db->like('judul', $keyword);
            $this->db->or_like('pengarang', $keyword);
            $this->db->group_end();
        }
    
        if ($kategori) {
            $this->db->where('kategori_id', $kategori);
        }
    
        $this->db->limit($limit, $start);
        $this->db->select('buku.*, kategori.nama_kategori');
        $this->db->from('buku');
        $this->db->join('kategori', 'kategori.id = buku.kategori_id');
        return $this->db->get()->result();
    }
    



    public function insert($data) {
        return $this->db->insert('buku', $data);
    }

    public function get($id) {
        $this->db->select('buku.*, kategori.nama_kategori');
        $this->db->from('buku');
        $this->db->join('kategori', 'kategori.id = buku.kategori_id');
        $this->db->where('buku.id', $id);
        return $this->db->get()->row();
    }

    public function update($id, $data) {
        return $this->db->update('buku', $data, ['id' => $id]);
    }

    public function delete($id) {
        return $this->db->delete('buku', ['id' => $id]);
    }
}
