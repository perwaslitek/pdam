<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class sumber extends MY_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Mod_sumber');
    }


    public function index()
    {
        $data['sumber'] = $this->Mod_sumber->getAll();

        if($this->uri->segment(3)=="create-success") {
            $data['message'] = "<div class='alert alert-block alert-success'>
            <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
            <p><strong><i class='icon-ok'></i>Data</strong> Berhasil Disimpan...!</p></div>";    
            $this->template->load('layoutbackend', 'sumber/sumber_data', $data);
        }
        else if($this->uri->segment(3)=="update-success"){
            $data['message'] = "<div class='alert alert-block alert-success'>
            <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
            <p><strong><i class='icon-ok'></i>Data</strong> Berhasil Diperbarui...!</p></div>"; 
            $this->template->load('layoutbackend', 'sumber/sumber_data', $data);
        }
        else if($this->uri->segment(3)=="delete-success"){
            $data['message'] = "<div class='alert alert-block alert-success'>
            <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
            <p><strong><i class='icon-ok'></i>Data</strong> Berhasil Dihapus...!</p></div>"; 
            $this->template->load('layoutbackend', 'sumber/sumber_data', $data);
        }
        else{
            $data['message'] = "";
            $this->template->load('layoutbackend', 'sumber/sumber_data', $data);
        }

       
    }

    public function create()
    {
        $this->template->load('layoutbackend', 'sumber/sumber_create');
    }

    public function insert()
    {
        if(isset($_POST['save'])) {
        
            //function validasi
            $this->_set_rules();

            //apabila users mengisi form
            if($this->form_validation->run()==true){
                $kode_sumber = $this->input->post('kode_sumber');
                $cek = $this->Mod_sumber->ceksumber($kode_sumber);
                //cek nis yg sudah digunakan
                if($cek->num_rows() > 0){
                    $data['message'] = "<div class='alert alert-block alert-danger'>
                    <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
                    <p><strong><i class='icon-ok'></i>Nama Sumber</strong> Sudah Digunakan...!</p></div>"; 
                    $this->template->load('layoutbackend', 'sumber/sumber_create', $data); 
                }
                //kalo blm digunakan lakukan insert data kedatabase
                else{
                    
                    $save  = array(
                        'kode_sumber'    => $this->input->post('kode_sumber'),
                        'nama_sumber'    => $this->input->post('nama_sumber'),
                        'zona'           => $this->input->post('zona'),
                        'sumber'         => $this->input->post('sumber'),
                        'lokasi'         => $this->input->post('lokasi'),
                        'kappasang'      => $this->input->post('kappasang'),
                        'kapproduksi'    => $this->input->post('kapproduksi'),
                        'elevasi'        => $this->input->post('elevasi'),
                        'korx'           => $this->input->post('korx'),
                        'kory'           => $this->input->post('kory'),
                    );
                    $this->Mod_sumber->insertsumber("sumber", $save);
                    // echo "berhasil"; die();
                    redirect('sumber/index/create-success');
                }
            }
            //jika users mengkosongkan form input
            else{
                $this->template->load('layoutbackend', 'sumber/sumber_create');
            } 

        } //end $_POST['save']
    }

    public function edit($id)
    {
        
        $kode_sumber = $this->uri->segment(3); 
        $data['edit']    = $this->Mod_sumber->getSumber($kode_sumber)->row_array();
        // $data['karyawan'] =  $this->Mod_karyawan->getAll()->result_array();
        // print_r($data['edit']); die();
        $this->template->load('layoutbackend', 'sumber/sumber_edit', $data);
    }

    public function update()
    {
        if(isset($_POST['update'])) {
        
            $this->_set_rules();

            //apabila user apabila user mengisi form input
            if($this->form_validation->run()==true){

                // //apabila password diganti
                 if($this->input->post('nama_sumber') != "") {
                //     $id_jenis      = $this->input->post('id_jenis');
                    
                //     $save  = array(
                //         'id_jenis' => $this->input->post('id_jenis'),
                //         'nama_jenis'   => $this->input->post('nama_jenis'),
                //         'deskripsi'   => ($this->input->post('deskripsi')
                //     );
                //     $this->Mod_jenis->updateJenis($id_jenis, $save);
                //     // echo "berhasil"; die();
                //     redirect('jenis/index/update-success'); 

                //jika password tidak diganit    
                //}
                    $kode_sumber      = $this->input->post('kode_sumber');
                    
                    $save  = array(
                        'kode_sumber'    => $this->input->post('kode_sumber'),
                        'nama_sumber'    => $this->input->post('nama_sumber'),
                        'zona'           => $this->input->post('zona'),
                        'sumber'         => $this->input->post('sumber'),
                        'lokasi'         => $this->input->post('lokasi'),
                        'kappasang'      => $this->input->post('kappasang'),
                        'kapproduksi'    => $this->input->post('kapproduksi'),
                        'elevasi'        => $this->input->post('elevasi'),
                        'korx'           => $this->input->post('korx'),
                        'kory'           => $this->input->post('kory'),
                        'keterangan'     => $this->input->post('keterangan'),
                    );

                    $this->Mod_sumber->updateSumber($kode_sumber, $save);
                    // echo "berhasil"; die();
                    redirect('sumber/index/update-success'); 
                }
                
                
                 

            }
            //jika mengkosongkan
            else{
                $kode_sumber      = $this->input->post('kode_sumber');
                $data['edit']    = $this->Mod_sumber->getSumber($kode_sumber)->row_array();
                $this->template->load('layoutbackend', 'sumber/sumber_edit', $data);
            }
        
        }
    }

    public function delete()
    {
        $kode_sumber = $this->input->post('kode_sumber');

        $this->Mod_sumber->deletesumber($kode_sumber, 'sumber');
        // echo "berhasil"; die();
        redirect('sumber/index/delete-success');
    }

    public function _set_rules(){
        $this->form_validation->set_rules('kode_sumber','Kode Sumber','required|trim');
        $this->form_validation->set_rules('nama_sumber','Nama Sumber','required|trim');
        $this->form_validation->set_message('required', '{field} kosong, silahkan diisi');
        $this->form_validation->set_error_delimiters("<div class='alert alert-danger'><a href='#' class='close' data-dismiss='alert'>&times;</a>","</div>");
    }

}

/* End of file Users.php */
