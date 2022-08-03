<?php

class Favorite extends CI_Model
{

    public function __construct()
    {
        parent::__construct();

        $this->load->database();
    }

    //must: sms text, sms phone number
    //optional: sms status, sms answer, sms date, sms from type and id

    /***
     * @param $array
     * @return mixed
     *
     */
    public function add($array)
    {

        $this->db->insert('favorites', $array);

        return $this->db->insert_id();
    }

    /***
     * @param $array
     * @param $id
     *
     */
    public function update($id, $array)
    {
        $this->db->update('favorites', $array, array('id' => $id));
    }
}
