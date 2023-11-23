<?php
  class M_Buku extends CI_Model{
    
    public function Tampil() {
      $query = $this->db->get('tbl_buku');
      $data = $query->result_array();
      return $data;
    }

    public function save($judul,$penerbit,$pengarang){
      $data = array(
        'judul' => $judul,
        'penerbit' => $penerbit,
        'pengarang' => $pengarang
      );
      $this->db->insert('tbl_buku', $data);
    }

    public function pilih_buku($id){
      $query = $this->db->get_where('tbl_buku', array('id' => $id));
      return $query;
    }

    public function edit($id,$judul,$penerbit,$pengarang) {
      $data = array(
        'judul' => $judul,
        'penerbit' => $penerbit,
        'pengarang' => $pengarang
        );

      $this->db->where('id', $id);
      $this->db->update('tbl_buku', $data);
    }

    public function delete($id) {
      $this->db->where('id', $id);
      $this->db->delete('tbl_buku');
    }
  }