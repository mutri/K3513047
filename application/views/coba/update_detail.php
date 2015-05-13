<?php 
    $this->load->view('head');
?>        
        <div id="page-wrapper" >
            <div id="page-inner">
			 <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-header">
                            Update Page <small>Halaman untuk mengubah data</small>
                        </h1>
                    </div>
                    <div class="col-md-8">
                        <form role="form" method="POST" action="<?php echo base_url('home/update?id='.$nim.'')?>">
                        <div class="form-group">
                            <label>NIM</label>
                            <input class="form-control" type="text" name="nim" placeholder="Masukkan NIM" value="<?php echo $nim ?>" readonly>
                        </div>
                        <div class="form-group">
                            <label>Nama Lengkap</label>
                            <input class="form-control" type="text" name="nama" placeholder="Masukkan Nama Lengkap" value="<?php echo $nama ?>" required>
                        </div>
                        <div class="form-group">
                            <label>Prodi</label>
                            <select class="form-control" name="prodi">
                                <option value="PTIK" <?php if ($prodi=='PTIK') echo "selected" ?>>Pendidikan Teknik Informatika dan Komputer</option>
                                <option value="PTB" <?php if ($prodi=='PTB') echo "selected" ?>>Pendidikan Teknik Bangunan</option>
                                <option value="PTM" <?php if ($prodi=='PTM') echo "selected" ?>>Pendidikan Teknik Mesin</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Angkatan</label>
                            <input class="form-control" type="number" name="angkatan" placeholder="Masukkan Tahun" value="<?php echo $angkatan ?>" required>
                        </div>
                        <div class="form-group">
                            <label>Tempat, Tanggal Lahir</label>
                            <table style="width:100%">
                            <tr><td style="padding-right:10px"><input class="form-control" type="text" name="tempat" placeholder="Tempat Lahir" value="<?php echo $tempat ?>" required></td><td style="padding-left:10px"><input class="form-control" type="date" placeholder="Tanggal Lahir" name="tgl" value="<?php echo $tgl ?>" required></td></tr>
                            </table>
                        </div>
                        <div class="form-group">
                            <label>Jenis Kelamin</label>
                            <br/>
                            <label class="radio-inline">
                                <input type="radio" name="jk" value="L" <?php if ($jk=='L') echo "checked" ?> required> Laki-Laki
                            </label>
                            <label class="radio-inline">
                                <input type="radio" name="jk" value="P" <?php if ($jk=='P') echo "checked" ?> required> Perempuan
                            </label>
                        </div>
                        <div class="form-group">
                            <label>Alamat</label>
                            <textarea class="form-control" name="alamat" required><?php echo $alamat ?></textarea>
                        </div>
                        <div class="form-group">
                        <?php 
                        $pecah = explode(',',$peminatan);
                        ?>
                            <label>Peminatan</label>
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" name="peminatan[]" value="jaringan" <?php if (in_array('jaringan',$pecah)) echo "checked" ?>>Jaringan
                                </label>
                            </div>
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" name="peminatan[]" value="multimedia" <?php if (in_array('multimedia',$pecah)) echo "checked" ?>>Multimedia
                                </label>
                            </div>
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" name="peminatan[]" value="pemrograman" <?php if (in_array('pemrograman',$pecah)) echo "checked" ?>>Pemrograman
                                </label>
                            </div>
                            <input type="hidden" name="hidden" value="foss_update">
                        </div>
                        <div class="form-group">
                            <input class="btn btn-danger" type="reset" name="reset" value="Reset"> <input class="btn btn-success" type="submit" name="update" value="Submit">
                        </div>
                        </form>

                    </div>
                    </div>
                </div> 
                 <!-- /. ROW  -->
				 <footer><p>Copyrigth &copy; 2015 | Adriyanto Prasetyo - Anita Dian Susanti - M.Faisal - Mutri Widiasih | PTIK FKIP UNS 2015</p></footer>
				</div>
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
     <!-- /. WRAPPER  -->
<?php 
    $this->load->view('foot');
?>
