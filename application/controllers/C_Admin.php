<?php
  defined('BASEPATH' OR exit('No direct script access allowed'));

  class C_Admin extends CI_Controller {
    function __construct(){
      parent::__construct();
      $this->load->helper('url');
      $this->load->library('session');
      $this->load->model('M_Catalog','m_cat');
      $this->load->model('M_Contact','m_con');
    }
    function index(){
      $category_menu = $this->m_cat->mCategory();
      $feature_brand = $this->m_cat->mBrand();
      $message = $this->m_con->mMessage();
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
      $index = array('category_menu' => $category_menu,
                     'message' => $message
                    );
      $footer = array('feature_brand' => $feature_brand);
      $this->load->view('template/V_Header',$header);
      $this->load->view('V_Admin',$index);
      $this->load->view('template/V_Footer',$footer);
    }
    function adminLogin(){
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
                      'title' => 'STN - ห.จ.ก STN 1508 เทรดดิ้ง'
                      );
      $this->load->view('template/V_Header',$header);
      $this->load->view('V_Login');
      $this->load->view('template/V_Footer');
    }

    function loginCheck(){
      $username   =     $this->input->post('username');
      $password   =     $this->input->post('password');

      $pwE = md5($password);
      $csinfo = $this->m_con->mLogin($username,$pwE);

      if ($csinfo == 'empty') {
        echo 'false';
      }else{
        echo $csinfo->AdminPrivilege;

        $cusdata = array('AdminPrivilege'      =>   $csinfo->AdminPrivilege
                        );

          $this->session->set_userdata($cusdata);
      }
    }



    public function removeMessage(){
        $id = $this->input->get('MessageID');
        $data = array('ContactID' => $id);
        $res = $this->m_con->mRemoveMsg($data);
        echo $res;
    }
  }
 ?>
