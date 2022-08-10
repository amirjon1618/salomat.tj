<?php

class Favorite extends CI_Model
{

    public function __construct()
    {
        parent::__construct();

        $this->load->database();
    }

    /***
     * @param $user_id
     * @return mixed
     *
     */
    public function get($user_id)
    {
        $this->db->select("*");
        $this->db->where('user_id', $user_id);
        $this->db->from('favorites');
        $this->db->join('products', 'products.id =','favorites.favoriteable_id');
        $query = $this->db->get();

        return $query->result_array();
    }

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


    /***
     * @param $favoriteable_id
     * @param $user_id
     *
     */
    public function delete($user_id, $favoriteable_id)
    {
        $this->db->delete('favorites', array('user_id' => $user_id,'favoriteable_id' => $favoriteable_id));
    }
}
