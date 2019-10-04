<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mod_reservoir extends CI_Model {

    private $table   = "reservoir";
    private $primary = "kode_reservoir";

    function searchReservoir($cari, $limit, $offset)
    {
        $this->db->like($this->primary,$cari);
        $this->db->or_like("nama_reservoir",$cari);
        $this->db->limit($limit, $offset);
        return $this->db->get($this->table);
    }

    function totalRows($table)
	{
		return $this->db->count_all_results($table);
    }

    
    function getAll()
    {
        $this->db->order_by('reservoir.kode_reservoir desc');
        return $this->db->get('reservoir');
    }

    function insertReservoir($tabel, $data)
    {
        $insert = $this->db->insert($tabel, $data);
        return $insert;
    }

    function getReservoir($kode_reservoir)
    {
        $this->db->where("kode_reservoir", $kode_reservoir);
        return $this->db->get("reservoir");
    }

    function cekReservoir($kode)
    {
        $this->db->where("kode_reservoir", $kode);
        return $this->db->get("reservoir");
    }

    function updateReservoir($kode_reservoir, $data)
    {
        $this->db->where('kode_reservoir', $kode_reservoir);
		$this->db->update('reservoir', $data);
    }

    function getGambar($kode_reservoir)
    {
        $this->db->select('gambar');
        $this->db->from('reservoir');
        $this->db->where('kode_reservoir', $kode_reservoir);
        return $this->db->get();
    }

    function deleteReservoir($kode, $table)
    {
        $this->db->where('kode_reservoir', $kode);
        $this->db->delete($table);
    }

    function reservoirSearch($cari)
    {
        $this->db->like($this->primary,$cari);
        $this->db->or_like("nama_reservoir",$cari);
        $this->db->where('jumlah >', 0);
        $this->db->limit(20);
        return $this->db->get($this->table);
    }

    



}

/* End of file ModelName.php */
