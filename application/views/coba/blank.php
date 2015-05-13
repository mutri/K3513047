<?php 
    $this->load->view('head');
?>        
        <div id="page-wrapper" >
            <div id="page-inner">
			 <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-header">
                            Insert Page <small>Halaman untuk menambahkan data</small>
                        </h1>
                    </div>
                    <div class="col-md-8">
                    <?php if ($status=="1")
                    {
                        ?>
                    <div class="alert alert-success">
                        <span>Data Berhasil Ditambahkan</span>
                    </div>
                    <?php
                    }
                    else if ($status=="0")
                    {
                        ?>
                    <div class="alert alert-danger">
                        <span>Maaf NIM tersebut sudah terdaftar</span>
                    </div>
                        <?php
                    }
                    ?>
                        <form role="form" method="POST" action="<?php base_url('home')?>">
                        <div class="form-group">
                            <label>NIM</label>
                            <input class="form-control" type="text" name="nim" placeholder="Masukkan NIM" required>
                        </div>
                        <div class="form-group">
                            <label>Nama Lengkap</label>
                            <input class="form-control" type="text" name="nama" placeholder="Masukkan Nama Lengkap" required>
                        </div>
                        <div class="form-group">
                            <label>Prodi</label>
                            <select class="form-control" name="prodi">
                                <option value="PTIK">Pendidikan Teknik Informatika dan Komputer</option>
                                <option value="PTB">Pendidikan Teknik Bangunan</option>
                                <option value="PTM">Pendidikan Teknik Mesin</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Angkatan</label>
                            <input class="form-control" type="number" name="angkatan" placeholder="Masukkan Tahun" required>
                        </div>
                        <div class="form-group">
                            <label>Tempat, Tanggal Lahir</label>
                            <table style="width:100%">
                            <tr><td style="padding-right:10px"><input class="form-control" type="text" name="tempat" placeholder="Tempat Lahir" required></td><td style="padding-left:10px"><input class="form-control" type="date" placeholder="Tanggal Lahir" name="tgl" required></td></tr>
                            </table>
                        </div>
                        <div class="form-group">
                            <label>Jenis Kelamin</label>
                            <br/>
                            <label class="radio-inline">
                                <input type="radio" name="jk" value="L" required> Laki-Laki
                            </label>
                            <label class="radio-inline">
                                <input type="radio" name="jk" value="P" required> Perempuan
                            </label>
                        </div>
                        <div class="form-group">
                            <label>Alamat</label>
                            <textarea class="form-control" name="alamat" required></textarea>
                        </div>
                        <div class="form-group">
                            <label>Peminatan</label>
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" name="peminatan[]" value="jaringan">Jaringan
                                </label>
                            </div>
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" name="peminatan[]" value="multimedia">Multimedia
                                </label>
                            </div>
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" name="peminatan[]" value="pemrograman">Pemrograman
                                </label>
                            </div>
                            <input type="hidden" name="hidden" value="foss">
                        </div>
                        <div class="form-group">
                            <input class="btn btn-danger" type="reset" name="reset" value="Reset"> <input class="btn btn-success" type="submit" name="kirim" value="Submit">
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
