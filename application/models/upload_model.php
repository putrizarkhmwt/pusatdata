<?php
require_once 'basemodel.php';

class Upload_Model extends BaseModel{
    public function __construct(){
        parent::__construct($this);
    }
    /*public function countRowC(){
    $query = $this->db->query('SELECT * FROM upload');
    return $query->num_rows();
    }*/
    public function tableName(){
        return 'upload';
    }
    
    public function primaryKey(){
        return 'id_upload';
    }
    
    public function schema(){
        return ['id_upload','image','gmb','upload_ket'];
    }

    public function getAll()
    {
        return $this->db->get($this->tableName())->result();
    }
    
    public function getById($id)
    {
        return $this->db->get_where($this->tableName(), ["id_upload" => $id])->row();
    }

    public function savegmb()
    {
        $post = $this->input->post();
        $this->id_upload = uniqid();
        $this->image = $this->_uploadImage(1);
        $this->upload_ket = $post["upload_ket"];
        $this->gmb = $this->_uploadImage(2);
        $this->img = $this->_uploadImage(3);
        $this->db->insert($this->tableName(), $this);
    }

    public function updategmb()
    {
        $post = $this->input->post();
        $this->id_upload = $post["id_upload"];
        
        if (!empty($_FILES["image"])) {
            $this->image = $this->_uploadImage();
        } else {
            $this->image = $post["old_image"];
        }

        $this->upload_ket = $post["upload_ket"];
        $this->db->update($this->tableName(), $this, array('id_upload' => $post['id_upload']));
    }

    public function deletegmb($id)
    {
        $this->_deleteImage($id);
        return $this->db->delete($this->tableName(), array("id_upload" => $id));
    }
    
    private function _uploadImage($id)
    {
        $config['upload_path']          = "./uploadx/upload/";
        $config['allowed_types']        = 'gif|jpg|png';
        $config['encrypt_name']         = TRUE;
        $config['overwrite']            = true;
        $config['max_size']             = 1024000; // 1MB
        // $config['max_width']            = 1024;
        // $config['max_height']           = 768;

        $this->load->library('upload', $config);
        if ($id==1) {
            if ($this->upload->do_upload('image')) {
            return $this->upload->data("file_name");
            }
        }
        elseif ($id==2) {
            if ($this->upload->do_upload('gmb')) {
            return $this->upload->data("file_name");
            }
        }
        elseif ($id==3) {
            if ($this->upload->do_upload('img')) {
            return $this->upload->data("file_name");
            }
        }
        print_r($this->upload->display_errors());
        return "default.jpg";
    }
    /*private function _uploadGmb()
    {
        $config['upload_path']          = "./uploadx/upload/";
        $config['allowed_types']        = 'gif|jpg|png';
        $config['encrypt_name']         = TRUE;
        $config['overwrite']            = true;
        $config['max_size']             = 1024000; // 1MB
        // $config['max_width']            = 1024;
        // $config['max_height']           = 768;

        $this->load->library('upload', $config);
        if ($this->upload->do_upload('gmb')) {
            return $this->upload->data("file_name");
        }
        print_r($this->upload->display_errors());
        return "default.jpg";
    }
    private function _uploadImg()
    {
        $config['upload_path']          = "./uploadx/upload/";
        $config['allowed_types']        = 'gif|jpg|png';
        $config['encrypt_name']         = TRUE;
        $config['overwrite']            = true;
        $config['max_size']             = 1024000; // 1MB
        // $config['max_width']            = 1024;
        // $config['max_height']           = 768;

        $this->load->library('upload', $config);
        if ($this->upload->do_upload('img')) {
            return $this->upload->data("file_name");
        }
        print_r($this->upload->display_errors());
        return "default.jpg";
    }*/

    public function _deleteImage($id)
    {
        $upload = $this->getById($id);
        if ($upload->image != "default.jpg") {
            $filename = explode(".", $upload->image)[0];
            return array_map('unlink', glob(FCPATH."uploadx/upload/$filename.*"));
        }
    }
}