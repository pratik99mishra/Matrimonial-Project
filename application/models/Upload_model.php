<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Upload_model extends CI_Model 
{ 

        public function create()
        {
            $data = array(
                'Username' => $this->session->userdata('user'),
            );

            $this->db->insert('gallery',$data);
        
            $fileid = $this->db->insert_id('s_no');
            $path_id = $this->upload_tt1($fileid);
        
            $data = array(
                'Pic1' => $path_id
            );

            $this->db->where('s_no', $fileid);
            $this->db->update('gallery', $data);
        }
    
    function upload_tt1($id)
    {
        clearstatcache();
        $config=array(
            'upload_path'=>'./Matrimonial/assets/ttdocs/',
            'allowed_types'=>'gif|jpg|png',
            'file_name'=>$id,
            'overwrite'=>TRUE,
        );

        $file_element_name='imageURL';
        $this->load->library('upload',$config);

        if($this->upload->do_upload($file_element_name))
        {
            $path_ji=$this->upload->data();
            $path_=$path_ji['file_name'];
        }
        else
        {
            $path_='x';
        }

    return $path_;
    }

    public function fetchphoto()
    {
        //$this->db->distinct('a.Username');
        $this->db->select('a.*');
        $this->db->where('a.Username',$this->session->userdata('user'));
        $this->db->from('gallery a');
        $query = $this->db->get();
        return $query->result();
    }

    public function delclass($no_)
    {
        $this->db->where('s_no', $no_);
        $query = $this->db->delete("gallery");
        return $query;
    }

}
?>