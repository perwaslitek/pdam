'<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mod_sumber extends CI_Model {

    private $table   = "sumber";
    private $primary = "kode_sumber";

    function searchSumber($cari, $limit, $offset)
    {
        $this->db->like($this->primary,$cari);
        $this->db->or_like("nama_sumber",$cari);
        $this->db->limit($limit, $offset);
        return $this->db->get($this->table);
    }

    function totalRows($table)
	{
		return $this->db->count_all_results($table);
    }

    
    function getAll()
    {
        $this->db->order_by('sumber.kode_sumber desc');
        return $this->db->get('sumber');
    }

    function insertSumber($tabel, $data)
    {
        $insert = $this->db->insert($tabel, $data);
        return $insert;
    }

    function getSumber($kode_sumber)
    {
        $this->db->where("kode_sumber", $kode_sumber);
        return $this->db->get("sumber");
    }

    function cekSumber($kode)
    {
        $this->db->where("kode_sumber", $kode);
        return $this->db->get("sumber");
    }

    function updateSumber($kode_sumber, $data)
    {
        $this->db->where('kode_sumber', $kode_sumber);
		$this->db->update('sumber', $data);
    }

    function getGambar($kode_sumber)
    {
        $this->db->select('gambar');
        $this->db->from('sumber');
        $this->db->where('kode_sumber', $kode_sumber);
        return $this->db->get();
    }

    function deleteSumber($kode, $table)
    {
        $this->db->where('kode_sumber', $kode);
        $this->db->delete($table);
    }

    function sumberSearch($cari)
    {
        $this->db->like($this->primary,$cari);
        $this->db->or_like("nama_sumber",$cari);
        $this->db->where('jumlah >', 0);
        $this->db->limit(20);
        return $this->db->get($this->table);
    }

    



}

/* End of file ModelName.php */
