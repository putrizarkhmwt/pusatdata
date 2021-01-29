<?php
require_once 'basemodel.php';

class Syarat_Model extends BaseModel{
    public function __construct(){
        parent::__construct($this);
    }
    public function tableName(){
        return 'syarat';
    }
    
    public function primaryKey(){
        return 'id_syarat';
    }
    
    public function schema(){
        return ['id_syarat','skm','ktp','kk','domisili','surat_tanah','surat_tanah_ket','surat_sengketa','surat_perbaikan','surat_rekom','berita_acara','form_tnp2k'];
    }

    public function getAll()
    {
        return $this->db->get($this->tableName())->result();
    }
    
    public function getById($id)
    {
        return $this->db->get_where($this->tableName(), ["id_syarat" => $id])->row();
    }

    public function savegmb()
    {
        $post = $this->input->post();
        $this->id_syarat = $post["id_syarat"];
        $this->skm = $this->_uploadImage(1);
        $this->ktp = $this->_uploadImage(2);
        $this->kk = $this->_uploadImage(3);
        $this->domisili = $this->_uploadImage(4);
        $this->surat_tanah = $this->_uploadImage(5);
        $this->surat_tanah_ket = $post["surat_tanah_ket"];
        $this->surat_sengketa = $this->_uploadImage(6);
        $this->surat_perbaikan = $this->_uploadImage(7);
        $this->surat_rekom = $this->_uploadImage(8);
        $this->berita_acara = $this->_uploadImage(9);
        $this->form_tnp2k = $this->_uploadImage(10);
        $this->db->insert($this->tableName(), $this);
    }

    public function updategmb()
    {
        $post = $this->input->post();
        $this->id_syarat = $post["id_syarat"];
        
        if (!empty($_FILES["image"])) {
            $this->image = $this->_uploadImage();
        } else {
            $this->image = $post["old_image"];
        }

        $this->upload_ket = $post["upload_ket"];
        $this->db->update($this->tableName(), $this, array('id_syarat' => $post['id_syarat']));
    }

    public function deletegmb($id)
    {
        $this->_deleteImage($id);
        return $this->db->delete($this->tableName(), array("id_syarat" => $id));
    }
    
    private function _uploadImage($id)
    {
        $config['upload_path']          = './uploadx/syarat/';
        $config['allowed_types']        = 'gif|jpg|jpeg|png|pdf';
        $config['encrypt_name']         = TRUE;
        //$config['file_name']            = $this->id_syarat.'_skm';
        $config['overwrite']            = true;
        $config['max_size']             = 5120; // 5MB
        // $config['max_width']            = 1024;
        // $config['max_height']           = 768;
        $this->load->library('upload', $config);
        if ($id==1) {
            if ($this->upload->do_upload('skm')) {
                return $this->upload->data("file_name");
            }
        }
        elseif ($id==2) {
            if ($this->upload->do_upload('ktp')) {
                return $this->upload->data("file_name");
            }
        }
        elseif ($id==3) {
            if ($this->upload->do_upload('kk')) {
                return $this->upload->data("file_name");
            }
        }
        elseif ($id==4) {
            if ($this->upload->do_upload('domisili')) {
                return $this->upload->data("file_name");
            }
        }
        elseif ($id==5) {
            if ($this->upload->do_upload('surat_tanah')) {
                return $this->upload->data("file_name");
            }
        }
        elseif ($id==6) {
            if ($this->upload->do_upload('surat_sengketa')) {
                return $this->upload->data("file_name");
            }
        }
        elseif ($id==7) {
            if ($this->upload->do_upload('surat_perbaikan')) {
                return $this->upload->data("file_name");
            }
        }
        elseif ($id==8) {
            if ($this->upload->do_upload('surat_rekom')) {
                return $this->upload->data("file_name");
            }
        }
        elseif ($id==9) {
            if ($this->upload->do_upload('berita_acara')) {
                return $this->upload->data("file_name");
            }
        }
        elseif ($id==10) {
            if ($this->upload->do_upload('form_tnp2k')) {
                return $this->upload->data("file_name");
            }
        }
        print_r($this->upload->display_errors());
        return "default.jpg";
    }

    public function _deleteImage($id)
    {
        $syarat = $this->getById($id);
        if ($syarat->image != "default.jpg") {
            $filename = explode(".", $syarat->image)[0];
            return array_map('unlink', glob(FCPATH."uploadx/syarat/$filename.*"));
        }
    }
}