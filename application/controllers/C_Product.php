<?php
  defined('BASEPATH' OR exit('No direct script access allowed'));

  class C_Product extends CI_Controller {
    function __construct(){
      parent::__construct();
      $this->load->helper('url');
      $this->load->model('M_Catalog','m_cat');
    }
    function index(){
      $header = array('keywords' => 'STN,chemical,laboratory wares,trading,STN 1508,picric acid,เคมีภัณฑ์,ของใช้ในห้องแล็บ,ของใช้ในห้องแล็ป,กรดพิคริก")',
                      'description' => 'STN trading company - chemical and laboratory wares business',
                      'title' => 'STN หน้าสินค้า'
      );
      $this->load->view('template/V_Header',$header);
      $this->load->view('V_Product');
      $this->load->view('template/V_Footer');
    }

    function Catalog($CatalogID,$CatalogName){
      $header = array('keywords' => 'STN,chemical,laboratory wares,trading,STN 1508,picric acid,เคมีภัณฑ์,ของใช้ในห้องแล็บ,ของใช้ในห้องแล็ป,กรดพิคริก")',
                      'description' => 'STN trading company - chemical and laboratory wares business',
                      'title' => 'STN หน้าสินค้า'
      );
      $category_menu = $this->m_cat->mCategory();
      $category_desc = $this->m_cat->mCategoryDesc($CatalogID);
      $index = array('category_menu' => $category_menu,
                      'category_desc' => $category_desc
                    );
      $this->load->view('template/V_Header',$header);
      $this->load->view('V_Product',$index);
      $this->load->view('template/V_Footer');
    }
  }
 ?>
