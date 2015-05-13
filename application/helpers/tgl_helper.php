<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

function tgl_indo($tgl) {
	$tahun = substr($tgl,0,4);
	$bulan = substr($tgl,5,2);
	$tanggal = substr($tgl,8,2);

	switch ($bulan)
	{
		case '01':
			$bln = "Januari";
		break;
		case '02':
			$bln = "Februari";
		break;
		case '03':
			$bln = "Maret";
		break;
		case '04':
			$bln = "April";
		break;
		case '05':
			$bln = "Mei";
		break;
		case '06':
			$bln = "Juni";
		break;
		case '07':
			$bln = "Juli";
		break;
		case '08':
			$bln = "Agustus";
		break;
		case '09':
			$bln = "September";
		break;
		case '10':
			$bln = "Oktober";
		break;
		case '11':
			$bln = "November";
		break;
		case '12':
			$bln = "Desember";
		break;
	} 

	return $tanggal.' '.$bln.' '.$tahun;
}

function nama_jk($jk)
{
	if ($jk=='L')
	{
		$nama = "Laki-Laki";
	}
	else if ($jk=='P')
	{
		$nama = "Perempuan";
	}

return $nama;
}

function nama_prodi($prodi)
{
	if ($prodi=='PTIK')
	{
		$pro = "Pendidikan Teknik Informatika dan Komputer";
	}
	else if ($prodi=='PTB')
	{
		$pro = "Pendidikan Teknik Bangunan";
	}
	else if ($prodi=='PTM')
	{
		$pro = "Pendidikan Teknik Mesin";
	}

return $pro;
}
/* End of file array_helper.php */
/* Location: ./system/helpers/array_helper.php */