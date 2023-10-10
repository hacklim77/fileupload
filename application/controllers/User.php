<?php
defined('BASEPATH') or exit('No direct script access allowed');


/**
 *
 * Controller User
 *
 * This controller for ...
 *
 * @package   CodeIgniter
 * @category  Controller CI
 * @author    Setiawan Jodi <jodisetiawan@fisip-untirta.ac.id>
 * @author    Raul Guerrero <r.g.c@me.com>
 * @link      https://github.com/setdjod/myci-extension/
 * @param     ...
 * @return    ...
 *
 */

class User extends CI_Controller
{
    
  public function __construct()
  {
    parent::__construct();
  }

  public function index()
  {
    //data user

  }

  public function form()
  {
    //form daftar

    $data = [
      'title' => 'Form registration'
    ];

    /* $user = $this->db->get_where('user',['tgl_habis' => date('Y-m-d H:i:s') ])->row_array();

    $user = $this->db->get('user')->row_array();

    if (date('Y-m-d H:i:s') > $user['tgl_habis']) {
      $this->db->set('status',0);
      $this->db->where('tgl_habis', $user['tgl_habis']);
      $this->db->update('user');
    } */

    $this->load->view('regis',$data);
  }

  public function proses()
  {
    $nama = $this->input->post("nama");
    $email = $this->input->post("email");
    $tgl_daf = date("Y-m-d H:i:s");
    // $tgl_habis = date("Y-m-d H:i:s",strtotime("+1 years",strtotime($tgl_daf)));
    $tgl_habis = date("Y-m-d H:i:s",strtotime("+1 minutes",strtotime($tgl_daf)));

    $data = [
      'nama' => $nama,
      'email' => $email,
      'tgl_daf' => $tgl_daf,
      'tgl_habis' => $tgl_habis,
      'status' => 1
    ];

    $this->db->insert('user',$data);

    redirect('user/form');
  }

}


/* End of file User.php */
/* Location: ./application/controllers/User.php */