<?php

use App\Controllers\BaseController;

defined('BASEPATH') OR exit('No direct script access allowed');


class AjaxController extends BaseController {


  private $perPage = 5;


	/**
    * Get All Data from this method.
    *
    * @return Response
   */
    // public function index()
    // {
    //  $this->load->database();
    //  $count = $this->db->get('posts')->num_rows();


    //  if(!empty($this->input->get("page"))){


    //   $start = ceil($this->input->get("page") * $this->perPage);
    //   $query = $this->db->limit($start, $this->perPage)->get("posts");
    //   $data['posts'] = $query->result();


    //   $result = $this->load->view('data', $data);
    //   echo json_encode($result);


    //  }else{
    //   $query = $this->db->limit(5, $this->perPage)->get("posts");
    //   $data['posts'] = $query->result();


	  // $this->load->view('myPost', $data);
    //  }
    // }


}
