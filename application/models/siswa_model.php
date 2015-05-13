<?php
class Siswa_model extends CI_Model {
private $primary_key='id';
private $table_name='siswa';

function __construct(){
parent::__construct();
 }

 function get_paged_list()
 {
 return $this->db->get($this->table_name);
 }
 
 function count_all(){
 return $this->db->count_all($this->table_name);
 }

 function get_by_id($id){
 $this->db->where($this->primary_key,$id);
 return $this->db->get($this->table_name);
 }

 function save($person){
 $this->db->insert($this->table_name,$person);
 //return $this->db->insert_id();
 }

 function update($id,$person){
 $this->db->where($this->primary_key,$id);
 $this->db->update($this->table_name,$person);
 }

 function delete($id){
 $this->db->where($this->primary_key,$id);
 $this->db->delete($this->table_name);
 }
 }
 /* query tabel siswa
 CREATE TABLE IF NOT EXISTS `siswa` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `nama` varchar(50) DEFAULT NULL,
  `alamat` varchar(200) NOT NULL,
  `jenis_kelamin` char(1) DEFAULT NULL,
  `tanggal_lahir` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;
 */