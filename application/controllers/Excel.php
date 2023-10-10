<?php
defined('BASEPATH') or exit('No direct script access allowed');


/**
 *
 * Controller Excel
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
  require 'vendor/autoload.php';

  use PhpOffice\PhpSpreadsheet\Spreadsheet;
  use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

class Excel extends CI_Controller
{
  

  public function __construct()
  {
    parent::__construct();
    date_default_timezone_set("ASIA/JAKARTA");
  }

  public function index()
  {
    //
    $this->load->view('filedn');
  }

  public function download()
  {
    $tgl = date('Y-m-d-H-i-s');
    $namafile = 'File Laporan-'.$tgl;

    $spreadsheet = new Spreadsheet();
    $activeWorksheet = $spreadsheet->getActiveSheet();
    $activeWorksheet->setCellValue('A1', 'Hello World !');

    $writer = new Xlsx($spreadsheet);
    $writer->save(FCPATH.'upload/'.$namafile.'.xlsx');
  }

}


/* End of file Excel.php */
/* Location: ./application/controllers/Excel.php */