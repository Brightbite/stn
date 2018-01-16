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

      public function mMessage(){
        $SQL = "SELECT ContactID,
                       ContactDate,
                       ContactName,
                       ContactCompany,
                       ContactEmail,
                       ContactTel,
                       ContactSubject,
                       ContactMessage
                FROM contact
                ORDER BY ContactDate DESC";
        $query = $this->db->query($SQL);
        if ($query->num_rows() > 0){
          return $query->result();
        }else {
          return 'empty';
        }
      }

      public function mRemoveMsg($data){
           if ($this->db->delete('contact',$data)) { // DELETE FROM register ....
             return 'delete success';
           }else{
             return 'error';
           }

      }

      public function mLogin ($username,$password){
          $SQL = 'SELECT AdminID,
                         AdminPW,
                         AdminPrivilege
                  FROM admin
                  WHERE AdminID = '.$this->db->escape($username). 'AND AdminPW =' .$this->db->escape($password);

         //echo $SQL;
       //  $SQL = "SELECT firstname,lastname FROM member WHERE email = $email ";
       // //  if ($email == $loginData){
       // //    $SQL.=" AND email = '$email'";
       // //  }
        $query = $this->db->query($SQL);
         if ($query->num_rows() > 0) {
           return $query->row();
         }else{
           return 'empty';
         }
      }


}
 ?>
