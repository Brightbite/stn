<?php
defined('BASEPATH' OR exit('No direct script access allowed'));
class M_Catalog extends CI_Model
{
      function __construct()
      {
          parent::__construct();
      }

      public function mCategory(){
            $SQL = "SELECT CategoryID,
                           CategoryName,
                           Description
                    FROM Category
                    ORDER BY CategoryID ASC";
            $query = $this->db->query($SQL);
            if ($query->num_rows() > 0) {
              return $query->result();
            }else{
              return 'empty';
            }
      }

      public function mCategoryDesc($CatalogID){
            $SQL = "SELECT CategoryId,
                           CategoryName,
                           Description
                    FROM   Category
                    WHERE  CategoryID = '$CatalogID'";
            $query = $this->db->query($SQL);
            if ($query->num_rows() > 0) {
              return $query->row();
            }else{
              return 'empty';
            }
      }

      public function mProduct($CatalogID){
            $SQL = "SELECT ProductID,
                           ProductName,
                           ProductDesc,
                           CategoryID,
                           ProductPicture
                     FROM  product
                     WHERE CategoryID = '$CatalogID'";
            $query = $this->db->query($SQL);
            if ($query->num_rows() > 0) {
              return $query->result();
            }else{
              return 'empty';
            }
          }

      public function mProductDetail($ProductID){
        $SQL = "SELECT PD.ProductID,
                       PD.ProductName,
                       PD.ProductDesc,
                       PD.CategoryID,
                       PD.ProductPicture,
                       CT.CategoryID,
                       CT.CategoryName,
                       CT.Description
                FROM   product PD, category CT
                WHERE  PD.ProductID = '$ProductID' AND CT.CategoryID = PD.CategoryID";
        $query = $this->db->query($SQL);
        if ($query->num_rows() > 0){
          return $query->row();
        }else {
          return 'empty';
        }
      }

      public function mBrand(){
          $SQL = "SELECT BrandID,
                         BrandName,
                         BrandDesc,
                         BrandPicture
                   FROM  brand";
          $query = $this->db->query($SQL);
          if ($query->num_rows() > 0){
            return $query->result();
          }else {
            return 'empty';
          }
      }

      // public function mBeautyCatalog(){
      //       $SQL = "SELECT *
      //               FROM category_beauty
      //               ORDER BY CategoryName ASC";
      //
      //       $query = $this->db->query($SQL);
      //       if ($query->num_rows() > 0) {
      //         return $query->result();
      //       }else{
      //         return 'empty';
      //       }
      // }
      //
      // public function mSearch($search){
      //
      //        if(isset($search)){
      //           if ($search !='') {
      //               $search = $search;
      //           }else{
      //               $search = '';
      //           }
      //        }else{
      //              $search = '';
      //        }
      //
      //        if ($search != '') {
      //
      //            //SQL Statement
      //            $SQL = "SELECT * FROM product_beauty WHERE ProductName LIKE '%$search%'";
      //
      //            // echo $SQL;
      //            $query = $this->db->query($SQL);
      //            if ($query->num_rows() > 0) {
      //              return $query->result();
      //            }else{
      //              return 'empty';
      //            }
      //      }else{ return 'empty'; }
      // }
}
 ?>
