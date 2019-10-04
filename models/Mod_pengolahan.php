<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mod_pengolahan extends CI_Model {

    private $table   = "pengolahan";
    private $primary = "kode_pengolahan";

    function searchPengolahan($cari, $limit, $offset)
    {
        $this->db->like($this->primary,$cari);
        $this->db->or_like("nama_pengolahan",$cari);
        $this->db->limit($limit, $offset);
        return $this->db->get($this->table);
    }

    function totalRows($table)
	{
		return $this->db->count_all_results($table);
    }

    
    function getAll()
    {
        $this->db->order_by('pengolahan.kode_pengolahan desc');
        return $this->db->get('pengolahan');
    }

    function insertPengolahan($tabel, $data)
    {
        $insert = $this->db->insert($tabel, $data);
        return $insert;
    }

    function getPengolahan($kode_pengolahan)
    {
        $this->db->where("kode_pengolahan", $kode_pengolahan);
        return $this->db->get("pengolahan");
    }

    function cekPengolahan($kode)
    {
        $this->db->where("kode_pengolahan", $kode);
        return $this->db->get("pengolahan");
    }

    function updatePengolahan($kode_pengolahan, $data)
    {
        $this->db->where('kode_pengolahan', $kode_pengolahan);
		$this->db->update('pengolahan', $data);
    }

    function getGambar($kode_pengolahan)
    {
        $this->db->select('gambar');
        $this->db->from('pengolahan');
        $this->db->where('kode_pengolahan', $kode_pengolahan);
        return $this->db->get();
    }

    function deletePengolahan($kode, $table)
    {
        $this->db->where('kode_pengolahan', $kode);
        $this->db->delete($table);
    }

    function pengolahanSearch($cari)
    {
        $this->db->like($this->primary,$cari);
        $this->db->or_like("nama_pengolahan",$cari);
        $this->db->where('jumlah >', 0);
        $this->db->limit(20);
        return $this->db->get($this->table);
    }

    



}

/* End of file ModelName.php */
