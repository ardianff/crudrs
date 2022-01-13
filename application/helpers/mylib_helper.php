<?php

function cmb_dinamis($name, $table, $field, $pk, $selected = NULL, $extra = NULL) {
    $ci = &get_instance();
    $cmb = "<select name='$name' class='form-control' $extra>";
    $data = $ci->db->get($table)->result();
    foreach ($data as $row){
        $cmb .= "<option value='" . $row->$pk . "'";
        $cmb .= $selected == $row->$pk ? 'selected' : '';
        $cmb .= ">" . $row->$field . "</option>";
    }
    $cmb .= "</select>";
    return $cmb;
}

function chek_seesion(){
    $ci=&get_instance();
    $session=$ci->session->userdata('status_login');
    if($session!='ok') {
        redirect('Auth');
    }
}



function no_cm() {
    // $ci = &get_instance();
    // $chek = $ci->db->query("select no_cm from tbl_pasien order by no_cm DESC");
    // if ($chek->num_rows() > 0) {
    //     // $chek=$chek->row_array();
    //     // $laskode = $chek['no_cm'];
    //     // $ambil = substr($laskode, 2, 3) + 1;
    //     // $newcode = "RSWN" . sprintf("%4s", $ambil);
	// 	foreach($chek->result() as $k){
	// 		$tmp = ((int)$k->kd_max)+1;
	// 		$newcode = "RSWN" . sprintf("%04s", $tmp);
	// 	}
    //     return $newcode;
    // }else{
    //     return '0001';
	$ci = &get_instance();
		$q = $ci->db->query("SELECT MAX(RIGHT(no_cm,4)) AS kd_max FROM tbl_pasien ");
        $kd = "";
        if($q->num_rows()>0){
            foreach($q->result() as $k){
                $tmp = ((int)$k->kd_max)+1;
                $kd = sprintf("%04s", $tmp);
            }
        }else{
            $kd = "0001";
        }
        date_default_timezone_set('Asia/Jakarta');
        return date('ymd').$kd;
    // }
	// date_default_timezone_set('Asia/Jakarta');
    //     return date('dmy').$ci;
}

?>
