<?php if (! defined('BASEPATH')) exit('No direct script access
allowed');
class Siswa extends CI_Controller {

function __construct()
{
 parent::__construct();
 $this->load->library(array('table'));
 $this->load->helper(array('url','form','tgl_helper'));
 $this->load->model('siswa_model','',TRUE);
 }
 function index()
 {
 $this->load->view('menu_siswa');
 }
 
 function cetak_semua(){
 $this->load->view('siswa_list');
 }
 
 
 function input()
 {
 	$tombol = $this->input->post('tombol', TRUE);
 	if ($tombol)
 	{
 		$nama = $this->input->post('nama', TRUE);
 		$alamat = $this->input->post('alamat', TRUE);
 		$jk = $this->input->post('jk', TRUE);
 		$tgl = $this->input->post('tgl', TRUE);

 		$data['nama'] = $nama;
 		$data['alamat'] = $alamat;
 		$data['jenis_kelamin'] = $jk;
 		$data['tanggal_lahir'] = $tgl;

 		$query = $this->db->insert('siswa',$data);
 		if ($query)
 		{
 			echo "<script>alert('Data Berhasil ditambahkan');window.location='".base_url('siswa/cetak_semua')."'</script>";
 		}
 		else
 		{
 			echo mysql_error();
 		}
 	}
 	else
 		{
 			$this->load->view('input_siswa');
 		}
 }
 
  function cetak_detail($id){
  if ($id)
  {
  	 $query = $this->siswa_model->get_by_id($id);
  	 $jum = $query->num_rows();
  	 if ($jum > 0)
  	 {
  	 	$this->db->from('siswa');
  	 	$this->db->where('id',$id);
  	 	$query = $this->db->get();
  	 	$hasil = $query->row_array();

  	 	if ($hasil['jenis_kelamin'] == 'L') { $jeniskelamin = 'Laki-Laki'; } else $jeniskelamin = 'Perempuan';
  	 	$this->table->add_row('<b>Nama Lengkap</b>',':',$hasil['nama']);
  	 	$this->table->add_row('<b>Alamat</b>',':',$hasil['alamat']);
  	 	$this->table->add_row('<b>Jenis Kelamin</b>',':',$jeniskelamin);
  	 	$this->table->add_row('<b>Tanggal Lahir</b>',':',tgl_indo($hasil['tanggal_lahir']));

  	 	$tmpl = array ( 'table_open'  => '<table border="1" cellpadding="2" cellspacing="1">' );
		$this->table->set_template($tmpl);

		$data['id'] = $id;
		$data['tabel'] = $this->table->generate();

  	 	$this->load->view('siswa_detail',$data);
  	 }
  	 else
  	 {
  	 	echo "<script>alert('Data Tidak Ditemukan !');window.location='".base_url('siswa/cetak_semua')."'</script>";
  	 }
  }
  else
  {
 	$this->load->view('menu_siswa');
  }
 }
 }