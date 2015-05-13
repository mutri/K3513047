<?php if (! defined('BASEPATH')) exit('No direct script accessallowed');
class Home extends CI_Controller {
function __construct()
{
 
 parent::__construct();
 	error_reporting(0);
 	$this->load->helper(array('url','form','tgl_helper'));
 	$this->load->library(array('table'));
 	$this->load->model(array('data_model'));
 }

 function index()
 {
 	$this->load->view('awal');
 }

 function home()
 {
 	$this->load->view('home');
 }
 
 function insert()
 {
 	$kirim = $this->input->post('kirim');
 	if (!$kirim)
 	{
 		$this->load->view('coba/blank');
 	}
 	else
 	{
 		$nim = strtoupper($this->input->post('nim', TRUE));
 		$nama = $this->input->post('nama', TRUE);
 		$prodi = $this->input->post('prodi', TRUE);
 		$angkatan = $this->input->post('angkatan', TRUE);
 		$tempat = $this->input->post('tempat', TRUE);
 		$tgl = $this->input->post('tgl', TRUE);
 		$jk = $this->input->post('jk', TRUE);
 		$alamat = $this->input->post('alamat', TRUE);

 		$minat = $this->input->post('peminatan', TRUE);

 		if ($minat == '')
 		{
 			echo "<script>alert('Pilih Peminatan Terlebih Dahulu');window.history.back()</script>";
 		}
 		else
 		{
 			$peminatan = implode(',',$minat);
 		
	 		$hidden = $this->input->post('hidden', TRUE);

	 		$this->db->where('nim',$nim);
	 		$this->db->from('identitas');
	 		$query = $this->db->get();

	 		if ($query->num_rows()>0)
	 		{
	 			$faisal['status']="0";
	 			$this->load->view('coba/blank',$faisal);
	 		}
	 		else
	 		{
	 			$dataku['nim']=$nim;
	 			$dataku['nama']=$nama;
	 			$dataku['prodi']=$prodi;
	 			$dataku['angkatan']=$angkatan;
	 			$dataku['tmp_lahir']=$tempat;
	 			$dataku['tgl_lahir']=$tgl;
	 			$dataku['jk']=$jk;
	 			$dataku['peminatan']=$peminatan;
	 			$dataku['alamat']=$alamat;
	 			$dataku['hidden']=$hidden;

	 			$this->data_model->insert_data($dataku);
	 			$faisal['status']="1";
	 			$this->load->view('coba/blank',$faisal);
	 		}
	 	}

 	}

 }

 function update()
 {
 	$id = $this->input->get('id');
 	if (!$id)
 	{
	 	$query = $this->data_model->ambil_semua('identitas');
			
		$this->table->set_heading('No', 'NIM', 'Nama Lengkap', 'Prodi', 'Angkatan', 'Tempat,Tanggal Lahir', 'Jenis Kelamin', 'Alamat', 'Peminatan','Action');
		$no=0;
		foreach ($query->result_array() as $data)
		{
			$no++;
			$nim = $data['nim'];
			$nama = $data['nama'];
			$prodi = nama_prodi($data['prodi']);
			$angkatan = $data['angkatan'];
			$ttl = $data['tmp_lahir']." , ".tgl_indo($data['tgl_lahir']);
			$jk = nama_jk($data['jk']);
			$alamat = $data['alamat'];
			$peminatan = $data['peminatan'];

			$this->table->add_row($no, $nim, $nama, $prodi, $angkatan, $ttl, $jk, $alamat, $peminatan, anchor('home/update?id='.$data['nim'],"<button class='btn btn-success'>Edit</button>"));
		}
		$tmpl = array ( 'table_open'  => '<table class="table table-striped table-bordered table-hover">' );

		$this->table->set_template($tmpl);

		$dataa['tabel'] = $this->table->generate();

		$this->load->view('coba/update',$dataa);
	}
	else
	{
		$update = $this->input->post('update');

		if ($update)
		{
			$nim = strtoupper($this->input->post('nim', TRUE));
	 		$nama = $this->input->post('nama', TRUE);
	 		$prodi = $this->input->post('prodi', TRUE);
	 		$angkatan = $this->input->post('angkatan', TRUE);
	 		$tempat = $this->input->post('tempat', TRUE);
	 		$tgl = $this->input->post('tgl', TRUE);
	 		$jk = $this->input->post('jk', TRUE);
	 		$alamat = $this->input->post('alamat', TRUE);

	 		$minat = $this->input->post('peminatan', TRUE);
	 		$peminatan = implode(',',$minat);
	 		$hidden = $this->input->post('hidden', TRUE);

 			$dataku['nama']=$nama;
 			$dataku['prodi']=$prodi;
 			$dataku['angkatan']=$angkatan;
 			$dataku['tmp_lahir']=$tempat;
 			$dataku['tgl_lahir']=$tgl;
 			$dataku['jk']=$jk;
 			$dataku['peminatan']=$peminatan;
 			$dataku['alamat']=$alamat;
 			$dataku['hidden']=$hidden;

 			$this->data_model->update_data('identitas','nim',$nim,$dataku);
 			echo "<script>alert('Data Berhasil di Update'); window.location='".base_url('home/update')."'</script>";

		}
		else
		{
			$jum = $this->data_model->hitung_record('nim',$id,'identitas');
			if ($jum>0)
			{
				$query = $this->data_model->ambil_detail('nim',$id,'identitas');

				$data=$query->row_array();

				$dataa['nim'] = $data['nim'];
				$dataa['nama'] = $data['nama'];
				$dataa['prodi'] = $data['prodi'];
				$dataa['angkatan'] = $data['angkatan'];
				$dataa['tempat'] = $data['tmp_lahir'];
				$dataa['tgl'] = $data['tgl_lahir'];
				$dataa['jk'] = $data['jk'];
				$dataa['alamat'] = $data['alamat'];
				$dataa['peminatan'] = $data['peminatan'];
				
				$this->load->view('coba/update_detail',$dataa);
			}
			else
			{
				redirect(base_url('home/select'));
			}
		}
	}
 }

