<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class pengolahan extends MY_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Mod_pengolahan');
    }


    public function index()
    {
        $data['pengolahan'] = $this->Mod_pengolahan->getAll();

        if($this->uri->segment(3)=="create-success") {
            $data['message'] = "<div class='alert alert-block alert-success'>
            <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
            <p><strong><i class='icon-ok'></i>Data</strong> Berhasil Disimpan...!</p></div>";    
            $this->template->load('layoutbackend', 'pengolahan/pengolahan_data', $data);
        }
        else if($this->uri->segment(3)=="update-success"){
            $data['message'] = "<div class='alert alert-block alert-success'>
            <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
            <p><strong><i class='icon-ok'></i>Data</strong> Berhasil Diperbarui...!</p></div>"; 
            $this->template->load('layoutbackend', 'pengolahan/pengolahan_data', $data);
        }
        else if($this->uri->segment(3)=="delete-success"){
            $data['message'] = "<div class='alert alert-block alert-success'>
            <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
            <p><strong><i class='icon-ok'></i>Data</strong> Berhasil Dihapus...!</p></div>"; 
            $this->template->load('layoutbackend', 'pengolahan/pengolahan_data', $data);
        }
        else{
            $data['message'] = "";
            $this->template->load('layoutbackend', 'pengolahan/pengolahan_data', $data);
        }

       
    }

    public function create()
    {
        $this->template->load('layoutbackend', 'pengolahan/pengolahan_create');
    }

    public function insert()
    {
        if(isset($_POST['save'])) {
        
            //function validasi
            $this->_set_rules();

            //apabila users mengisi form
            if($this->form_validation->run()==true){
                $kode_pengolahan = $this->input->post('kode_pengolahan');
                $cek = $this->Mod_pengolahan->cekpengolahan($kode_pengolahan);
                //cek nis yg sudah digunakan
                if($cek->num_rows() > 0){
                    $data['message'] = "<div class='alert alert-block alert-danger'>
                    <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
                    <p><strong><i class='icon-ok'></i>Nama Pengolahan</strong> Sudah Digunakan...!</p></div>"; 
                    $this->template->load('layoutbackend', 'pengolahan/pengolahan_create', $data); 
                }
                //kalo blm digunakan lakukan insert data kedatabase
                else{
                    
                    $save  = array(
                        'kode_pengolahan'   => $this->input->post('kode_pengolahan'),
                        'nama_pengolahan'   => $this->input->post('nama_pengolahan'),
                        'zona2'           	=> $this->input->post('zona2'),
                        'pengolahan'        => $this->input->post('pengolahan'),
                        'lokasi2'         	=> $this->input->post('lokasi2'),
                        'kappasang2'      	=> $this->input->post('kappasang2'),
                        'kapproduksi2'    	=> $this->input->post('kapproduksi2'),
                        'elevasi2'        	=> $this->input->post('elevasi2'),
                        'korx2'           	=> $this->input->post('korx2'),
                        'kory2'           	=> $this->input->post('kory2'),
                        'keterangan2'     => $this->input->post('keterangan2')
                    );
                    $this->Mod_pengolahan->insertpengolahan("pengolahan", $save);
                    // echo "berhasil"; die();
                    redirect('pengolahan/index/create-success');
                }
            }
            //jika users mengkosongkan form input
            else{
                $this->template->load('layoutbackend', 'pengolahan/pengolahan_create');
            } 

        } //end $_POST['save']
    }

    public function edit($id)
    {
        $kode_pengolahan = $this->uri->segment(3); 
        $data['edit']    = $this->Mod_pengolahan->getpengolahan($id)->row_array();
        // $data['karyawan'] =  $this->Mod_karyawan->getAll()->result_array();
        // print_r($data['edit']); die();
        $this->template->load('layoutbackend', 'pengolahan/pengolahan_edit', $data);
    }

    public function update()
    {
        if(isset($_POST['update'])) {
        
            $this->_set_rules();

            //apabila user apabila user mengisi form input
            if($this->form_validation->run()==true){

                // //apabila password diganti
                 if($this->input->post('nama_pengolahan') != "") {
               
                    $kode_pengolahan      = $this->input->post('kode_pengolahan');
                    
                    $save  = array(
                        'kode_pengolahan'   => $this->input->post('kode_pengolahan'),
                        'nama_pengolahan'   => $this->input->post('nama_pengolahan'),
                        'zona2'           	=> $this->input->post('zona2'),
                        'pengolahan'        => $this->input->post('pengolahan'),
                        'lokasi2'         	=> $this->input->post('lokasi2'),
                        'kappasang2'      	=> $this->input->post('kappasang2'),
                        'kapproduksi2'    	=> $this->input->post('kapproduksi2'),
                        'elevasi2'        	=> $this->input->post('elevasi2'),
                        'korx2'           	=> $this->input->post('korx2'),
                        'kory2'           	=> $this->input->post('kory2'),
                        'keterangan2'       => $this->input->post('keterangan2'),
                    );

                    $this->Mod_pengolahan->updatepengolahan($kode_pengolahan, $save);
                    // echo "berhasil"; die();
                    redirect('pengolahan/index/update-success'); 
                }
                
                
                 

            }
            //jika mengkosongkan
            else{
                $kode_pengolahan      = $this->input->post('kode_pengolahan');
                $data['edit']    = $this->Mod_pengolahan->getpengolahan($nama_pengolahan)->row_array();
                $this->template->load('layoutbackend', 'pengolahan/pengolahan_edit', $data);
            }
        
        }
    }

    public function delete()
    {
        $kode_pengolahan = $this->input->post('kode_pengolahan');

        $this->Mod_pengolahan->deletepengolahan($kode_pengolahan, 'pengolahan');
        // echo "berhasil"; die();
        redirect('pengolahan/index/delete-success');
    }

    public function _set_rules(){
        $this->form_validation->set_rules('kode_pengolahan','Kode Pengolahan','required|trim');
        $this->form_validation->set_rules('nama_pengolahan','Nama Pengolahan','required|trim');
        $this->form_validation->set_message('required', '{field} kosong, silahkan diisi');
        $this->form_validation->set_error_delimiters("<div class='alert alert-danger'><a href='#' class='close' data-dismiss='alert'>&times;</a>","</div>");
    }

}

/* End of file Users.php */
