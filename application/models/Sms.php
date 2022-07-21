<?php

class Sms extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    //must: sms text, sms phone number
    //optional: sms status, sms answer, sms date, sms from type and id
    public function add($array)
    {
        $this->db->insert('sms_list', $array);
        return $this->db->insert_id();
    }
    public function update($id, $array)
    {
        $this->db->update('sms_list', $array, array('id' => $id));
    }
}
