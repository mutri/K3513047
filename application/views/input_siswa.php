<h2>input data</h2>

<?php echo form_open('siswa/input') //default post ?>	
Nama : <?php echo form_input('nama')?></br>
Alamat : <?php echo form_input('alamat')?></br>
Jenis Kelamin : <?php echo form_radio('jk','L')?>Laki-Laki <?php echo form_radio('jk','P')?>Perempuan<br/>
Tanggal Lahir : <input type="date" name="tgl"></br>
<?php echo form_reset('','Reset')?> <?php echo form_submit('tombol','Kirim')?></br>
<?php echo form_close()?>


<br/><br/>
<hr>
<h3>Form 2 with TABLE style</h3>
<br/>
<table>
	<?php echo form_open('siswa/input') ?>
	<tr>
		<td>Nama Lengkap</td>
		<td>:</td>
		<td><?php echo form_input('nama')?></td>
	</tr>
	<tr>
		<td>Alamat</td>
		<td>:</td>
		<td><?php echo form_input('alamat')?></td>
	</tr>
	<tr>
		<td>Jenis Kelamin</td>
		<td>:</td>
		<td><?php echo form_radio('jk','L')?>Laki-Laki <?php echo form_radio('jk','P')?>Perempuan</td>
	</tr>
	<tr>
		<td>Tanggal Lahir</td>
		<td>:</td>
		<td><input type="date" name="tgl"></td>
	</tr>
	<tr>
		<td></td>
		<td></td>
		<td><?php echo form_reset('','Reset')?> <?php echo form_submit('tombol','Kirim')?></td>
	</tr>
	<?php echo form_close()?>
</table>