<?php

class Pendaftaran extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->Model('Model_pendaftaran');
    }

    function index() {
        $data['daftar'] = $this->db->query("SELECT ts.no_ktp,ts.id_pasien,ts.no_cm,ts.nama_pasien,ts.alamat_pasien,ts.jenis_kelamin,ts.status_pernikahan,ts.agama,ts.gol_dar,ts.kode_pos FROM tbl_pasien as ts")->result();
        $this->template->load('template', 'pendaftaran/list', $data);
    }

    function add() {
        if (isset($_POST['submit'])) {
            $this->Model_pendaftaran->add();
            redirect('pendaftaran');
        } else {
            $this->template->load('template', 'pendaftaran/add');
        }
    }

    function show_by_id() {
        $id_pasien = $_GET['id_pasien'];
        $sql_pasien = "select * from tbl_pasien where id_pasien='$id_pasien'";
        $pasien = $this->db->query($sql_pasien)->row_Array();
        $data = array(
            'id_pasien' => $pasien['id_pasien'],
            'nama_pasien' => $pasien['nama_pasien'],
            'alamat_pasien' => $pasien['alamat_pasien'],
            'agama' => $pasien['agama'],
            'no_ktp' => $pasien['no_ktp'],
            'gol_dar' => $pasien['gol_dar'],
            'status_pernikahan' => $pasien['status_pernikahan'],
            'jenis_kelamin' => $pasien['jenis_kelamin'],
            'kode_pos' => $pasien['kode_pos'],
        );
        echo json_encode($data);
    }
    
    
    function edit(){
        if (isset($_POST['submit'])) {
            $this->Model_pendaftaran->update();
            redirect('pendaftaran');
        } else {
			$no_cm           = $this->uri->segment(3);
            $data['pasien'] = $this->db->get_where('tbl_pasien',array('no_cm'=>$no_cm))->row_array();
            $this->template->load('template', 'pendaftaran/edit',$data);
            
        }
    }
    
    
    function hapus(){
        $id= $this->uri->segment(3);
        $this->db->where('no_cm',$id);
        $this->db->delete('tbl_pasien');
        redirect('pendaftaran');
    }

}
?>

