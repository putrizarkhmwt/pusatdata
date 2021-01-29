<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
    
    /*require_once 'basecontroller.php';*/
require APPPATH . '/libraries/BaseController.php';
class UploadFoto extends BaseController {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('validatorq_model','',true);
        $this->load->helper('form');
        $this->load->helper('url');
        $this->load->library("pagination");
        $this->load->model('skm_model');
        $this->load->model('dokumentasi_mbr_model');
        $this->load->model('dokumentasi_skm_model');
        $this->load->model('validatorq_skm_model','',true);
        $this->load->model('validasi_skm_model','',true);
        $this->isLoggedIn();
    }

    public function tambahDokumenMbr($id="") {
        if($id!="" && isset($id)){
            $this->global['pageTitle'] = 'PUSATDATA : Dokumentasi MBR';
            $data['validator'] = Validatorq_Model::findOne($id);
            $this->loadViews("upload_mbr", $this->global, $data , NULL);
        }
        else{
            redirect('validatorq');
        }
    }

    public function editDokumenMbr($id="") {
        if($id!="" && isset($id)){
            $this->global['pageTitle'] = 'PUSATDATA : Dokumentasi MBR';
            $data['dokumentasi'] = $this->dokumentasi_mbr_model->list($id);
            $this->loadViews("edit_upload_mbr", $this->global, $data , NULL);
        }
        else{
            redirect('validatorq');
        }
    }

    public function tambahDokumenSkm($id="", $nik_rt="",$tgl="") {
        if($id!="" && isset($id)){
            $this->global['pageTitle'] = 'PUSATDATA : Dokumentasi SKM';
            $data['validator'] = $this->validatorq_skm_model->validator($id, $tgl, $nik_rt);
            $kecamatan = $data['validator'][0]->kecamatan;
            $this->loadViews("upload_skm", $this->global, $data , NULL);
        }
        else{
            redirect('validatorqskm');
        }
    }

    public function editDokumenSKM($id="", $nik_rt="",$tgl="") {
        if($id!="" && isset($id)){
            $this->global['pageTitle'] = 'PUSATDATA : Dokumentasi SKM';
            $data['dokumentasi'] = $this->dokumentasi_skm_model->list($id, $tgl, $nik_rt);
            $this->loadViews("edit_upload_skm", $this->global, $data , NULL);
        }
        else{
            redirect('validatorqskm');
        }
    }

    public function createDokumentasiSkm(){
        $data=$this->input->post();
        if(count($_POST)>0){
            $nik_skm = $data["nik_skm"];
            $sur_id = $data["sur_id"];
            $ket = $data["ket"];
            $catatan = $data["catatan"];
            $tgl_survey = date('Y-m-d', strtotime($data["tgl_survey"]));
            $tgl_upload = date("Y-m-d H:i:s"); 
            $update_tgl = date("Y-m-d H:i:s"); 
            $nik_rt = $data['nik_rt'];
            $jadwal_survey = $data['jadwal_survey'];

            $config['upload_path']          = './assets/img/';
            $config['allowed_types']        = 'gif|jpg|png';
            $config['overwrite']            = FALSE;
            $config['max_size']             = 1000000;
            $config['max_width']            = 1920;
            $config['max_height']           = 1080;

            $this->load->library('upload', $config);

            $root = FCPATH; // directory folder xampp
            $file1 = trim(addslashes('assets/img/'.$nik_skm.'_'.$nik_rt.'_'.$tgl_survey.'_foto_selfie'));     /*FOTO 1*/
            $file1 = preg_replace('/\s+/', '_', $file1);
            $file2 = trim(addslashes('assets/img/'.$nik_skm.'_'.$nik_rt.'_'.$tgl_survey.'_foto_depan_rumah'));     /*FOTO 2*/ 
            $file2 = preg_replace('/\s+/', '_', $file2);
            $file3 = trim(addslashes('assets/img/'.$nik_skm.'_'.$nik_rt.'_'.$tgl_survey.'_foto_kondisi_rumah'));     /*FOTO 3*/ 
            $file3 = preg_replace('/\s+/', '_', $file3);

            $nFile1 = pathinfo($_FILES['image1']['name'], PATHINFO_EXTENSION); //extension image1
            $nFile2 = pathinfo($_FILES['image2']['name'], PATHINFO_EXTENSION); //extension image2
            $nFile3 = pathinfo($_FILES['image3']['name'], PATHINFO_EXTENSION); //extension image3

            // // JIKA TIDAK UPLOAD FOTO1, FOTO2, FOTO3 DAN FOTO4
            // if (!$this->upload->do_upload('image1') && $this->upload->do_upload('image2') && $this->upload->do_upload('image3') && $this->upload->do_upload('image4') && $this->upload->do_upload('image5') && $this->upload->do_upload('image6')) {
            //     $error = array('error' => $this->upload->display_errors());
            //     $this->load->view('upload_mbr', $error);
            // }
            if (empty($_FILES['image1']['name']) && empty($_FILES['image2']['name']) && empty($_FILES['image3']['name'])){
                echo "<script>alert('Upload Salah Satu Foto') ; window.location.href = '../uploadfoto/tambahDokumenSKM/$nik_skm/$nik_rt/$jadwal_survey'</script>";
            }else{
                if($nFile1!=null){
                    $foto_selfie = $file1.".".$nFile1;
                }else{
                    $foto_selfie = null;
                }

                if($nFile2!=null){
                    $foto_depan_rumah = $file2.".".$nFile2;
                }else{
                    $foto_depan_rumah = null;
                }

                if($nFile3!=null){
                    $foto_kondisi_rumah = $file3.".".$nFile3;
                }else{
                    $foto_kondisi_rumah = null;
                }
                $data = array (
                   'nik_skm'=> $nik_skm,
                   'nik_rt' => $nik_rt,
                   'sur_id'=> $sur_id,
                   'ket' => $ket,
                   'catatan' => $catatan,
                   'tgl_survey'  => $tgl_survey,
                   'tgl_upload'  => $tgl_upload,
                   'update_tgl'  => $update_tgl,
                   'foto_selfie' => $foto_selfie,
                   'foto_depan_rumah' => $foto_depan_rumah,
                   'foto_kondisi_rumah' => $foto_kondisi_rumah
                );
                if($nFile1!=null){
                    move_uploaded_file($_FILES['image1']['tmp_name'], $root.$file1.".".$nFile1);
                }

                if($nFile2!=null){
                    move_uploaded_file($_FILES['image2']['tmp_name'], $root.$file2.".".$nFile2);
                }

                if($nFile3!=null){
                    move_uploaded_file($_FILES['image3']['tmp_name'], $root.$file3.".".$nFile3);
                }
                
                $this->dokumentasi_skm_model->add('dokumentasi_skm',$data);

                //update skm

                $kriteria = "(nik = '".$nik_skm."' AND  jadwal_survey  = '".$jadwal_survey."' AND  nik_rt  = '".$nik_rt."')";
                $jadwal_survey = array(
                                'jadwal_survey' => $tgl_survey
                                );
                $this->skm_model->update_data('skm',$jadwal_survey,$kriteria);

                //update validasi
                $validator = $this->validatorq_skm_model->validator($nik_skm, $jadwal_survey, $nik_rt);
                if(count($validator)>0){
                    $kriteria = "(nik_skm = '".$nik_skm."' AND  tgl_survey  = '".$tgl_survey."' AND  nik_rt  = '".$nik_rt."')";
                    $data = array(
                            'tgl_survey' => $tgl_survey
                            );
                    $this->validasi_skm_model->update('validasi_skm',$data,$kriteria);
                }
                redirect('validatorqskm/detail/'.$nik_skm.'/'.$nik_rt.'/'.$tgl_survey);
            }

        }
        //echo "<script>alert('Anda berhasil menambahkan data') ; window.location.href = '../validatorqSKM/detail/$nik/$nik_rt/$tgl_survey'</script>";
    }

    public function updateDokumentasiSkm($nik="",$nik_rt="",$tgl_survey=""){
        $data=$this->input->post();
        $nik_skm = $data["nik_skm"];
        $sur_id = $data["sur_id"];
        $ket = $data["ket"];
        $catatan = $data["catatan"];
        $tgl_survey = date('Y-m-d', strtotime($data["tgl_survey"]));
        $tgl_upload = date("Y-m-d H:i:s"); 
        $update_tgl = date("Y-m-d H:i:s"); 
        $jadwal_survey = $data["jadwal_survey"];
        $nik_rt = $data["nik_rt"];

        $config['upload_path']          = './assets/img/';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['overwrite']            = FALSE;
        $config['max_size']             = 1000000;
        $config['max_width']            = 1920;
        $config['max_height']           = 1080;

        $this->load->library('upload', $config);

        $root = FCPATH; // directory folder xampp
        $file1 = trim(addslashes('assets/img/'.$nik_skm.'_'.$nik_rt.'_'.$tgl_survey.'_foto_selfie'));     /*FOTO 1*/
        $file1 = preg_replace('/\s+/', '_', $file1);
        $file2 = trim(addslashes('assets/img/'.$nik_skm.'_'.$nik_rt.'_'.$tgl_survey.'_foto_depan_rumah'));     /*FOTO 2*/ 
        $file2 = preg_replace('/\s+/', '_', $file2);
        $file3 = trim(addslashes('assets/img/'.$nik_skm.'_'.$nik_rt.'_'.$tgl_survey.'_foto_kondisi_rumah'));     /*FOTO 3*/ 
        $file3 = preg_replace('/\s+/', '_', $file3);

        $nFile1 = pathinfo($_FILES['image1']['name'], PATHINFO_EXTENSION); //extension image1
        $nFile2 = pathinfo($_FILES['image2']['name'], PATHINFO_EXTENSION); //extension image2
        $nFile3 = pathinfo($_FILES['image3']['name'], PATHINFO_EXTENSION); //extension image3

        // // JIKA TIDAK UPLOAD FOTO1, FOTO2, FOTO3 DAN FOTO4
        // if (!$this->upload->do_upload('image1') && $this->upload->do_upload('image2') && $this->upload->do_upload('image3') && $this->upload->do_upload('image4') && $this->upload->do_upload('image5') && $this->upload->do_upload('image6')) {
        //     $error = array('error' => $this->upload->display_errors());
        //     $this->load->view('upload_mbr', $error);
        // }

        if(empty($_FILES['image1']['name'] || $_FILES['image2']['name'] || $_FILES['image3']['name'])){
            $data = array (
               'ket' => $ket,
               'catatan' => $catatan,
               'tgl_survey'  => $tgl_survey,
               'update_tgl'  => $update_tgl,
            );
            $dt_update = $data;
        }else{
            if(!empty($_FILES['image1']['name'])) {   
                // $dataInfo = $this->upload->data();
                $upload['foto_selfie'] = $file1.".".$nFile1;
                move_uploaded_file($_FILES['image1']['tmp_name'], $root.$file1.".".$nFile1);
            }
            if(!empty($_FILES['image2']['name'])) {   
                // $dataInfo = $this->upload->data();
                $upload['foto_depan_rumah'] = $file2.".".$nFile2;
                move_uploaded_file($_FILES['image2']['tmp_name'], $root.$file2.".".$nFile2);
            }
            if(!empty($_FILES['image3']['name'])) {   
                // $dataInfo = $this->upload->data();
                $upload['foto_kondisi_rumah'] = $file3.".".$nFile3;
                move_uploaded_file($_FILES['image3']['tmp_name'], $root.$file3.".".$nFile3);
            }
            $data = array (
               'ket' => $ket,
               'catatan' => $catatan,
               'tgl_survey'  => $tgl_survey,
               'update_tgl'  => $update_tgl,
            );
            $dt_update = $data+$upload;
        }


        $kriteria = "(nik_skm = '".$nik_skm."' AND  tgl_survey  = '".$jadwal_survey."' AND  nik_rt  = '".$nik_rt."')";
        $this->dokumentasi_skm_model->update_data('dokumentasi_skm',$dt_update,$kriteria);
        
        $kriteria = "(nik = '".$nik_skm."' AND  jadwal_survey  = '".$jadwal_survey."' AND  nik_rt  = '".$nik_rt."')";
        $jadwal_survey = array(
                        'jadwal_survey' => $tgl_survey
                        );
        $this->skm_model->update_data('skm',$jadwal_survey,$kriteria);

        //update validasi
        $validator = $this->validatorq_skm_model->validator($nik_skm, $jadwal_survey, $nik_rt);
        if(count($validator)>0){
            $kriteria = "(nik_skm = '".$nik_skm."' AND  tgl_survey  = '".$tgl_survey."' AND  nik_rt  = '".$nik_rt."')";
            $data = array(
                    'tgl_survey' => $tgl_survey
                    );
            $this->validasi_skm_model->update('validasi_skm',$data,$kriteria);
        }
        redirect('validatorqskm/detail/'.$nik_skm.'/'.$nik_rt.'/'.$tgl_survey);
        echo "<script>alert('Dokumentasi Berhasil Diedit');</script>";
    }

    public function deleteDokumenSkm($nik="",$nik_rt="",$tgl_survey=""){
        $this->dokumentasi_skm_model->delete($nik,$tgl_survey,$nik_rt);
        echo "<script>alert('Data Berhasil Dihapus') ;</script>";
        redirect('validatorqskm/detail/'.$nik.'/'.$nik_rt.'/'.$tgl_survey);
    }

    public function createDokumentasiMbr(){
        $data=$this->input->post();
        if(count($_POST)>0){
            $id_mbr = $data["id_mbr"];
            $sur_id = $data["sur_id"];
            $ket = $data["ket"];
            $catatan = $data["catatan"];
            $tgl_survey = date('Y-m-d', strtotime($data["tgl_survey"]));
            $tgl_upload = date("Y-m-d H:i:s"); 
            $update_tgl = date("Y-m-d H:i:s"); 

            $config['upload_path']          = './assets/img/';
            $config['allowed_types']        = 'gif|jpg|png';
            $config['overwrite']            = FALSE;
            $config['max_size']             = 1000000;
            $config['max_width']            = 1920;
            $config['max_height']           = 1080;

            $this->load->library('upload', $config);

            $root = FCPATH; // directory folder xampp
            $file1 = trim(addslashes('assets/img/'.$id_mbr.'_foto_selfie'));     /*FOTO 1*/
            $file1 = preg_replace('/\s+/', '_', $file1);
            $file2 = trim(addslashes('assets/img/'.$id_mbr.'_foto_depan_rumah'));     /*FOTO 2*/ 
            $file2 = preg_replace('/\s+/', '_', $file2);
            $file3 = trim(addslashes('assets/img/'.$id_mbr.'_foto_kondisi_rumah'));     /*FOTO 3*/ 
            $file3 = preg_replace('/\s+/', '_', $file3);

            $nFile1 = pathinfo($_FILES['image1']['name'], PATHINFO_EXTENSION); //extension image1
            $nFile2 = pathinfo($_FILES['image2']['name'], PATHINFO_EXTENSION); //extension image2
            $nFile3 = pathinfo($_FILES['image3']['name'], PATHINFO_EXTENSION); //extension image3

            // // JIKA TIDAK UPLOAD FOTO1, FOTO2, FOTO3 DAN FOTO4
            // if (!$this->upload->do_upload('image1') && $this->upload->do_upload('image2') && $this->upload->do_upload('image3') && $this->upload->do_upload('image4') && $this->upload->do_upload('image5') && $this->upload->do_upload('image6')) {
            //     $error = array('error' => $this->upload->display_errors());
            //     $this->load->view('upload_mbr', $error);
            // }
            if (empty($_FILES['image1']['name']) && empty($_FILES['image2']['name']) && empty($_FILES['image3']['name'])){
                echo "<script>alert('Upload Salah Satu Foto') ; window.location.href = '../uploadfoto/tambahDokumenMBR/$id_mbr'</script>";
            }

        }

        if($nFile1!=null){
            $foto_selfie = $file1.".".$nFile1;
        }else{
            $foto_selfie = null;
        }

        if($nFile2!=null){
            $foto_depan_rumah = $file2.".".$nFile2;
        }else{
            $foto_depan_rumah = null;
        }

        if($nFile3!=null){
            $foto_kondisi_rumah = $file3.".".$nFile3;
        }else{
            $foto_kondisi_rumah = null;
        }
        $data = array (
           'id_mbr'=> $id_mbr,
           'sur_id'=> $sur_id,
           'ket' => $ket,
           'catatan' => $catatan,
           'tgl_survey'  => $tgl_survey,
           'tgl_upload'  => $tgl_upload,
           'update_tgl'  => $update_tgl,
           'foto_selfie' => $foto_selfie,
           'foto_depan_rumah' => $foto_depan_rumah,
           'foto_kondisi_rumah' => $foto_kondisi_rumah
        );
        if($nFile1!=null){
            move_uploaded_file($_FILES['image1']['tmp_name'], $root.$file1.".".$nFile1);
        }

        if($nFile2!=null){
            move_uploaded_file($_FILES['image2']['tmp_name'], $root.$file2.".".$nFile2);
        }

        if($nFile3!=null){
            move_uploaded_file($_FILES['image3']['tmp_name'], $root.$file3.".".$nFile3);
        }
        
        $this->dokumentasi_mbr_model->add('dokumentasi_mbr',$data);
        echo "<script>alert('Anda berhasil menambahkan data') ; window.location.href = '../validatorq/detail/$id_mbr'</script>";
    }

    public function updateDokumentasiMbr($id=""){
        $data=$this->input->post();
        $id_mbr = $data["id_mbr"];
        $sur_id = $data["sur_id"];
        $ket = $data["ket"];
        $catatan = $data["catatan"];
        $tgl_survey = date('Y-m-d', strtotime($data["tgl_survey"]));
        $tgl_upload = date("Y-m-d H:i:s"); 
        $update_tgl = date("Y-m-d H:i:s"); 

        $config['upload_path']          = './assets/img/';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['overwrite']            = FALSE;
        $config['max_size']             = 1000000;
        $config['max_width']            = 1920;
        $config['max_height']           = 1080;

        $this->load->library('upload', $config);

        $root = FCPATH; // directory folder xampp
        $file1 = trim(addslashes('assets/img/'.$id_mbr.'_foto_selfie'));     /*FOTO 1*/
        $file1 = preg_replace('/\s+/', '_', $file1);
        $file2 = trim(addslashes('assets/img/'.$id_mbr.'_foto_depan_rumah'));     /*FOTO 2*/ 
        $file2 = preg_replace('/\s+/', '_', $file2);
        $file3 = trim(addslashes('assets/img/'.$id_mbr.'_foto_kondisi_rumah'));     /*FOTO 3*/ 
        $file3 = preg_replace('/\s+/', '_', $file3);

        $nFile1 = pathinfo($_FILES['image1']['name'], PATHINFO_EXTENSION); //extension image1
        $nFile2 = pathinfo($_FILES['image2']['name'], PATHINFO_EXTENSION); //extension image2
        $nFile3 = pathinfo($_FILES['image3']['name'], PATHINFO_EXTENSION); //extension image3

        // // JIKA TIDAK UPLOAD FOTO1, FOTO2, FOTO3 DAN FOTO4
        // if (!$this->upload->do_upload('image1') && $this->upload->do_upload('image2') && $this->upload->do_upload('image3') && $this->upload->do_upload('image4') && $this->upload->do_upload('image5') && $this->upload->do_upload('image6')) {
        //     $error = array('error' => $this->upload->display_errors());
        //     $this->load->view('upload_mbr', $error);
        // }

        if(empty($_FILES['image1']['name'] || $_FILES['image2']['name'] || $_FILES['image3']['name'])){
            $data = array (
               'id_mbr'=> $id_mbr,
               'sur_id'=> $sur_id,
               'ket' => $ket,
               'catatan' => $catatan,
               'tgl_survey'  => $tgl_survey,
               'update_tgl'  => $update_tgl,
            );
            $this->dokumentasi_mbr_model->update_data('dokumentasi_mbr',$data,'id_mbr = "'.$id.'"');
        }else{
            if(!empty($_FILES['image1']['name'])) {   
                // $dataInfo = $this->upload->data();
                $upload['foto_selfie'] = $file1.".".$nFile1;
                move_uploaded_file($_FILES['image1']['tmp_name'], $root.$file1.".".$nFile1);
            }
            if(!empty($_FILES['image2']['name'])) {   
                // $dataInfo = $this->upload->data();
                $upload['foto_depan_rumah'] = $file2.".".$nFile2;
                move_uploaded_file($_FILES['image2']['tmp_name'], $root.$file2.".".$nFile2);
            }
            if(!empty($_FILES['image3']['name'])) {   
                // $dataInfo = $this->upload->data();
                $upload['foto_kondisi_rumah'] = $file3.".".$nFile3;
                move_uploaded_file($_FILES['image3']['tmp_name'], $root.$file3.".".$nFile3);
            }
            $data = array (
               'id_mbr'=> $id_mbr,
               'sur_id'=> $sur_id,
               'ket' => $ket,
               'catatan' => $catatan,
               'tgl_survey'  => $tgl_survey,
               'update_tgl'  => $update_tgl,
            );
            $this->dokumentasi_mbr_model->update_data('dokumentasi_mbr',$data+$upload,'id_mbr = "'.$id.'"');
        }

        
        redirect('validatorq/detail/'.$id);
        echo "<script>alert('Dokumentasi Berhasil Diedit');</script>";
    }

    public function deleteDokumenMbr($id=""){
        $this->dokumentasi_mbr_model->delete($id);
        echo "<script>alert('Data BErhasil Dihapus') ;</script>";
        redirect('validatorq/detail/'.$id);
    }

}
?>