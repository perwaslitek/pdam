<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends MY_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Mod_karyawan');
        $this->load->model('Mod_barang');
        $this->load->model('Mod_jenis');
        $this->load->model('Mod_sumber');
        $this->load->model('Mod_pengolahan');
        $this->load->model('Mod_reservoir');
    }

    function index()
    {
        $data['countkaryawan'] = $this->Mod_karyawan->totalRows('karyawan');
        $data['countbarang'] = $this->Mod_barang->totalRows('barang');
        $data['countjenis'] = $this->Mod_jenis->totalRows('jenis');
        $data['countsumber'] = $this->Mod_sumber->totalRows('sumber');
        $data['countpengolahan'] = $this->Mod_pengolahan->totalRows('pengolahan');
        $data['countreservoir'] = $this->Mod_reservoir->totalRows('reservoir');
        $this->template->load('layoutbackend', 'dashboard/dashboard_data', $data);
    }
        
    


}
/* End of file Controllername.php */
 