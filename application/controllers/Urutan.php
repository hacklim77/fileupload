<?php
defined('BASEPATH') or exit('No direct script access allowed');


/**
 *
 * Controller Urutan
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

class Urutan extends CI_Controller
{
    
  public function __construct()
  {
    parent::__construct();
  }

  public function index()
  {
    $angka = [9,1,6,7,4,3,5,2,8];

    // $urut = sort($angka);

    $data = [
        'angka' => $angka
    ];
    $this->load->view('urutan',$data);
  }

}


/* End of file Urutan.php */
/* Location: ./application/controllers/Urutan.php */