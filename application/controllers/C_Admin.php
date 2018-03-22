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
      if ($this->session->has_userdata('AdminPrivilege')) {
          $AdminPrivilege = $this->session->userdata('AdminPrivilege');
      }else {
          $AdminPrivilege = '';
      }

      if ($this->session->has_userdata('AdminName')) {
          $AdminName = $this->session->userdata('AdminName');
      }else {
          $AdminName = '';
      }
      echo $AdminName;
      if(isset($AdminPrivilege)){
        if($AdminPrivilege == ''){
          // echo "<script>   alert('You are not allowed !'); window.location = 'home'; </script>";
          redirect('login');
        }else{

        }
      }

      $category_menu = $this->m_cat->mCategory();
      $feature_brand = $this->m_cat->mBrand();
      $message = $this->m_con->mMessage();
      $header = array('keywords' => 'STN,chemical,
                      laboratory wares,
                      trading,STN1508,
                      picric acid,
                      เคมีภัณฑ์,
                      ของใช้ในห้องแล็บ,
                      ของใช้ในห้องแล็ป,
                      กรดพิคริก,
                      สารเคมี,
                      ขายสารเคมี,
                      ขายกรดพิคริก")',
                      'description' => 'STN trading company - chemical and laboratory wares business',
                      'title' => 'STN1508 - ห.จ.ก STN1508 เทรดดิ้ง',
                      'category_menu' => $category_menu
                      );
      $index = array('category_menu' => $category_menu,
                     'message' => $message,
                     'AdminName' => $AdminName
                    );
      $footer = array('feature_brand' => $feature_brand);
      $this->load->view('template/V_Header',$header);
      $this->load->view('V_Admin',$index);
      $this->load->view('template/V_Footer',$footer);
    }
    function adminLogin(){
      if ($this->session->has_userdata('AdminPrivilege')) {
          $AdminPrivilege = $this->session->userdata('AdminPrivilege');
      }else {
          $AdminPrivilege = '';
      }

      if(isset($AdminPrivilege)){
        if($AdminPrivilege == '1'){
          redirect('admin');
        }else{

        }
      }
      $header = array('keywords' => 'STN,chemical,
                      laboratory wares,
                      trading,STN1508,
                      picric acid,
                      เคมีภัณฑ์,
                      ของใช้ในห้องแล็บ,
                      ของใช้ในห้องแล็ป,
                      กรดพิคริก,
                      สารเคมี,
                      ขายสารเคมี,
                      ขายกรดพิคริก")',
                      'description' => 'STN trading company - chemical and laboratory wares business',
                      'title' => 'STN1508 - ห.จ.ก STN 1508 เทรดดิ้ง'
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

        $cusdata = array('AdminPrivilege'      =>   $csinfo->AdminPrivilege,
                         'AdminName'      =>   $csinfo->AdminName
                        );

          $this->session->set_userdata($cusdata);
      }
    }

    function adminLogout(){
      $this->session->sess_destroy();
      $this->session->unset_userdata('customerNameSess');
      redirect('home');
    }



    public function removeMessage(){
        $id = $this->input->get('MessageID');
        $data = array('ContactID' => $id);
        $res = $this->m_con->mRemoveMsg($data);
        echo $res;
    }
  }
 ?>
