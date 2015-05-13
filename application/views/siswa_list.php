 <h2>List Siswa</h2>
 <?php
 $query = $this->siswa_model->get_paged_list();
 // echo $this->table->generate($query);
 echo $this->table->set_heading('No', 'Nama Lengkap', 'Alamat', 'Jenis Kelamin', 'Tanggal Lahir');
$no=0;
foreach ($query->result_array() as $data)
{
	$no++;
	if ($data['jenis_kelamin'] == 'L') { $jeniskelamin = 'Laki-Laki'; } else $jeniskelamin = 'Perempuan';
	$nama = $data['nama'];
	$this->table->add_row($no, anchor('siswa/cetak_detail/'.$data['id'],$data['nama']), $data['alamat'], $jeniskelamin, tgl_indo($data['tanggal_lahir']));
}
$tmpl = array ( 'table_open'  => '<table border="1" cellpadding="2" cellspacing="1">' );

$this->table->set_template($tmpl);

echo $this->table->generate();
echo "<br/>";
echo anchor('siswa/input','<button>Input Siswa</button>');
?>
