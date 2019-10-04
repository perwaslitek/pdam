<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class reservoir extends MY_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Mod_reservoir');
    }


    public function index()
    {
        $data['reservoir'] = $this->Mod_reservoir->getAll();

        if($this->uri->segment(3)=="create-success") {
            $data['message'] = "<div class='alert alert-block alert-success'>
            <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
            <p><strong><i class='icon-ok'></i>Data</strong> Berhasil Disimpan...!</p></div>";    
            $this->template->load('layoutbackend', 'reservoir/reservoir_data', $data);
        }
        else if($this->uri->segment(3)=="update-success"){
            $data['message'] = "<div class='alert alert-block alert-success'>
            <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
            <p><strong><i class='icon-ok'></i>Data</strong> Berhasil Diperbarui...!</p></div>"; 
            $this->template->load('layoutbackend', 'reservoir/reservoir_data', $data);
        }
        else if($this->uri->segment(3)=="delete-success"){
            $data['message'] = "<div class='alert alert-block alert-success'>
            <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
            <p><strong><i class='icon-ok'></i>Data</strong> Berhasil Dihapus...!</p></div>"; 
            $this->template->load('layoutbackend', 'reservoir/reservoir_data', $data);
        }
        else{
            $data['message'] = "";
            $this->template->load('layoutbackend', 'reservoir/reservoir_data', $data);
        }

       
    }

    public function create()
    {
        $this->template->load('layoutbackend', 'reservoir/reservoir_create');
    }

    public function insert()
    {
        if(isset($_POST['save'])) {
        
            //function validasi
            $this->_set_rules();

            //apabila users mengisi form
            if($this->form_validation->run()==true){
                $kode_reservoir = $this->input->post('kode_reservoir');
                $cek = $this->Mod_reservoir->cekreservoir($kode_reservoir);
                //cek nis yg sudah digunakan
                if($cek->num_rows() > 0){
                    $data['message'] = "<div class='alert alert-block alert-danger'>
                    <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
                    <p><strong><i class='icon-ok'></i>Nama Reservoir</strong> Sudah Digunakan...!</p></div>"; 
                    $this->template->load('layoutbackend', 'reservoir/reservoir_create', $data); 
                }
                //kalo blm digunakan lakukan insert data kedatabase
                else{
                    
                    $save  = array(
                        'kode_reservoir' 	=> $this->input->post('kode_reservoir'),
                        'nama_reservoir'  	=> $this->input->post('nama_reservoir'),
                        'zona3'           	=> $this->input->post('zona3'),
                        'kapasitas'       	=> $this->input->post('kapasitas'),
                        'lokasi3'         	=> $this->input->post('lokasi3'),
                        'inlet'      		=> $this->input->post('inlet'),
                        'outlet'    		=> $this->input->post('outlet'),
                        'elevasi3'        	=> $this->input->post('elevasi3'),
                        'korx3'           	=> $this->input->post('korx3'),
                        'kory3'           	=> $this->input->post('kory3'),
                        'keterangan3'     	=> $this->input->post('keterangan3')
                    );
                    $this->Mod_reservoir->insertreservoir("reservoir", $save);
                    // echo "berhasil"; die();
                    redirect('reservoir/index/create-success');
                }
            }
            //jika users mengkosongkan form input
            else{
                $this->template->load('layoutbackend', 'reservoir/reservoir_create');
            } 

        } //end $_POST['save']
    }

    public function edit($id)
    {
        $kode_reservoir = $this->uri->segment(3); 
        $data['edit']    = $this->Mod_reservoir->getreservoir($id)->row_array();
        // $data['karyawan'] =  $this->Mod_karyawan->getAll()->result_array();
        // print_r($data['edit']); die();
        $this->template->load('layoutbackend', 'reservoir/reservoir_edit', $data);
    }

    public function update()
    {
        if(isset($_POST['update'])) {
        
            $this->_set_rules();

            //apabila user apabila user mengisi form input
            if($this->form_validation->run()==true){

                // //apabila password diganti
                 if($this->input->post('nama_reservoir') != "") {
               
                    $kode_reservoir      = $this->input->post('kode_reservoir');
                    
                    $save  = array(
                        'kode_reservoir' 	=> $this->input->post('kode_reservoir'),
                        'nama_reservoir'  	=> $this->input->post('nama_reservoir'),
                        'zona3'           	=> $this->input->post('zona3'),
                        'kapasitas'       	=> $this->input->post('kapasitas'),
                        'lokasi3'         	=> $this->input->post('lokasi3'),
                        'inlet'      		=> $this->input->post('inlet'),
                        'outlet'    		=> $this->input->post('outlet'),
                        'elevasi3'        	=> $this->input->post('elevasi3'),
                        'korx3'           	=> $this->input->post('korx3'),
                        'kory3'           	=> $this->input->post('kory3'),
                        'keterangan3'     	=> $this->input->post('keterangan3')
                    );

                    $this->Mod_reservoir->updatereservoir($kode_reservoir, $save);
                    // echo "berhasil"; die();
                    redirect('reservoir/index/update-success'); 
                }
                
                
                 

            }
            //jika mengkosongkan
            else{
                $kode_reservoir      = $this->input->post('kode_reservoir');
                $data['edit']    = $this->Mod_reservoir->getreservoir($nama_reservoir)->row_array();
                $this->template->load('layoutbackend', 'reservoir/reservoir_edit', $data);
            }
        
        }
    }

    public function delete()
    {
        $kode_reservoir = $this->input->post('kode_reservoir');

        $this->Mod_reservoir->deletereservoir($kode_reservoir, 'reservoir');
        // echo "berhasil"; die();
        redirect('reservoir/index/delete-success');
    }

    public function _set_rules(){
        $this->form_validation->set_rules('kode_reservoir','Kode reservoir','required|trim');
        $this->form_validation->set_rules('nama_reservoir','Nama reservoir','required|trim');
        $this->form_validation->set_message('required', '{field} kosong, silahkan diisi');
        $this->form_validation->set_error_delimiters("<div class='alert alert-danger'><a href='#' class='close' data-dismiss='alert'>&times;</a>","</div>");
    }

}

/* End of file Users.php */
