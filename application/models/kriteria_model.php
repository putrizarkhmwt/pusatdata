<?php
require_once 'basemodel.php';

class Kriteria_Model extends BaseModel{
    public function __construct(){
        parent::__construct($this);
    }
    public function tableName(){
        return 'kriteria';
    }
    
    public function primaryKey(){
        return 'id_kriteria';
    }
    
    public function schema(){
        return ['id_kriteria','ket_1','ket_2','ket_3','ket_4','ket_5','ket_6','ket_7','ket_8','ket_9','ket_10','gmb_1','gmb_2','gmb_3','gmb_4','gmb_5','gmb_6','gmb_7','gmb_8','gmb_9','gmb_10'];
    }

    public function getAll()
    {
        return $this->db->get($this->tableName())->result();
    }
    
    public function getById($id)
    {
        return $this->db->get_where($this->tableName(), ["id_kriteria" => $id])->row();
    }

    public function savegmb()
    {
        $post = $this->input->post();
        $this->id_kriteria = $post["id_kriteria"];
        $this->gmb_1 = $this->_uploadImage(1);
        $this->ket_1 = $post["ket_1"];
        $this->gmb_2 = $this->_uploadImage(2);
        $this->ket_2 = $post["ket_2"];
        $this->gmb_3 = $this->_uploadImage(3);
        $this->ket_3 = $post["ket_3"];
        $this->gmb_4 = $this->_uploadImage(4);
        $this->ket_4 = $post["ket_4"];
        $this->gmb_5 = $this->_uploadImage(5);
        $this->ket_5 = $post["ket_5"];
        $this->gmb_6 = $this->_uploadImage(6);
        $this->ket_6 = $post["ket_6"];
        $this->gmb_7 = $this->_uploadImage(7);
        $this->ket_7 = $post["ket_7"];
        $this->gmb_8 = $this->_uploadImage(8);
        $this->ket_8 = $post["ket_8"];
        $this->gmb_9 = $this->_uploadImage(9);
        $this->ket_9 = $post["ket_9"];
        $this->gmb_10 = $this->_uploadImage(10);
        $this->ket_10 = $post["ket_10"];
        $this->db->insert($this->tableName(), $this);
    }

    public function updategmb()
    {
        $post = $this->input->post();
        $this->id_kriteria = $post["id_kriteria"];
        
        if (!empty($_FILES["image"])) {
            $this->image = $this->_uploadImage();
        } else {
            $this->image = $post["old_image"];
        }

        $this->upload_ket = $post["upload_ket"];
        $this->db->update($this->tableName(), $this, array('id_kriteria' => $post['id_kriteria']));
    }

    public function deletegmb($id)
    {
        $this->_deleteImage($id);
        return $this->db->delete($this->tableName(), array("id_kriteria" => $id));
    }
    
    private function _uploadImage($id)
    {
        $config['upload_path']          = './uploadx/kriteria/';
        $config['allowed_types']        = 'gif|jpg|jpeg|png';
        $config['encrypt_name']         = TRUE;
        //$config['file_name']            = $this->id_kriteria.'_skm';
        $config['overwrite']            = true;
        $config['max_size']             = 5120; // 5MB
        // $config['max_width']            = 1024;
        // $config['max_height']           = 768;
        $this->load->library('upload', $config);
        if ($id==1) {
            if ($this->upload->do_upload('gmb_1')) {
                return $this->upload->data("file_name");
            }
        }
        elseif ($id==2) {
            if ($this->upload->do_upload('gmb_2')) {
                return $this->upload->data("file_name");
            }
        }
        elseif ($id==3) {
            if ($this->upload->do_upload('gmb_3')) {
                return $this->upload->data("file_name");
            }
        }
        elseif ($id==4) {
            if ($this->upload->do_upload('gmb_4')) {
                return $this->upload->data("file_name");
            }
        }
        elseif ($id==5) {
            if ($this->upload->do_upload('gmb_5')) {
                return $this->upload->data("file_name");
            }
        }
        elseif ($id==6) {
            if ($this->upload->do_upload('gmb_6')) {
                return $this->upload->data("file_name");
            }
        }
        elseif ($id==7) {
            if ($this->upload->do_upload('gmb_7')) {
                return $this->upload->data("file_name");
            }
        }
        elseif ($id==8) {
            if ($this->upload->do_upload('gmb_8')) {
                return $this->upload->data("file_name");
            }
        }
        elseif ($id==9) {
            if ($this->upload->do_upload('gmb_9')) {
                return $this->upload->data("file_name");
            }
        }
        elseif ($id==10) {
            if ($this->upload->do_upload('gmb_10')) {
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