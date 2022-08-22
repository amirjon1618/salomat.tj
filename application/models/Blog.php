<?php

class Blog extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
        // Your own constructor code
        $this->load->database();
    }

    private $per_page_admin = 20;
    public function get_all($page = 1, $tag_id = 0, $search_inp = '')
    {
        $array = array();
        $this->db->select("COUNT(*) as total_blog_items");
        $this->db->from('blog');
        if ($tag_id != 0) {
            $this->db->join('blog_tag', 'blog_tag.blog_id = blog.id');
            $this->db->join('tag', 'tag.id = blog_tag.tag_id');
            $this->db->where('tag.id', $tag_id);
        }
        if ($search_inp != '') {
            $this->db->where('blog.blog_title', $search_inp);
        }
        $qq = $this->db->get();
        $total_pages = 0;

        foreach ($qq->result_array() as $row) {
            if ($row['total_blog_items'] > 0)
                $total_pages = ceil($row['total_blog_items'] / $this->per_page_admin);
        }

        $linkk = base_url("index.php/admin/blogs?");
        if ($tag_id != 0) {
            $linkk = $linkk . "tag_id=" . $tag_id . '&';
        }
        if ($search_inp != '') {
            $linkk = $linkk . "search_inp=" . $search_inp . '&';
        }
        $linkk = $linkk . 'page=';
        // $array['link'] = $linkk;
        $pages = array();
        for ($i = 1; $i <= $total_pages; $i++) {
            if ($i == $page) {
                $pages[] = array(
                    "page" => $i,
                    "current_page" => $page,
                    "total_pages" => $total_pages,
                    "base_url" => base_url(),
                    "link" => $linkk,
                    "current" => 'active'
                );
            } else {
                $pages[] = array(
                    "page" => $i,
                    "current_page" => $page,
                    "total_pages" => $total_pages,
                    "base_url" => base_url(),
                    "link" => $linkk,
                    "current" => ''
                );
            }
        }
        $rr = $this->filter_pages($pages, $page);
        $array['pages'] = $rr;

        if ($page > 1 & $page <= $total_pages) {
            $array['prev_page'] = $page - 1;
        }
        if ($page < $total_pages) {
            $array['next_page'] = $page + 1;
        }
        if ($page <= $total_pages) {
            $this->db->select("*");
            $this->db->from('blog');
            if ($tag_id != 0) {
                $this->db->join('blog_tag', 'blog_tag.blog_id = blog.id');
                $this->db->join('tag', 'tag.id = blog_tag.tag_id');
                $this->db->where('tag.id', $tag_id);
            }
            if ($search_inp != '') {
                $this->db->where('blog.blog_title', $search_inp);
            }
            $this->db->limit($this->per_page_admin, ($page - 1) * $this->per_page_admin);
            $query = $this->db->get();
            foreach ($query->result_array() as $row) {
                $row['base_url'] = base_url();
                $row['blog_pic'] = $this->get_blog_avatar($row['id']);
                $array[] = $row;
            }
        } else {
        }
        return $array;
    }


    public function get_all_mb($page = 1, $tag_id = 0, $search_inp = '')
    {
        $array = array();
        $this->db->select("COUNT(*) as total_blog_items");
        $this->db->from('blog');
        if ($tag_id != 0) {
            $this->db->join('blog_tag', 'blog_tag.blog_id = blog.id');
            $this->db->join('tag', 'tag.id = blog_tag.tag_id');
            $this->db->where('tag.id', $tag_id);
        }
        if ($search_inp != '') {
            $this->db->where('blog.blog_title', $search_inp);
        }
        $qq = $this->db->get();
        $total_pages = 0;

        foreach ($qq->result_array() as $row) {
            if ($row['total_blog_items'] > 0)
                $total_pages = ceil($row['total_blog_items'] / $this->per_page_admin);
        }

        $linkk = base_url("index.php/admin/blogs?");
        if ($tag_id != 0) {
            $linkk = $linkk . "tag_id=" . $tag_id . '&';
        }
        if ($search_inp != '') {
            $linkk = $linkk . "search_inp=" . $search_inp . '&';
        }
        $linkk = $linkk . 'page=';
        // $array['link'] = $linkk;
        $pages = array();
        for ($i = 1; $i <= $total_pages; $i++) {
            if ($i == $page) {
                $pages[] = array(
                    "page" => $i,
                    "current_page" => $page,
                    "total_pages" => $total_pages,
                    "base_url" => base_url(),
                    "link" => $linkk,
                    "current" => 'active'
                );
            } else {
                $pages[] = array(
                    "page" => $i,
                    "current_page" => $page,
                    "total_pages" => $total_pages,
                    "base_url" => base_url(),
                    "link" => $linkk,
                    "current" => ''
                );
            }
        }
        $rr = $this->filter_pages($pages, $page);
        $blog_page = $rr[0]['page'];
        $blog_total_pages = $rr[0]['total_pages'];
        $blog_current = $rr[0]['current'];


        if ($page > 1 & $page <= $total_pages) {
            $array['prev_page'] = $page - 1;
        }
        if ($page < $total_pages) {
            $array['next_page'] = $page + 1;
        }
        if ($page <= $total_pages) {
            $this->db->select("*");
            $this->db->from('blog');
            if ($tag_id != 0) {
                $this->db->join('blog_tag', 'blog_tag.blog_id = blog.id');
                $this->db->join('tag', 'tag.id = blog_tag.tag_id');
                $this->db->where('tag.id', $tag_id);
            }
            if ($search_inp != '') {
                $this->db->where('blog.blog_title', $search_inp);
            }
            $this->db->limit($this->per_page_admin, ($page - 1) * $this->per_page_admin);
            $query = $this->db->get();
            $array = [];
            foreach ($query->result_array() as $row) {
                $row['base_url'] = base_url();
                $row['blog_pic'] = $this->get_blog_avatar($row['id']);
                $array[] = $row;
            }
        }
        $data = [
            'blogs' => $array,
            'page' => $blog_page,
            'total_pages' => $blog_total_pages,
            'current' => $blog_current
        ];
        return $data;
    }


    private $per_page_main = 6;
    public function get_all_main($page = 1, $tag_id = 0)
    {
        $array = array();
        $this->db->select("COUNT(*) as total_blog_items");
        $this->db->from('blog');
        if ($tag_id != 0) {
            $this->db->join('blog_tag', 'blog_tag.blog_id = blog.id');
            $this->db->join('tag', 'tag.id = blog_tag.tag_id');
            $this->db->where('tag.id', $tag_id);
        }
        $qq = $this->db->get();
        $total_pages = 0;

        foreach ($qq->result_array() as $row) {
            if ($row['total_blog_items'] > 0)
                $total_pages = ceil($row['total_blog_items'] / $this->per_page_main);
        }

        $linkk = base_url("index.php/admin/blogs?");
        if ($tag_id != 0) {
            $linkk = $linkk . "tag_id=" . $tag_id . '&';
        }
        $linkk = $linkk . 'page=';
        // $array['link'] = $linkk;
        $pages = array();
        for ($i = 1; $i <= $total_pages; $i++) {
            if ($i == $page) {
                $pages[] = array(
                    "page" => $i,
                    "current_page" => $page,
                    "total_pages" => $total_pages,
                    "base_url" => base_url(),
                    "link" => $linkk,
                    "current" => 'active'
                );
            } else {
                $pages[] = array(
                    "page" => $i,
                    "current_page" => $page,
                    "total_pages" => $total_pages,
                    "base_url" => base_url(),
                    "link" => $linkk,
                    "current" => ''
                );
            }
        }
        $rr = $this->filter_pages($pages, $page);
        $array['pages_info']['pages'] = $rr;

        if ($page > 1 & $page <= $total_pages) {
            $array['pages_info']['prev_page'] = $page - 1;
        }
        if ($page < $total_pages) {
            $array['pages_info']['next_page'] = $page + 1;
        }
        if ($page <= $total_pages) {
            $querrry = "blog.*";
            if ($tag_id != 0) {
                $querrry .= ", blog_tag.blog_id, blog_tag.tag_id, tag.tag_name";
            }
            $this->db->select($querrry);
            $this->db->from('blog');
            if ($tag_id != 0) {
                $this->db->join('blog_tag', 'blog_tag.blog_id = blog.id');
                $this->db->join('tag', 'tag.id = blog_tag.tag_id');
                $this->db->where('tag.id', $tag_id);
            }
            $this->db->limit($this->per_page_main, ($page - 1) * $this->per_page_main);
            $query = $this->db->get();


            foreach ($query->result_array() as $row) {
                $row['base_url'] = base_url();
                setlocale(LC_ALL, 'ru_RU.UTF-8');
                $row['blog_date'] = strftime("%B %d, %Y", strtotime($row['blog_created_at']));
                $row['blog_pic'] = $this->get_blog_avatar($row['id']);
                $row['blog_tags'] = $this->get_blog_tags($row['id']);
                $array[] = $row;
            }
        } else {
        }
        return $array;
    }

    public function get_blog_tags($id)
    {
        $array = array();
        $this->db->select('*');
        $this->db->from('blog_tag');
        $this->db->where('blog_id', $id);
        $this->db->join('tag', 'blog_tag.tag_id = tag.id');
        $qq = $this->db->get();
        foreach ($qq->result_array() as $row) {
            $array[] = $row;
        }
        return $array;
    }

    public function get_blog_avatars($id)
    {
        $array = array();
        $this->db->select('*');
        $this->db->from('blog_images');
        $this->db->where('blog_id', $id);
        $this->db->where('blog_avatar', 1);
        $qq = $this->db->get();
        foreach ($qq->result_array() as $row) {
            $array[] = $row['blog_pic'];
        }
        return $array;
    }

    public function get_blog_avatar($id)
    {
        $pic = '';
        $this->db->select('*');
        $this->db->from('blog_images');
        $this->db->where('blog_id', $id);
        $this->db->where('blog_avatar', 1);
        $qq = $this->db->get();
        foreach ($qq->result_array() as $row) {
            $pic = $row['blog_pic'];
        }
        return $pic;
    }

    public function get_blog_images($blog_id)
    {
        $array = array();
        $this->db->select('*');
        $this->db->from('blog_images');
        $this->db->where('blog_id', $blog_id);
        $query = $this->db->get();
        foreach ($query->result_array() as $row) {
            $row['base_url'] = base_url();
            $array[] = $row;
        }
        return $array;
    }

    public function filter_pages($arr, $c_page)
    {
        $count = 6;
        if (sizeof($arr) > $count) {
            $new_arr = array();
            $dd = 0;
            if ($c_page > ($count / 2))
                $dd = floor($c_page / 2);

            for ($i = $dd; $i < $count + $dd; $i++) {
                if (isset($arr[$i])) {
                    $new_arr[] = $arr[$i];
                }
            }
            return $new_arr;
        } else {
            return $arr;
        }
    }

    public function get($id)
    {
        $this->db->select("*");
        $this->db->from('blog');
        $this->db->like('id', $id);
        $query = $this->db->get();
        $array = array();

        foreach ($query->result_array() as $row) {
            $row['blog_pics'] = $this->get_blog_images($row['id']);
            setlocale(LC_ALL, 'ru_RU.UTF-8');
            $row['blog_date'] = strftime("%B %d/ %Y", strtotime($row['blog_created_at']));
            $array = $row;
        }
        return $array;
    }

    public function add($array)
    {
        $tags = $array['tags'];
        unset($array['tags']);
        $this->db->insert('blog', $array);
        $blog_id = $this->db->insert_id();
        if (sizeof($tags) != 0) {
            foreach ($tags as $tag_id) {
                $arr = array('tag_id' => $tag_id, 'blog_id' => $blog_id);
                $this->db->insert('blog_tag', $arr);
            }
        }
        return $this->db->insert_id();
    }

    public function insert_images($blog_id, $array)
    {
        foreach ($array['blog_images'] as $row) {
            $array = array('blog_pic' => $row['uid'] . "" . $row['name'], 'blog_id' => $blog_id);
            $this->db->insert('blog_images', $array);
        }
    }

    public function update($id, $array)
    {
        $this->db->delete('blog_tag', array('blog_id' => $id));
        $tags = $array['tags'];
        unset($array['tags']);
        if (sizeof($tags) != 0) {
            foreach ($tags as $tag_id) {
                $arr = array('tag_id' => $tag_id, 'blog_id' => $id);
                $this->db->insert('blog_tag', $arr);
            }
        }
        $this->db->update('blog', $array, array('id' => $id));
    }

    public function update_blog_avatar($id, $stat_id)
    {
        $this->db->where('id', $id);
        $this->db->update('blog_images', array('blog_avatar' => $stat_id));
    }

    public function remove($id)
    {
        $this->db->delete("blog", array('id' => $id));
    }

    public function remove_image($id)
    {
        $this->db->select("*");
        $this->db->from('blog_images');
        $this->db->where('id', $id);
        $query = $this->db->get();
        foreach ($query->result_array() as $pic) {
            @unlink("././upload_blog/" . $pic['product_pic']);
        }

        $this->db->delete("blog_images", array('id' => $id));
    }
}
