<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . '/libraries/REST_Controller.php';
use Restserver\libraries\REST_Controller;

class Kontak extends REST_Controller {

    function __construct($config = 'rest') {
        parent::__construct($config);
        $this->load->database();
    }

    //menampilkan data metal_problem
    function index_get() {
        $id = $this->get('id');
        if($id == '') {
            $list_problem = $this->db->get('metal_problem')->result();
        } else {
            $this->db->where('id', $id);
            $list_problem = $this->db->get('metal_problem')->result();
        }
        $this->response($list_problem, 200);
    }

    //mengirim atau menambah kontak baru
    function index_post() {
        $data = array (
            'id' => $this->post('id'),
            'date' => $this->post('date'),
            'detail' => $this->post('detail'),
            'location' => $this->post('location'),
            'status' => $this->post('status'),
            'remark' => $this->post('remark')
        );

        $insert = $this->db->insert('metal_problem', $data);

        if($insert) {
            $this->response($data, 200);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
    }

    //memperbarui/ update data metal_problem yang telah ada
    function index_put() {
        $id = $this->put('id');

        $data = array (
            'id' => $this->put('id'),
            'date' => $this->put('date'),
            'detail' => $this->put('detail'),
            'location' => $this->put('location'),
            'status' => $this->put('status'),
            'remark' => $this->put('remark')
        );

        $this->db->where('id', $id);

        $update = $this->db->update('metal_problem', $data);

        if ($update) {
            $this->response($data, 200);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
    }

    //menghapus salah satu data metal_problem
    function index_delete() {
        $id = $this->delete('id');
        $this->db->where('id', $id);

        $delete = $this->db->delete('metal_problem');

        if ($delete) {
            $this->response(array('status' => 'success'), 201);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
    }
}

?>