<?php
defined('BASEPATH' OR exit('No direct script access allowed'));
class M_Contact extends CI_Model
{
      function __construct()
      {
          parent::__construct();
      }

      public function mContact($contactDetail){
        if ($this->db->insert('contact',$contactDetail)){
          return 'successfully stored customer message.';
        }else {
          return 'cannot store customer message';
        }
      }

}
 ?>
