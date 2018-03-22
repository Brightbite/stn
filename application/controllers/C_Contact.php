<?php
  defined('BASEPATH' OR exit('No direct script access allowed'));

  class C_Contact extends CI_Controller {
    function __construct(){
      parent::__construct();
      $this->load->helper('url');
      $this->load->model('M_Catalog','m_cat');
      $this->load->model('M_Contact','m_con');
    }
    function index(){
      $category_menu = $this->m_cat->mCategory();
      $feature_brand = $this->m_cat->mBrand();

      $header = array('keywords' => 'STN,chemical,
                                     laboratory wares,
                                     trading,
                                     STN1508,
                                     picric acid,
                                     เคมีภัณฑ์,
                                     ของใช้ในห้องแล็บ,
                                     ของใช้ในห้องแล็ป,
                                     กรดพิคริก,
                                     สารเคมี,
                                     ขายสารเคมี,
                                     ขายกรดพิคริก")',
                      'description' => 'STN trading company - chemical and laboratory wares business',
                      'title' => 'STN1508 หน้าติดต่อ',
                      'category_menu' => $category_menu
      );
      $index = array('category_menu' => $category_menu);
      $footer = array('feature_brand' => $feature_brand);

      $this->load->view('template/V_Header',$header);
      $this->load->view('V_Contact',$index);
      $this->load->view('template/V_Footer',$footer);
    }

    function Message(){
      $category_menu = $this->m_cat->mCategory();
      $feature_brand = $this->m_cat->mBrand();

      //receive customer message
      $contactName = $this->input->post('customerName');
      $contactCompany = $this->input->post('customerCompany');
      $contactEmail = $this->input->post('customerEmail');
      $contactTel = $this->input->post('customerTel');
      $contactSubject = $this->input->post('customerSubject');
      $contactMessage = $this->input->post('customerMessage');
      //include date and time to database
      date_default_timezone_set("Asia/Bangkok");
      $contDate = date('d');
      $contMonth = date('m');
      $contYear = date('Y');
      $contTime = date('H:i:s');
      $messageDate = $contYear.'-'.$contMonth.'-'.$contDate.'-'.$contTime;

      $contactDetail = array('ContactDate' => $messageDate,
                             'ContactName' => $contactName,
                             'ContactCompany' => $contactCompany,
                             'ContactEmail' => $contactEmail,
                             'ContactTel' => $contactTel,
                             'ContactSubject' => $contactSubject,
                             'ContactMessage' => $contactMessage
                            );
      $contactRecord = $this->m_con->mContact($contactDetail);

      $header = array('keywords' => 'STN,chemical,
                                     laboratory wares,
                                     trading,
                                     STN1508,
                                     picric acid,
                                     เคมีภัณฑ์,
                                     ของใช้ในห้องแล็บ,
                                     ของใช้ในห้องแล็ป,
                                     กรดพิคริก,
                                     สารเคมี,
                                     ขายสารเคมี,
                                     ขายกรดพิคริก")',
                      'description' => 'STN trading company - chemical and laboratory wares business',
                      'title' => 'STN1508 หน้าติดต่อ',
                      'category_menu' => $category_menu
      );
      $index = array('category_menu' => $category_menu);
      $footer = array('feature_brand' => $feature_brand);

      $this->load->view('template/V_Header',$header);
      $this->load->view('V_Contact',$index);
      $this->load->view('template/V_Footer',$footer);
    }
  }
 ?>