 function delete()
 {
 	$id = $this->input->get('id');
 	if (!$id)
 	{
	 	$query = $this->data_model->ambil_semua('identitas');
			
		$this->table->set_heading('No', 'NIM', 'Nama Lengkap', 'Prodi', 'Angkatan', 'Tempat,Tanggal Lahir', 'Jenis Kelamin', 'Alamat', 'Peminatan','Action');
		$no=0;
		foreach ($query->result_array() as $data)
		{
			$no++;
			$nim = $data['nim'];
			$nama = $data['nama'];
			$prodi = nama_prodi($data['prodi']);
			$angkatan = $data['angkatan'];
			$ttl = $data['tmp_lahir']." , ".tgl_indo($data['tgl_lahir']);
			$jk = nama_jk($data['jk']);
			$alamat = $data['alamat'];
			$peminatan = $data['peminatan'];

			$this->table->add_row($no, $nim, $nama, $prodi, $angkatan, $ttl, $jk, $alamat, $peminatan, "<a href='".base_url('home/delete?id='.$nim.'')."' class='btn btn-sm btn-danger'>Hapus</a>");
		}
		$tmpl = array ( 'table_open'  => '<table class="table table-striped table-bordered table-hover">' );

		$this->table->set_template($tmpl);

		$dataa['tabel'] = $this->table->generate();
		$dataa['nim']=$nim;

		$this->load->view('coba/delete',$dataa);
	}
	else if ($id)
	{
		$jum = $this->data_model->hitung_record('nim',$id,'identitas');
		if ($jum>0)
		{
			$this->data_model->hapus_data('identitas','nim',$id);
			echo "<script>alert('Data Berhasil di Hapus'); window.location='".base_url('home/delete')."'</script>";
		}
		else
		{
			// redirect(base_url('coba/select'));
			echo "gagal";
		}
	}
 }

 function select()
 {
	$id = $this->input->get('id');
	if (!$id)
	{
		$query = $this->data_model->ambil_semua('identitas');
		
		$this->table->set_heading('No', 'NIM', 'Nama Lengkap', 'Prodi', 'Angkatan', 'Tempat,Tanggal Lahir', 'Jenis Kelamin', 'Alamat', 'Peminatan','Action');
		$no=0;
		foreach ($query->result_array() as $data)
		{
			$no++;
			$nim = $data['nim'];
			$nama = $data['nama'];
			$prodi = nama_prodi($data['prodi']);
			$angkatan = $data['angkatan'];
			$ttl = $data['tmp_lahir']." , ".tgl_indo($data['tgl_lahir']);
			$jk = nama_jk($data['jk']);
			$alamat = $data['alamat'];
			$peminatan = $data['peminatan'];

			$this->table->add_row($no, $nim, $nama, $prodi, $angkatan, $ttl, $jk, $alamat, $peminatan, anchor('home/select?id='.$data['nim'],"<button class='btn btn-primary'>Detail</button>"));
		}
		$tmpl = array ( 'table_open'  => '<table class="table table-striped table-bordered table-hover">' );

		$this->table->set_template($tmpl);

		$dataa['tabel'] = $this->table->generate();

		$this->load->view('coba/select',$dataa);
	}
	else
	{
		$jum = $this->data_model->hitung_record('nim',$id,'identitas');
		if ($jum>0)
		{
			$query = $this->data_model->ambil_detail('nim',$id,'identitas');

			$data=$query->row_array();

			$nim = $data['nim'];
			$nama = $data['nama'];
			$prodi = nama_prodi($data['prodi']);
			$angkatan = $data['angkatan'];
			$ttl = $data['tmp_lahir']." , ".tgl_indo($data['tgl_lahir']);
			$jk = nama_jk($data['jk']);
			$alamat = $data['alamat'];
			$peminatan = $data['peminatan'];

			$this->table->add_row('<b>NIM</b>',' = ',$nim);
			$this->table->add_row('<b>Nama Lengkap</b>',' = ',$nama);
			$this->table->add_row('<b>Prodi</b>',' = ',$prodi);
			$this->table->add_row('<b>Angkatan</b>',' = ',$angkatan);
			$this->table->add_row('<b>Tempat, Tanggal Lahir</b>',' = ',$ttl);
			$this->table->add_row('<b>Jenis Kelamin</b>',' = ',$jk);
			$this->table->add_row('<b>Alamat</b>',' = ',$alamat);
			$this->table->add_row('<b>Peminatan</b>',' = ',$peminatan);

			$tmpl = array ( 'table_open'  => '<table class="table table-striped table-bordered table-hover">' );

			$this->table->set_template($tmpl);

			$dataa['tabel'] = $this->table->generate();

			$this->load->view('coba/select_detail',$dataa);
		}
		else
		{
			redirect(base_url('home/select'));
		}
	}
 }
 
 }