<?php 
    $this->load->view('head');
?>        
        <div id="page-wrapper" >
            <div id="page-inner">
			 <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-header">
                            Select Detail Page <small>Halaman untuk menampilkan data detail</small>
                        </h1>
                    </div>
                    <div class="col-md-12">
                        <div class="table-responsive">
                            <?php echo $tabel ?>
                        </div>
                    <a href="<?php echo base_url('coba/select') ?>" class="btn btn-default" style="float:right">Kembali</a>
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
