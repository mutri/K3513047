<?php 
    $this->load->view('head');
?>        
        <div id="page-wrapper" >
            <div id="page-inner">
			 <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-header">
                            Delete Page <small>Halaman untuk menghapus data</small>
                        </h1>
                    </div>
                    <div class="col-md-12">
                        <div class="table-responsive">
                            <?php echo $tabel ?>
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
<script type="text/javascript">
function confirm() {
var msg;
msg= "Apakah Anda Yakin Akan Menghapus Data ? " ;
var agree=confirm(msg);
if (agree)
return true ;
else
return false ;
}
</script>
<?php 
    $this->load->view('foot');
?>
