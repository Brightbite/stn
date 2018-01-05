<?php
  defined('BASEPATH' OR exit('No direct script access allowed'));

  class C_Product extends CI_Controller {
    function __construct(){
      parent::__construct();
      $this->load->helper('url');
      $this->load->model('M_Catalog','m_cat');
    }
    function index(){
      $header = array('keywords' => 'STN,chemical,laboratory wares,trading,STN 1508,picric acid,เคมีภัณฑ์,ของใช้ในห้องแล็บ,ของใช้ในห้องแล็ป,กรดพิคริก,สารเคมี,ขายสารเคมี,ขายกรดพิคริก")',
                      'description' => 'STN trading company - chemical and laboratory wares business',
                      'title' => 'STN หน้าสินค้า'
      );
      $this->load->view('template/V_Header',$header);
      $this->load->view('V_Product');
      $this->load->view('template/V_Footer');
    }
    //catalog page
    function Catalog($CatalogID,$CatalogName){
      $category_menu = $this->m_cat->mCategory();
      $category_desc = $this->m_cat->mCategoryDesc($CatalogID);
      $show_product = $this->m_cat->mProduct($CatalogID);
      $feature_brand = $this->m_cat->mBrand();

      $header = array('keywords' => 'STN,chemical,laboratory wares,trading,STN 1508,picric acid,เคมีภัณฑ์,ของใช้ในห้องแล็บ,ของใช้ในห้องแล็ป,กรดพิคริก,สารเคมี,ขายสารเคมี,ขายกรดพิคริก")',
                      'description' => 'STN trading company - chemical and laboratory wares business',
                      'title' => 'STN หน้าสินค้า',
                      'category_menu' => $category_menu
                      );
      $index = array('category_menu' => $category_menu,
                      'category_desc' => $category_desc,
                      'show_product'  => $show_product
                    );
      $footer = array('feature_brand' => $feature_brand);

      $this->load->view('template/V_Header',$header);
      $this->load->view('V_Product',$index);
      $this->load->view('template/V_Footer',$footer);
    }

    //product detail page
    function Detail($ProductID){
      $category_menu = $this->m_cat->mCategory();
      $feature_brand = $this->m_cat->mBrand();
      $product_detail = $this->m_cat->mProductDetail($ProductID);

      $header = array('keywords' => 'STN,chemical,laboratory wares,trading,STN 1508,picric acid,เคมีภัณฑ์,ของใช้ในห้องแล็บ,ของใช้ในห้องแล็ป,กรดพิคริก,สารเคมี,ขายสารเคมี,ขายกรดพิคริก")',
                      'description' => 'STN trading company - chemical and laboratory wares business',
                      'title' => 'STN หน้ารายละเอียดสินค้า',
                      'category_menu' => $category_menu
                      );
      $index = array('category_menu' => $category_menu,
                     'product_detail' => $product_detail
                      );
      $footer = array('feature_brand' => $feature_brand,
                      'product_detail' => $product_detail
                      );
      $this->load->view('template/V_Header',$header);
      $this->load->view('V_Product_Detail',$index);
      $this->load->view('template/V_Footer',$footer);
    }
  }
 ?>
