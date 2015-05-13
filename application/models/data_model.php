<?php
class Data_model extends CI_Model {
function __construct(){
	parent::__construct();
 }

 function insert_data($data)
 {
 	$this->db->insert('identitas',$data);
 }

 function ambil_semua($table)
 {
 	return $this->db->get($table);
 }

 function hitung_record($pk,$id,$table)
 {
 	$this->db->where($pk,$id);
 	$query = $this->db->get($table);

 	return $query->num_rows();
 }

 function ambil_detail($pk, $id, $table)
 {
 	$this->db->where($pk,$id);
 	return $this->db->get($table);
 }

 function update_data($table, $pk, $where, $data)
 {
 	$this->db->where($pk, $where);
 	$this->db->update($table, $data);
 }

 function hapus_data($table, $pk, $where)
 {
 	$this->db->where($pk, $where);
 	$this->db->delete($table);
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