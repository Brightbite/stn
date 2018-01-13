<?php
  defined('BASEPATH' OR exit('No direct script access allowed'));

  class C_Home extends CI_Controller {
    function __construct(){
      parent::__construct();
      $this->load->helper('url');
      $this->load->model('M_Catalog','m_cat');
    }
    function index(){
      $category_menu = $this->m_cat->mCategory();
      $feature_brand = $this->m_cat->mBrand();
      $header = array('keywords' => 'STN,chemical,
                      laboratory wares,
                      trading,STN 1508,
                      picric acid,
                      เคมีภัณฑ์,
                      ของใช้ในห้องแล็บ,
                      ของใช้ในห้องแล็ป,
                      กรดพิคริก,
                      สารเคมี,
                      ขายสารเคมี,
                      ขายกรดพิคริก")',
                      'description' => 'STN trading company - chemical and laboratory wares business',
                      'title' => 'STN - ห.จ.ก STN 1508 เทรดดิ้ง',
                      'category_menu' => $category_menu
                      );


      $index = array('category_menu' => $category_menu);
      $footer = array('feature_brand' => $feature_brand);

      $this->load->view('template/V_Header',$header);
      $this->load->view('V_Home',$index);
      $this->load->view('template/V_Footer',$footer);
    }
  }
 ?>
